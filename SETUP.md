# SETUP GUIDE - Laravel + Vue Website

This guide will help you set up the Laravel + Vue website from scratch.

## Prerequisites Installation

### 1. Install PHP (Windows)

Download and install PHP 8.2 or higher:
- Visit: https://windows.php.net/download/
- Download the "Thread Safe" ZIP file for your system
- Extract to `C:\php`
- Add `C:\php` to your system PATH

Verify installation:
```powershell
php --version
```

### 2. Install Composer

Download and install Composer:
- Visit: https://getcomposer.org/download/
- Download and run `Composer-Setup.exe`
- Follow the installation wizard

Verify installation:
```powershell
composer --version
```

### 3. Install Node.js

Download and install Node.js (LTS version):
- Visit: https://nodejs.org/
- Download the Windows Installer (.msi)
- Run the installer and follow the prompts

Verify installation:
```powershell
node --version
npm --version
```

## Project Setup

### Step 1: Install Dependencies

```powershell
# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install
```

### Step 2: Configure Environment

```powershell
# Copy environment file
Copy-Item .env.example .env

# Generate application key
php artisan key:generate
```

### Step 3: Setup Database

```powershell
# Create SQLite database file
New-Item -Path database -Name database.sqlite -ItemType File

# Run migrations
php artisan migrate
```

### Step 4: Build Frontend Assets

```powershell
# For development (with hot reload)
npm run dev

# For production build
npm run build
```

### Step 5: Start Development Server

```powershell
# Start Laravel server
php artisan serve
```

Open your browser and navigate to: `http://localhost:8000`

## Common Issues and Solutions

### Issue: "composer: command not found"
**Solution:** Make sure Composer is installed and added to your PATH. Restart your terminal after installation.

### Issue: "php: command not found"
**Solution:** PHP is not in your system PATH. Add the PHP installation directory to your PATH environment variable.

### Issue: "npm: command not found"
**Solution:** Node.js is not installed correctly. Reinstall Node.js and ensure it's added to PATH.

### Issue: Database connection errors
**Solution:** Ensure the `database/database.sqlite` file exists and has proper permissions.

### Issue: Vite build errors
**Solution:** 
```powershell
# Clear npm cache
npm cache clean --force

# Delete node_modules and reinstall
Remove-Item -Recurse -Force node_modules
npm install
```

## Development Workflow

### Running in Development Mode

1. Terminal 1 - Laravel Server:
```powershell
php artisan serve
```

2. Terminal 2 - Vite Dev Server:
```powershell
npm run dev
```

### Making Changes

- **Backend (Routes/Controllers):** Edit files in `app/Http/Controllers/` or `routes/web.php`
- **Frontend (Vue Components):** Edit files in `resources/js/pages/` or `resources/js/layouts/`
- **Styles:** Edit `resources/css/app.css` or use Tailwind classes directly in Vue components

### Clearing Cache

```powershell
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## Pushing to GitHub

### Step 1: Initialize Git Repository

```powershell
git init
git add .
git commit -m "Initial commit - Laravel Vue website"
```

### Step 2: Create GitHub Repository

1. Go to https://github.com
2. Click "New repository"
3. Name it (e.g., "laravel-vue-website")
4. Don't initialize with README (we already have one)
5. Click "Create repository"

### Step 3: Push to GitHub

```powershell
# Add remote repository (replace with your GitHub URL)
git remote add origin https://github.com/yourusername/laravel-vue-website.git

# Push to GitHub
git branch -M main
git push -u origin main
```

## Environment Variables

Key environment variables in `.env`:

```env
APP_NAME="Laravel Vue Website"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite

VITE_APP_NAME="${APP_NAME}"
```

## Additional Commands

### Create New Controller
```powershell
php artisan make:controller ControllerName
```

### Create New Migration
```powershell
php artisan make:migration create_table_name
```

### Run Tests
```powershell
php artisan test
```

### Check Routes
```powershell
php artisan route:list
```

## Production Deployment

### Build for Production

```powershell
# Build frontend assets
npm run build

# Optimize autoloader
composer install --optimize-autoloader --no-dev

# Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Environment Setup

Update `.env` for production:
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
```

## Support

For issues or questions:
1. Check Laravel documentation: https://laravel.com/docs
2. Check Vue documentation: https://vuejs.org/guide/
3. Check Inertia documentation: https://inertiajs.com/

---

Happy coding! 🚀
