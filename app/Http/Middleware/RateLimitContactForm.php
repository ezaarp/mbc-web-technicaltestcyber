<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class RateLimitContactForm
{
    /**
     * Handle an incoming request
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $key = 'contact-form:' . $request->ip();
        
        // Rate limit: 5 submissions setiap 10 minutes
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            
            // catet attempt
            Log::warning('Contact form rate limit exceeded', [
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'attempts' => RateLimiter::attempts($key),
                'retry_after' => $seconds,
            ]);
            
            return response()->json([
                'error' => 'Too many contact form submissions. Please try again in ' . ceil($seconds / 60) . ' minutes.',
                'retry_after' => $seconds
            ], 429);
        }
        
        $response = $next($request);
        
        // Only hit the rate limiter if the form was successfully submitted
        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
            RateLimiter::hit($key, 600); // 10 minutes
        }
        
        return $response;
    }
} 