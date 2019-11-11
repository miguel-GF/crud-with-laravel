# CRUD-with-Laravel

## Project setup
```
laravel new name-proyect
```

## Start Server
```
php artisan serve
```

## DATABASE
First create your database and then configure your file .env 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=user_name
DB_PASSWORD=pass
```

## Create Migration Table
```
php artisan make:migration create_name_table
```
For this purpose we will work with a table Items wich has the follow fields:
```
-Name
-Description
-Amouny
```

## Do Migration
```
php artisan migrate
```


## Create Model
```
php artisan make:model name_model
```
Name model its the same like name_table


## Create Controller
```
php artisan make:controller name_controller
```
Name model its the same like name_table example: ItemController

