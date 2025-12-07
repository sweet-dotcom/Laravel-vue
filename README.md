# Laravel + Vue Website

A modern website built with Laravel 12 and Vue 3 using Inertia.js.

## Pages

- **Home** (`/`) - Landing page with hero section, features, and stats
- **Products & Services** (`/products`) - Product listings and service offerings
- **About Us** (`/about`) - Company information, team, and values
- **Contact** (`/contact`) - Contact form with validation

## Tech Stack

- **Laravel 12** - Backend framework
- **Vue 3** - Frontend framework
- **Inertia.js** - Connects Laravel and Vue
- **Tailwind CSS** - Styling
- **Vite** - Build tool


## Installation

### Prerequisites
- PHP >= 8.2
- Composer
- Node.js >= 18.x

### Setup Steps

1. **Install dependencies**
```bash
composer install
npm install
```

2. **Configure environment**
```bash
cp .env.example .env
php artisan key:generate
```

3. **Setup database**
```bash
# Create SQLite database
New-Item -Path database -Name database.sqlite -ItemType File
php artisan migrate
```

4. **Run the application**
```bash
# Terminal 1
php artisan serve

# Terminal 2
npm run dev
```

Visit `http://localhost:8000`

## GitHub Setup

```bash
# Initialize and commit
git init
git add .
git commit -m "Initial commit"

# Push to GitHub
git remote add origin https://github.com/YOUR-USERNAME/REPO-NAME.git
git branch -M main
git push -u origin main
```

## License

MIT License

