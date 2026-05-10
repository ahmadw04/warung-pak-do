#!/usr/bin/env sh
set -e

php artisan migrate:fresh --force
php artisan config:cache
php artisan view:cache
