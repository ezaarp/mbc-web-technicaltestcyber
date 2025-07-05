<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactMessage;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    /**
     * Handle contact form submission
     */
    public function store(ContactFormRequest $request)
    {
        $validatedData = $request->validated();

        try {
            Mail::to('admin@mbclaboratory.com')->send(new ContactMessage($validatedData));

            return redirect()->back()->with('success', 'Your message has been successfully sent! Our team will contact you shortly.');
            } catch (\Exception $e) {
                Log::error('Contact form error: ' . $e->getMessage());
            
                return redirect()->back()->with('error', 'Sorry, an error occurred while sending your message. Please try again later.');
            }
    }
}
