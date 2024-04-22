setup and run
git clone git@github.com:DoanKhiem/web_manager_homestay.git
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
Extract file public/assets, public/dist
php artisan serve