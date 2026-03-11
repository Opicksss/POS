#!/bin/bash
set -e

cd /var/www/html

echo "=== Memulai inisialisasi Laravel ==="

# Jika Laravel belum ada maka install
if [ ! -f composer.json ]; then
  echo "Laravel belum ada, instalasi dimulai..."
  composer create-project laravel/laravel="12.*" .
else
  echo "Laravel sudah terpasang, skip instalasi."
fi

# Pastikan file .env ada
if [ ! -f .env ]; then
  echo ".env belum ada, membuat dari .env.example..."
  cp .env.example .env
fi

echo "Menyesuaikan konfigurasi database di .env..."

sed -i "s/^DB_CONNECTION=.*/DB_CONNECTION=${DB_CONNECTION}/" .env
sed -i "s/^#* *DB_HOST=.*/DB_HOST=${DB_HOST}/" .env
sed -i "s/^#* *DB_PORT=.*/DB_PORT=3306/" .env
sed -i "s/^#* *DB_DATABASE=.*/DB_DATABASE=${DB_DATABASE}/" .env
sed -i "s/^#* *DB_USERNAME=.*/DB_USERNAME=${DB_USERNAME}/" .env
sed -i "s/^#* *DB_PASSWORD=.*/DB_PASSWORD=${DB_PASSWORD}/" .env

echo "Konfigurasi database:"
grep DB_ .env

echo "Mengatur permission direktori Laravel..."

mkdir -p storage/logs
touch storage/logs/laravel.log

chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

echo "Menginstall dependency Laravel..."

composer validate --no-check-publish
composer install --optimize-autoloader --no-dev

echo "Memeriksa APP_KEY..."

if ! grep -q "^APP_KEY=base64:" .env; then
  echo "APP_KEY belum ada, generate key..."
  php artisan key:generate
else
  echo "APP_KEY sudah ada."
fi

echo "Menunggu database siap..."
sleep 10

echo "Menjalankan migration..."
php artisan migrate --force || true

echo "Membersihkan cache Laravel..."

php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

echo "=== Laravel siap dijalankan ==="

exec apache2-foreground
