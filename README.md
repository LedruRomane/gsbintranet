## Requirement 

PHP >= 7.3

MYSQL >= 5.7

NODE/NPM

## Installation

```
cp .env.example .env
composer i
php artisan key:generate
npm i
npm run dev
```

Update .env file to match with you're database configuration
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gsbintranet
DB_USERNAME=root
DB_PASSWORD=
```

## Seeder

To populate the database, you should run :
```
php artisan migrate:fresh --seed
```
