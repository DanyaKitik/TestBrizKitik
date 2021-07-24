# Laravel Ajax CRUD



# Installation
1. Clone the repository:
```
git clone https://github.com/mcnika/test_briz.git
```

2. Move to the newly created folder:
```
cd test_briz
```

3. Install all the dependencies:
```
composer install
```

4. Create a new database. Then rename .env.example to .env and provide your database credentials:
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=phone_book
DB_USERNAME=root
DB_PASSWORD=password
```

5. Migrate the database:
```
php artisan migrate --seed
```

6. Generate the application key:
```
php artisan key:generate
``` 
