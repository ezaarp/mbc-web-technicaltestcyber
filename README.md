# 🔬 MBC Laboratory Website

> **Technical Test Website for MBC Laboratory** - Advanced Technology Research Center specializing in Cybersecurity, Big Data, Game Technology, and Geographic Information Systems.

[![Live Demo](https://img.shields.io/badge/Live%20Demo-Railway-brightgreen)](https://mbc-web-andrarieza.up.railway.app)
[![Laravel](https://img.shields.io/badge/Laravel-11.x-red)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-blue)](https://php.net)
[![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-cyan)](https://tailwindcss.com)
[![License](https://img.shields.io/badge/License-MIT-yellow)](LICENSE)

![MBC Laboratory Banner](https://via.placeholder.com/1200x400/be0012/ffffff?text=MBC+Laboratory+-+Technology+Research+Center)

## 🌟 **Live Website**

**🔗 Production URL**: [https://mbc-web-andrarieza.up.railway.app](https://mbc-web-andrarieza.up.railway.app)

✅ **SSL Certificate**: Automatically provided by Railway  
🛡️ **Security Headers**: Implemented for enhanced protection  
🚀 **Performance**: Optimized with CDN and caching  

---

## 📋 **Table of Contents**

- [🎯 Project Overview](#-project-overview)
- [🏗️ Project Structure](#️-project-structure)
- [⚡ Features](#-features)
- [🔧 Local Installation](#-local-installation)
- [🚀 Deployment Guide](#-deployment-guide)
- [🔒 SSL Configuration](#-ssl-configuration)
- [⚙️ Backend Configuration](#️-backend-configuration)
- [🛡️ Security Features](#️-security-features)
- [🎨 Frontend Technologies](#-frontend-technologies)
- [📁 File Structure](#-file-structure)
- [🔄 Development Workflow](#-development-workflow)
- [🐛 Troubleshooting](#-troubleshooting)
- [🤝 Contributing](#-contributing)
- [📄 License](#-license)

---

## 🎯 **Project Overview**

MBC Laboratory is a modern, responsive website built with Laravel and TailwindCSS that showcases our research center's expertise in four core technology domains:

### **🔬 Research Divisions**
- **🛡️ Cybersecurity**: Penetration testing, vulnerability assessment, security auditing
- **📊 Big Data**: Data analytics, machine learning, data warehouse solutions
- **🎮 Game Technology**: Game development, AR/VR, interactive media
- **🗺️ Geographic Information Systems**: Digital mapping, spatial analysis, location-based services

### **🎯 Website Purpose**
- Professional landing page for MBC Laboratory
- Showcase research capabilities and services
- Contact form for collaboration inquiries
- Developer portfolio integration
- Modern, secure, and responsive design

---

## 🏗️ **Project Structure**

```
mbc-laboratory/
├── 📂 app/                          # Laravel Application
│   ├── 📂 Http/
│   │   ├── 📂 Controllers/          # Request handlers
│   │   │   ├── HomeController.php   # Main pages controller
│   │   │   └── ContactController.php # Contact form handler
│   │   ├── 📂 Middleware/           # Custom middleware
│   │   │   ├── SecurityHeaders.php  # Security headers
│   │   │   └── RateLimitContactForm.php # Rate limiting
│   │   └── 📂 Requests/             # Form validation
│   │       └── ContactFormRequest.php # Contact form validation
│   └── 📂 Mail/                     # Email classes
│       └── ContactMessage.php       # Contact email template
├── 📂 resources/
│   ├── 📂 views/                    # Blade templates
│   │   ├── 📂 layouts/              # Layout templates
│   │   │   └── app.blade.php        # Main layout
│   │   ├── 📂 emails/               # Email templates
│   │   │   └── contact.blade.php    # Contact email
│   │   ├── home.blade.php           # Homepage
│   │   ├── services.blade.php       # Services page
│   │   ├── contact.blade.php        # Contact page
│   │   └── developer.blade.php      # Developer page
│   └── 📂 css/                      # Stylesheets
│       └── app.css                  # Main CSS file
├── 📂 public/                       # Public assets
│   ├── 📂 images/                   # Image assets
│   ├── 📂 css/                      # Compiled CSS
│   └── 📂 js/                       # JavaScript files
├── 📂 routes/                       # Route definitions
│   └── web.php                      # Web routes
├── 📂 config/                       # Configuration files
├── 📂 database/                     # Database related
├── 📂 api/                          # Vercel API endpoint
├── 📂 deployment/                   # Deployment configs
├── 📄 vercel.json                   # Vercel configuration
├── 📄 ssl-setup.sh                  # SSL setup script
├── 📄 tailwind.config.js            # TailwindCSS config
├── 📄 vite.config.js                # Vite configuration
└── 📄 composer.json                 # PHP dependencies
```

---

## ⚡ **Features**

### **🎨 Frontend Features**
- ✅ **Responsive Design**: Mobile-first, works on all devices
- ✅ **Modern UI/UX**: Glassmorphism effects, smooth animations
- ✅ **Fast Loading**: Optimized assets and lazy loading
- ✅ **Interactive Elements**: Hover effects, smooth scrolling
- ✅ **Accessibility**: WCAG 2.1 compliant design

### **🔧 Backend Features**
- ✅ **Laravel 11**: Latest PHP framework
- ✅ **Contact Form**: Validated form with email notifications
- ✅ **Rate Limiting**: Protection against spam and abuse
- ✅ **Input Validation**: Strict validation with regex patterns
- ✅ **Error Handling**: Graceful error handling and logging

### **🛡️ Security Features**
- ✅ **CSRF Protection**: Protection against cross-site request forgery
- ✅ **XSS Prevention**: All output properly escaped
- ✅ **SQL Injection Prevention**: Eloquent ORM usage
- ✅ **Security Headers**: Content Security Policy, HSTS, etc.
- ✅ **Rate Limiting**: Form submission throttling
- ✅ **Input Sanitization**: Secure data processing

### **🚀 Performance Features**
- ✅ **Asset Optimization**: Minified CSS/JS
- ✅ **Image Optimization**: Efficient image loading
- ✅ **Caching**: Laravel caching for better performance
- ✅ **CDN Ready**: Optimized for content delivery networks

---

## 🔧 **Local Installation**

### **📋 Prerequisites**

Make sure you have the following installed:

- **PHP 8.2+** with extensions: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON
- **Composer** (PHP package manager)
- **Node.js 18+** and **npm**
- **Git**

### **🛠️ Installation Steps**

#### **1. Clone the Repository**
```bash
git clone https://github.com/andrarieza/mbc-laboratory.git
cd mbc-laboratory
```

#### **2. Install PHP Dependencies**
```bash
composer install
```

#### **3. Install Node.js Dependencies**
```bash
npm install
```

#### **4. Environment Configuration**
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

#### **5. Configure Environment Variables**
Edit `.env` file with your settings:
```env
# Application
APP_NAME="MBC Laboratory"
APP_ENV=local
APP_KEY=base64:YOUR_GENERATED_KEY
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database (SQLite for local development)
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite

# Mail Configuration (for contact form)
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@mbclaboratory.com"
MAIL_FROM_NAME="MBC Laboratory"

# Session
SESSION_DRIVER=file
SESSION_LIFETIME=120
```

#### **6. Database Setup**
```bash
# Create SQLite database
touch database/database.sqlite

# Run migrations (if any)
php artisan migrate
```

#### **7. Build Assets**
```bash
# Development build
npm run dev

# Or for production build
npm run build
```

#### **8. Start Development Server**
```bash
php artisan serve
```

**🌐 Your website will be available at: http://localhost:8000**

---

## 🚀 **Deployment Guide**

### **🚂 Railway Deployment (Current Production)**

The website is currently deployed on Railway at: **https://mbc-web-andrarieza.up.railway.app**

#### **Railway Deployment Steps:**

1. **Connect GitHub Repository**
   ```bash
   # Push your code to GitHub
   git add .
   git commit -m "Deploy to Railway"
   git push origin main
   ```

2. **Configure Railway**
   - Go to [railway.app](https://railway.app)
   - Connect your GitHub account
   - Select the repository
   - Railway will auto-detect Laravel

3. **Environment Variables**
   Set these in Railway dashboard:
   ```env
   APP_NAME="MBC Laboratory"
   APP_ENV=production
   APP_KEY=base64:YOUR_32_CHARACTER_KEY
   APP_DEBUG=false
   APP_URL=https://mbc-web-andrarieza.up.railway.app

   # Database
   DB_CONNECTION=mysql
   DATABASE_URL=${MYSQLDATABASE_URL}

   # Mail
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=587
   MAIL_USERNAME=your_email@gmail.com
   MAIL_PASSWORD=your_app_password
   MAIL_ENCRYPTION=tls
   MAIL_FROM_ADDRESS="noreply@mbclaboratory.com"
   MAIL_FROM_NAME="MBC Laboratory"

   # Cache & Session
   CACHE_DRIVER=redis
   SESSION_DRIVER=redis
   REDIS_URL=${REDIS_URL}
   ```

4. **Build Command**
   Railway automatically runs:
   ```bash
   composer install --optimize-autoloader --no-dev
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

#### **Alternative Deployment Options:**

### **🔷 Vercel Deployment**
```bash
# Install Vercel CLI
npm install -g vercel

# Deploy
vercel --prod
```

### **🟦 DigitalOcean App Platform**
1. Connect GitHub repository
2. Configure build settings
3. Set environment variables
4. Deploy

### **🟩 Heroku Deployment**
```bash
# Install Heroku CLI
heroku create mbc-laboratory
git push heroku main
```

---

## 🔒 **SSL Configuration**

### ** Railway SSL (Current Setup)**

Railway provides **automatic SSL certificates** for all deployments:

- ✅ **Automatic HTTPS**: All traffic redirected to HTTPS
- ✅ **SSL Certificate**: Automatically provisioned and renewed
- ✅ **Custom Domain**: Add your domain with automatic SSL
- ✅ **Security Headers**: Configured in middleware

### **🔧 Manual SSL Setup (VPS/Dedicated Server)**

For VPS deployment, use the included SSL setup script:

```bash
# Make script executable
chmod +x ssl-setup.sh

# Run SSL setup (requires sudo)
./ssl-setup.sh
```

This script will:
- Install Certbot (Let's Encrypt client)
- Configure Nginx with SSL
- Set up automatic certificate renewal
- Apply security headers

### **☁️ Cloudflare SSL (Alternative)**

1. **Add Domain to Cloudflare**
   - Sign up at cloudflare.com
   - Add your domain
   - Update nameservers

2. **Configure SSL**
   - SSL/TLS → Full (Strict)
   - Always Use HTTPS → On
   - HSTS → Enabled

3. **Security Settings**
   - Security Level → Medium
   - Bot Fight Mode → On
   - Browser Integrity Check → On

---

## ⚙️ **Backend Configuration**

### **🗄️ Database Configuration**

#### **Local Development (SQLite)**
```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

#### **Production (MySQL)**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mbc_laboratory
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### **📧 Email Configuration**

#### **Development (Mailtrap)**
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
```

#### **Production (Gmail SMTP)**
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
```

### **📱 Contact Form Configuration**

The contact form includes:

- **Rate Limiting**: 5 submissions per 10 minutes per IP
- **Validation**: Strict input validation with regex
- **CSRF Protection**: Automatic token validation
- **Email Notifications**: Automatic email to admin
- **Error Handling**: Graceful error handling and logging

#### **Form Validation Rules:**
```php
'name' => 'required|string|min:2|max:255|regex:/^[a-zA-Z\s\.]+$/'
'email' => 'required|email:rfc,dns|max:255'
'message' => 'required|string|min:10|max:2000'
```

### **🔄 Caching Configuration**

#### **Local Development**
```env
CACHE_DRIVER=file
SESSION_DRIVER=file
```

#### **Production**
```env
CACHE_DRIVER=redis
SESSION_DRIVER=redis
REDIS_URL=your_redis_url
```

---

## 🛡️ **Security Features**

### **🔐 Implemented Security Measures**

#### **1. CSRF Protection**
- All forms include CSRF tokens
- Laravel middleware validates tokens
- Protection against cross-site request forgery

#### **2. XSS Prevention**
- All output escaped using Blade syntax `{{ }}`
- No unescaped output `{{{ }}}`
- Content Security Policy headers

#### **3. SQL Injection Prevention**
- Eloquent ORM exclusively used
- No raw SQL queries
- Parameterized queries

#### **4. Input Validation**
- Strict regex validation for all inputs
- Sanitization of user data
- Character whitelisting

#### **5. Security Headers**
```php
X-Content-Type-Options: nosniff
X-Frame-Options: DENY
X-XSS-Protection: 1; mode=block
Referrer-Policy: strict-origin-when-cross-origin
Strict-Transport-Security: max-age=31536000; includeSubDomains
```

#### **6. Rate Limiting**
- Contact form: 5 submissions per 10 minutes
- Automatic IP-based tracking
- Graceful error handling

### **🔍 Security Testing**

Run security checks:
```bash
# Check for vulnerabilities
composer audit

# Clear all caches
php artisan config:clear
php artisan view:clear
php artisan cache:clear

# Verify security headers
curl -I https://mbc-web-andrarieza.up.railway.app
```

---

## 🎨 **Frontend Technologies**

### **🎯 Core Technologies**
- **Laravel 11**: PHP framework for backend
- **TailwindCSS 3**: Utility-first CSS framework
- **Blade**: Laravel templating engine
- **Vite**: Fast build tool and dev server
- **JavaScript ES6+**: Modern JavaScript features

### **🎨 Design System**

#### **Color Palette**
```css
Primary Red: #be0012
Primary Blue: #203890
Background: #ffffff
Text: #111827, #374151, #6b7280
```

#### **Typography**
- **Font Family**: Inter, system fonts
- **Headings**: Bold, gradient text effects
- **Body**: Regular weight, optimal line height

#### **Components**
- **Cards**: Glassmorphism effects with backdrop blur
- **Buttons**: Gradient backgrounds with hover states
- **Forms**: Floating labels and validation styling
- **Navigation**: Responsive with mobile hamburger menu

### **📱 Responsive Design**

#### **Breakpoints**
```css
sm: 640px   # Small tablets
md: 768px   # Tablets
lg: 1024px  # Small laptops
xl: 1280px  # Laptops
2xl: 1536px # Large screens
```

#### **Grid System**
- **Mobile First**: Start with mobile, scale up
- **Flexbox & Grid**: Modern layout techniques
- **Container Queries**: Component-based responsive design

---

## 📁 **File Structure**

### **🗂️ Key Directories**

#### **Application Logic (`app/`)**
```
app/
├── Http/Controllers/
│   ├── HomeController.php      # Main pages (home, services, developer)
│   └── ContactController.php   # Contact form handling
├── Http/Requests/
│   └── ContactFormRequest.php  # Form validation rules
├── Http/Middleware/
│   ├── SecurityHeaders.php     # Security headers middleware
│   └── RateLimitContactForm.php # Rate limiting middleware
└── Mail/
    └── ContactMessage.php      # Contact email template
```

#### **Views (`resources/views/`)**
```
resources/views/
├── layouts/
│   └── app.blade.php          # Master layout
├── emails/
│   └── contact.blade.php      # Contact email template
├── home.blade.php             # Homepage
├── services.blade.php         # Services & divisions page
├── contact.blade.php          # Contact form page
└── developer.blade.php        # Developer information page
```

#### **Assets (`public/`)**
```
public/
├── css/
│   └── app.css               # Compiled CSS
├── js/
│   └── app.js                # Compiled JavaScript
└── images/
    ├── logo-mbc.png          # MBC Laboratory logo
    ├── telu.jpg              # Hero image
    └── divisions/            # Division-specific images
```

### **🔧 Configuration Files**

- **`composer.json`**: PHP dependencies and autoloading
- **`package.json`**: Node.js dependencies and build scripts
- **`tailwind.config.js`**: TailwindCSS configuration
- **`vite.config.js`**: Vite build configuration
- **`vercel.json`**: Vercel deployment configuration
- **`.env`**: Environment variables

---

## 🔄 **Development Workflow**

### **🛠️ Development Commands**

#### **Asset Building**
```bash
# Development build with hot reload
npm run dev

# Production build
npm run build

# Watch for changes
npm run watch
```

#### **Laravel Commands**
```bash
# Clear all caches
php artisan optimize:clear

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Start development server
php artisan serve
```

#### **Code Quality**
```bash
# Format code (if configured)
composer format

# Run tests (if configured)
php artisan test

# Check for security vulnerabilities
composer audit
```

### **🔄 Git Workflow**

```bash
# Feature development
git checkout -b feature/new-feature
git add .
git commit -m "feat: add new feature"
git push origin feature/new-feature

# Create pull request on GitHub
# After review, merge to main

# Deploy to production
git checkout main
git pull origin main
# Railway automatically deploys on push to main
```

### **📦 Deployment Workflow**

1. **Development**
   - Make changes locally
   - Test with `php artisan serve`
   - Commit and push to feature branch

2. **Testing**
   - Create pull request
   - Review code changes
   - Test in staging environment

3. **Production**
   - Merge to main branch
   - Railway automatically deploys
   - Monitor deployment logs
   - Test production website

---

## 🐛 **Troubleshooting**

### **🔧 Common Issues**

#### **SSL/HTTPS Issues**
```bash
# Check SSL certificate
openssl s_client -connect mbc-web-andrarieza.up.railway.app:443

# Force HTTPS in production
# Add to .env: FORCE_HTTPS=true
```

#### **Asset Loading Issues**
```bash
# Clear and rebuild assets
npm run build
php artisan config:cache
```

#### **Email Not Sending**
```bash
# Check mail configuration
php artisan config:cache

# Test mail configuration
php artisan tinker
Mail::raw('Test email', function($msg) {
    $msg->to('test@example.com')->subject('Test');
});
```

#### **Database Issues**
```bash
# Reset database
php artisan migrate:fresh

# Check database connection
php artisan tinker
DB::connection()->getPdo();
```

#### **Permission Issues**
```bash
# Fix storage permissions
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

### **📊 Performance Issues**

#### **Slow Loading**
```bash
# Enable caching
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader
```

#### **Memory Issues**
```bash
# Increase memory limit in .env
MEMORY_LIMIT=512M

# Or in php.ini
memory_limit = 512M
```

### **🔍 Debugging**

#### **Enable Debug Mode**
```env
APP_DEBUG=true
APP_LOG_LEVEL=debug
```

#### **Check Logs**
```bash
# Laravel logs
tail -f storage/logs/laravel.log

# Railway logs
railway logs
```
---


## 📞 **Support & Contact**

### **🆘 Need Help?**

- **🐛 Bug Reports**: Create an issue on GitHub
- **💡 Feature Requests**: Open a discussion on GitHub
- **📧 Email**: andrariezarizqip@gmail.com
- **🌐 Website**: [https://mbc-web-andrarieza.up.railway.app](https://mbc-web-andrarieza.up.railway.app)

### **📚 Documentation**

- **Laravel Docs**: [https://laravel.com/docs](https://laravel.com/docs)
- **TailwindCSS Docs**: [https://tailwindcss.com/docs](https://tailwindcss.com/docs)
- **Railway Docs**: [https://docs.railway.app](https://docs.railway.app)

---

## 📄 **License**

This project is licensed under the **MIT License** - see the [LICENSE](LICENSE) file for details.

---

## 🎉 **Acknowledgments**

- **Laravel Team**: For the amazing PHP framework
- **TailwindCSS Team**: For the utility-first CSS framework
- **Railway**: For the excellent hosting platform
- **MBC Laboratory Team**: For the opportunity to build this project

---

---