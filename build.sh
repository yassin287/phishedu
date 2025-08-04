#!/bin/bash

# Vercel Build Script for Laravel
echo "Starting PhishEdu Laravel build process..."

# Install Composer dependencies
composer install --optimize-autoloader --no-dev

# Generate application key if not set
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

# Create SQLite database if it doesn't exist
if [ ! -f "/tmp/database.sqlite" ]; then
    touch /tmp/database.sqlite
fi

# Run database migrations
php artisan migrate --force

# Seed the platforms
php artisan db:seed --class=PlatformSeeder --force

# Clear and cache config for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Build process completed successfully!"
