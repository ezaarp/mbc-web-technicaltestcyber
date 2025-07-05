<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:2',
                'max:255',
                'regex:/^[a-zA-Z\s\.]+$/',
            ],
            'email' => [
                'required',
                'email:rfc,dns',
                'max:255',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            ],
            'message' => [
                'required',
                'string',
                'min:10',
                'max:2000',
                'regex:/^[a-zA-Z0-9\s\.\,\!\?\-\(\)\@\#\$\%\&\*\+\=\[\]\{\}\|\\\;\:\'\"\<\>\/\~\`\^\n\r]*$/',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Full name is required.',
            'name.min' => 'Name must be at least 2 characters.',
            'name.max' => 'Name may not be greater than 255 characters.',
            'name.regex' => 'Name may only contain letters, spaces, and periods.',

            'email.required' => 'Email is required.',
            'email.email' => 'The email format is invalid.',
            'email.max' => 'Email may not be greater than 255 characters.',
            'email.regex' => 'Email format does not meet the standard.',

            'message.required' => 'Message is required.',
            'message.min' => 'Message must be at least 10 characters.',
            'message.max' => 'Message may not be greater than 2000 characters.',
            'message.regex' => 'Message contains invalid characters.',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'nama lengkap',
            'email' => 'alamat email',
            'message' => 'pesan',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'name' => trim($this->name),
            'email' => strtolower(trim($this->email)),
            'message' => trim($this->message),
        ]);
    }


    protected function failedValidation($validator): void
    {
        Log::warning('Contact form validation failed', [
            'ip' => $this->ip(),
            'user_agent' => $this->userAgent(),
            'errors' => $validator->errors()->toArray(),
        ]);

        parent::failedValidation($validator);
    }
}
