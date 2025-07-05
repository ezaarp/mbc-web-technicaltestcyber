# 📧 Contact Form Flow Documentation

## Overview
Dokumentasi ini menjelaskan alur lengkap form kontak MBC Laboratory dari input user hingga email berhasil dikirim.

## 🔄 Flow Diagram

```
┌─────────────────┐    ┌─────────────────┐    ┌─────────────────┐
│   User Input    │    │   Frontend      │    │   Backend       │
│                 │    │   Validation    │    │   Processing    │
└─────────────────┘    └─────────────────┘    └─────────────────┘
         │                       │                       │
         ▼                       ▼                       ▼
┌─────────────────┐    ┌─────────────────┐    ┌─────────────────┐
│ 1. Fill Form    │───▶│ 2. JS Validate  │───▶│ 3. CSRF Check   │
└─────────────────┘    └─────────────────┘    └─────────────────┘
                                                        │
                                                        ▼
┌─────────────────┐    ┌─────────────────┐    ┌─────────────────┐
│ 6. Success Page │◀───│ 5. Email Sent   │◀───│ 4. Server Valid │
└─────────────────┘    └─────────────────┘    └─────────────────┘
```

## 📝 Detailed Steps

### 1. User Input (Frontend)
**File:** `resources/views/contact.blade.php`

User mengisi form dengan field:
- **Name**: Text input (required, min: 2, max: 255)
- **Email**: Email input (required, valid email format)
- **Message**: Textarea (required, min: 10, max: 2000)

```html
<form action="{{ route('contact.store') }}" method="POST" id="contactForm">
    @csrf
    <input type="text" name="name" required>
    <input type="email" name="email" required>
    <textarea name="message" required></textarea>
    <button type="submit">Kirim Pesan</button>
</form>
```

### 2. Client-Side Validation (JavaScript)
**File:** `resources/views/contact.blade.php` (JavaScript section)

Real-time validation meliputi:
- Character counter untuk message field
- Email format validation
- Required field checking
- Visual feedback (border colors)

```javascript
// Character count validation
messageField.addEventListener('input', function() {
    const length = this.value.length;
    if (length > maxLength * 0.9) {
        counter.classList.add('text-red-500');
    }
});

// Visual validation feedback
input.addEventListener('blur', function() {
    if (this.value.trim() !== '') {
        this.classList.add('border-green-300');
    }
});
```

### 3. CSRF Protection
**Middleware:** `web` middleware group

Laravel secara otomatis memvalidasi CSRF token:
- Token di-generate di form dengan `@csrf`
- Middleware memverifikasi token validity
- Request ditolak jika token invalid

### 4. Server-Side Validation
**File:** `app/Http/Requests/ContactFormRequest.php`

Comprehensive validation rules:

```php
public function rules(): array
{
    return [
        'name' => [
            'required',
            'string',
            'min:2',
            'max:255',
            'regex:/^[a-zA-Z\s\.]+$/', // Letters, spaces, dots only
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
```

**Data Preparation:**
```php
protected function prepareForValidation(): void
{
    $this->merge([
        'name' => trim($this->name),
        'email' => strtolower(trim($this->email)),
        'message' => trim($this->message),
    ]);
}
```

### 5. Controller Processing
**File:** `app/Http/Controllers/ContactController.php`

```php
public function store(ContactFormRequest $request)
{
    // Get validated data
    $validatedData = $request->validated();

    try {
        // Send email
        Mail::to('admin@mbclaboratory.com')->send(new ContactMessage($validatedData));
        
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    } catch (\Exception $e) {
        Log::error('Contact form error: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Terjadi kesalahan.');
    }
}
```

### 6. Email Processing
**File:** `app/Mail/ContactMessage.php`

Mail class configuration:
```php
public function __construct($contactData)
{
    $this->contactData = $contactData;
}

public function envelope(): Envelope
{
    return new Envelope(
        subject: 'Pesan Kontak dari ' . $this->contactData['name'] . ' - MBC Laboratory',
    );
}

public function content(): Content
{
    return new Content(
        view: 'emails.contact',
        with: ['contactData' => $this->contactData],
    );
}
```

### 7. Email Template
**File:** `resources/views/emails/contact.blade.php`

Responsive email template dengan:
- Header dengan branding MBC Laboratory
- Contact information display
- Professional styling
- Mobile-friendly design

## 🔒 Security Measures

### Input Sanitization
1. **Trim whitespace** from all inputs
2. **Lowercase email** untuk konsistensi
3. **Regex validation** untuk prevent injection
4. **XSS protection** via Blade escaping

### Validation Security
```php
// Name validation - only letters, spaces, dots
'regex:/^[a-zA-Z\s\.]+$/'

// Email validation - RFC + DNS check
'email:rfc,dns'

// Message validation - safe characters only
'regex:/^[a-zA-Z0-9\s\.\,\!\?\-\(\)\@\#\$\%\&\*\+\=\[\]\{\}\|\\\;\:\'\"\<\>\/\~\`\^\n\r]*$/'
```

### Error Handling
```php
// Validation failure logging
protected function failedValidation($validator): void
{
    Log::warning('Contact form validation failed', [
        'ip' => $this->ip(),
        'user_agent' => $this->userAgent(),
        'errors' => $validator->errors()->toArray(),
    ]);
}

// Email sending error handling
try {
    Mail::to('admin@mbclaboratory.com')->send(new ContactMessage($validatedData));
} catch (\Exception $e) {
    Log::error('Contact form error: ' . $e->getMessage());
    return redirect()->back()->with('error', 'Maaf, terjadi kesalahan.');
}
```

## 📊 Success/Failure Handling

### Success Response
```php
return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
```

Frontend display:
```html
@if(session('success'))
    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
        <div class="flex items-center">
            <span class="text-green-600 mr-2">✅</span>
            <p class="text-green-800">{{ session('success') }}</p>
        </div>
    </div>
@endif
```

### Error Response
```php
return redirect()->back()->with('error', 'Maaf, terjadi kesalahan saat mengirim pesan.');
```

Validation errors display:
```html
@error('name')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
```

## 📈 Performance Optimizations

### Frontend Optimizations
- **Loading state** pada submit button
- **Character counter** real-time
- **Debounced validation** untuk better UX
- **Smooth scrolling** ke error sections

### Backend Optimizations
- **Form Request** validation untuk cleaner code
- **Queue emails** untuk better performance (optional)
- **Caching** validation rules
- **Database logging** untuk monitoring

## 🔧 Configuration

### Email Configuration (.env)
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@mbclaboratory.com"
MAIL_FROM_NAME="MBC Laboratory"
```

### Rate Limiting (Optional)
```php
// In RouteServiceProvider or routes/web.php
Route::middleware('throttle:5,1')->group(function () {
    Route::post('/contact', [ContactController::class, 'store']);
});
```

## 🧪 Testing Scenarios

### Valid Input Test
```
Name: "John Doe"
Email: "john@example.com"
Message: "Hello, I'm interested in your services."

Expected: Success message, email sent
```

### Invalid Input Tests
```
1. Empty name → "Nama lengkap wajib diisi."
2. Invalid email → "Format email tidak valid."
3. Short message → "Pesan harus terdiri dari minimal 10 karakter."
4. XSS attempt → Input sanitized, validation failed
```

### Security Tests
```
1. CSRF attack → 419 Page Expired
2. SQL injection → Input sanitized by regex
3. Large payload → Request size validation
4. Rate limiting → 429 Too Many Requests
```

## 📝 Monitoring & Logging

### Security Logs
- Failed validation attempts dengan IP & User Agent
- Email sending failures
- CSRF token violations
- Rate limiting hits

### Performance Metrics
- Form submission success rate
- Email delivery rate
- Average response time
- User completion rate

---

**Last Updated:** 2024-07-04  
**Version:** 1.0  
**Author:** MBC Laboratory Development Team 