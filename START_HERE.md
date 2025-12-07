# Quick Start Guide

## Prerequisites

Install these first:
- **PHP 8.2+** - https://windows.php.net/download/
- **Composer** - https://getcomposer.org/Composer-Setup.exe
- **Node.js** - https://nodejs.org/

## Setup (5 minutes)

```powershell
# 1. Install dependencies
composer install
npm install

# 2. Setup environment
Copy-Item .env.example .env
php artisan key:generate

# 3. Create database
New-Item -Path database -Name database.sqlite -ItemType File
php artisan migrate
```

## Run the Project

Open TWO terminals:

**Terminal 1:**
```powershell
php artisan serve
```

**Terminal 2:**
```powershell
npm run dev
```

Open: **http://localhost:8000**

## Submit to GitHub

```powershell
# Create repo on GitHub first, then:
git remote add origin https://github.com/YOUR-USERNAME/REPO-NAME.git
git branch -M main
git push -u origin main
```

That's it! ✅
