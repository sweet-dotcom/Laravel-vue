# Laravel + Vue Website

A modern, full-stack web application built with Laravel 12 and Vue 3 using Inertia.js. This project demonstrates the power of combining Laravel's robust backend with Vue's reactive frontend.

## 🚀 Features

- **Landing Page / Homepage** - Beautiful hero section with features and statistics
- **Products & Services** - Showcase of offerings with detailed descriptions
- **About Us** - Company information, mission, vision, and team
- **Contact Us** - Functional contact form with validation

## 🛠️ Tech Stack

### Backend
- **Laravel 12** - PHP framework for web artisans
- **Inertia.js** - Modern monolith approach to building SPAs
- **SQLite** - Lightweight database (can be easily switched to MySQL/PostgreSQL)

### Frontend
- **Vue 3** - Progressive JavaScript framework
- **Tailwind CSS** - Utility-first CSS framework
- **Vite** - Next generation frontend tooling

## 📋 Prerequisites

Before you begin, ensure you have the following installed:
- PHP >= 8.2
- Composer
- Node.js >= 18.x
- NPM or Yarn

## 🔧 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/laravel-vue-website.git
cd laravel-vue-website
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install JavaScript Dependencies

```bash
npm install
```

### 4. Environment Setup

Copy the example environment file and generate application key:

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Database Setup

Create the SQLite database file:

```bash
# On Windows (PowerShell)
New-Item -Path database -Name database.sqlite -ItemType File

# On Linux/Mac
touch database/database.sqlite
```

Run migrations:

```bash
php artisan migrate
```

### 6. Build Assets

For development:
```bash
npm run dev
```

For production:
```bash
npm run build
```

## 🚦 Running the Application

### Development Server

Start the Laravel development server:

```bash
php artisan serve
```

In a separate terminal, start Vite development server:

```bash
npm run dev
```

Visit `http://localhost:8000` in your browser.

## 📁 Project Structure

```
laravel-vue-website/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── PageController.php      # Main page routes
│   │   │   └── ContactController.php   # Contact form handler
│   │   └── Middleware/
│   │       └── HandleInertiaRequests.php
├── resources/
│   ├── js/
│   │   ├── layouts/
│   │   │   └── MainLayout.vue          # Main application layout
│   │   ├── pages/
│   │   │   ├── Home.vue               # Landing page
│   │   │   ├── Products.vue           # Products & Services
│   │   │   ├── About.vue              # About Us
│   │   │   └── Contact.vue            # Contact page
│   │   ├── app.js                     # Vue app initialization
│   │   └── bootstrap.js
│   ├── css/
│   │   └── app.css                    # Tailwind CSS
│   └── views/
│       └── app.blade.php              # Root template
├── routes/
│   └── web.php                        # Application routes
├── .env.example
├── composer.json
├── package.json
├── tailwind.config.js
├── vite.config.js
└── README.md
```

## 🎨 Pages Overview

### Home Page (/)
- Hero section with call-to-action buttons
- Features section highlighting key benefits
- Statistics showcase
- Call-to-action section

### Products & Services (/products)
- Product grid with 6 sample products
- Service listings with detailed features
- Custom solution call-to-action

### About Us (/about)
- Company story and history
- Mission and vision statements
- Team member profiles
- Core values section

### Contact Us (/contact)
- Contact information display
- Contact form with validation
- Social media links
- Business hours

## 🎯 Key Features

### Inertia.js Integration
- Single-page application experience
- No API needed - uses classic server-side routing
- Shared data between requests
- Form helper for easy form handling

### Responsive Design
- Mobile-first approach
- Responsive navigation with hamburger menu
- Grid layouts that adapt to screen size
- Touch-friendly interface

### Form Validation
- Client-side validation with Vue
- Server-side validation with Laravel
- Error message display
- Success notifications

## 🔐 Security Features

- CSRF protection on all forms
- Input validation and sanitization
- SQL injection protection via Eloquent ORM
- XSS protection

## 🚀 Deployment

### Build for Production

```bash
npm run build
composer install --optimize-autoloader --no-dev
```

### Environment Configuration

Update your `.env` file for production:
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
```

### Optimization

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is open-sourced under the MIT License.

## 👨‍💻 Author

Your Name - [@yourhandle](https://twitter.com/yourhandle)

Project Link: [https://github.com/yourusername/laravel-vue-website](https://github.com/yourusername/laravel-vue-website)

## 🙏 Acknowledgments

- [Laravel Documentation](https://laravel.com/docs)
- [Vue.js Documentation](https://vuejs.org/)
- [Inertia.js Documentation](https://inertiajs.com/)
- [Tailwind CSS](https://tailwindcss.com/)

## 📞 Support

If you have any questions or need help, please open an issue in the GitHub repository.

---

Built with ❤️ using Laravel and Vue.js
