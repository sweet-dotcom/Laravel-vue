# Add PHP to PATH for this session
$env:Path = "C:\xampp\php;" + $env:Path

Write-Host "✅ PHP added to PATH for this session" -ForegroundColor Green
Write-Host ""

# Test PHP
Write-Host "Testing PHP..." -ForegroundColor Yellow
php -v
Write-Host ""

Write-Host "📋 Next Steps:" -ForegroundColor Cyan
Write-Host "1. Download Composer: https://getcomposer.org/Composer-Setup.exe" -ForegroundColor White
Write-Host "2. Install it (will automatically detect your PHP)" -ForegroundColor White
Write-Host "3. Restart PowerShell" -ForegroundColor White
Write-Host "4. Run: composer install" -ForegroundColor White
Write-Host ""
Write-Host "OR run this command to install Composer now:" -ForegroundColor Yellow
Write-Host 'Invoke-WebRequest -Uri "https://getcomposer.org/installer" -OutFile "composer-setup.php"; php composer-setup.php --install-dir=C:\xampp\php --filename=composer; Remove-Item composer-setup.php' -ForegroundColor Green
