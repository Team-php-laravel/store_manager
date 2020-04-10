## INSTALLATION for PRODUCTION

- Clone project and cd to project directory
- Run `cp .env.example .env`
- Config database connection in file `.env`
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan db:seed`
- Run `php artisan serve`

### Access
Api/Web: localhost:8000  
phpMyAdmin: mysql
EX:
- DB: name `store_manager` / user `root` password `123456`
