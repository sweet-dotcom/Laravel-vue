# How to Submit Assignment to GitHub

This guide will walk you through submitting your Laravel + Vue website to GitHub.

## Prerequisites

1. **Git Installed**: Download from https://git-scm.com/downloads
2. **GitHub Account**: Create one at https://github.com if you don't have one
3. **Project Ready**: Ensure your Laravel + Vue project is complete

## Step-by-Step GitHub Submission

### Step 1: Install Git (if not installed)

**Windows:**
```powershell
# Download and run installer from https://git-scm.com/downloads
# Or use winget:
winget install Git.Git
```

After installation, verify:
```powershell
git --version
```

### Step 2: Configure Git

```powershell
# Set your name and email
git config --global user.name "Your Name"
git config --global user.email "your.email@example.com"
```

### Step 3: Initialize Git Repository

```powershell
# Navigate to your project directory
cd c:\Users\CLienT\Desktop\Assignment

# Initialize Git
git init

# Add all files to staging
git add .

# Create initial commit
git commit -m "Initial commit: Laravel + Vue website with Home, Products, About, and Contact pages"
```

### Step 4: Create GitHub Repository

1. Go to https://github.com
2. Click the **"+"** icon in the top-right corner
3. Select **"New repository"**
4. Fill in repository details:
   - **Repository name**: `laravel-vue-website` (or your preferred name)
   - **Description**: "A modern website built with Laravel 12 and Vue 3"
   - **Visibility**: Choose Public or Private
   - **DO NOT** check "Initialize with README" (we already have one)
5. Click **"Create repository"**

### Step 5: Link Local Repository to GitHub

After creating the repository, GitHub will show you commands. Use these:

```powershell
# Add GitHub as remote origin (replace with YOUR repository URL)
git remote add origin https://github.com/YOUR-USERNAME/laravel-vue-website.git

# Rename branch to main (if needed)
git branch -M main

# Push to GitHub
git push -u origin main
```

**Example:**
```powershell
git remote add origin https://github.com/johndoe/laravel-vue-website.git
git branch -M main
git push -u origin main
```

### Step 6: Verify Upload

1. Refresh your GitHub repository page
2. You should see all your files uploaded
3. The README.md will be displayed on the main page

## Alternative: Using GitHub Desktop

### 1. Install GitHub Desktop
Download from: https://desktop.github.com/

### 2. Add Repository
1. Open GitHub Desktop
2. Click **"File"** → **"Add local repository"**
3. Browse to `c:\Users\CLienT\Desktop\Assignment`
4. Click **"Add repository"**

### 3. Publish to GitHub
1. Click **"Publish repository"** button
2. Enter repository name and description
3. Choose public or private
4. Click **"Publish Repository"**

## Important: What NOT to Commit

The `.gitignore` file already excludes:
- `/vendor/` - PHP dependencies (installed via composer)
- `/node_modules/` - JavaScript dependencies (installed via npm)
- `.env` - Environment variables (contains sensitive data)
- `/storage/*.key` - Application keys
- IDE configuration files

**Never commit:**
- API keys
- Database passwords
- Personal information
- Large binary files

## Making Changes After Initial Commit

```powershell
# 1. Make your changes to the code

# 2. Check what changed
git status

# 3. Add changes
git add .

# 4. Commit with a descriptive message
git commit -m "Add feature: improved contact form validation"

# 5. Push to GitHub
git push
```

## Common Git Commands

```powershell
# View commit history
git log

# View current status
git status

# View differences
git diff

# Create new branch
git checkout -b feature-name

# Switch branches
git checkout main

# Pull latest changes
git pull

# View remotes
git remote -v
```

## Submission Checklist

Before submitting, ensure:

- [ ] All code is committed
- [ ] README.md is complete and informative
- [ ] .gitignore is properly configured
- [ ] No sensitive data (API keys, passwords) in repository
- [ ] Repository is public (if required by assignment)
- [ ] Repository URL is shared with instructor

## Sharing Your Repository

### Get Repository URL

Your repository URL will be:
```
https://github.com/YOUR-USERNAME/REPOSITORY-NAME
```

Example:
```
https://github.com/johndoe/laravel-vue-website
```

### Submit to Instructor

Send the repository URL via:
- Email
- Learning management system
- Assignment submission form

## Making Repository Stand Out

### 1. Add a Good README
✅ Already included! Your README.md has:
- Project description
- Features list
- Installation instructions
- Tech stack
- Screenshots section

### 2. Add Topics/Tags
On GitHub repository page:
1. Click the ⚙️ gear icon next to "About"
2. Add topics: `laravel`, `vue`, `inertia`, `tailwindcss`, `php`, `javascript`

### 3. Add Repository Description
On GitHub repository page:
1. Click the ⚙️ gear icon next to "About"
2. Add description: "A modern website built with Laravel 12 and Vue 3"
3. Add website URL (if deployed)

### 4. Enable GitHub Pages (Optional)
If you want to host the README as a website:
1. Go to repository Settings
2. Scroll to "GitHub Pages"
3. Select source branch
4. Your README will be available at: `https://YOUR-USERNAME.github.io/REPOSITORY-NAME`

## Troubleshooting

### Error: "remote origin already exists"
```powershell
# Remove existing remote
git remote remove origin

# Add new remote
git remote add origin https://github.com/YOUR-USERNAME/REPOSITORY-NAME.git
```

### Error: "rejected - non-fast-forward"
```powershell
# Pull changes first
git pull origin main

# Then push
git push origin main
```

### Error: "Permission denied (publickey)"
Use HTTPS URL instead of SSH:
```powershell
git remote set-url origin https://github.com/YOUR-USERNAME/REPOSITORY-NAME.git
```

Or set up SSH keys: https://docs.github.com/en/authentication/connecting-to-github-with-ssh

## Additional Resources

- **Git Documentation**: https://git-scm.com/doc
- **GitHub Guides**: https://guides.github.com/
- **GitHub Desktop**: https://desktop.github.com/
- **Git Cheat Sheet**: https://education.github.com/git-cheat-sheet-education.pdf

---

## Quick Reference

**Initial Setup:**
```powershell
git init
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/USERNAME/REPO.git
git push -u origin main
```

**Daily Workflow:**
```powershell
git add .
git commit -m "Description of changes"
git push
```

Good luck with your submission! 🚀
