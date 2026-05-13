#!/usr/bin/env bash
# exit on error
set -o errexit

composer install --no-dev --optimize-autoloader

# Optimasi Laravel
php artisan optimize
php artisan view:cache
php artisan config:cache