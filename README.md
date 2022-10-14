# Installation

---

1. Run 

```
composer install
cp env.example .env
```

2. Insert database params to `.env`
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

MONGO_DB_HOST=127.0.0.1
MONGO_DB_PORT=27017
MONGO_DB_DATABASE=laravel
MONGO_DB_USERNAME=root
MONGO_DB_PASSWORD=
```

3. Run `php artisan migrate --seed`
4. Open `http://localhost`
