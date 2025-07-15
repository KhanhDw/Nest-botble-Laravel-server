# to run project 
```bash
open XAMPP with port 3310

npm install
composer install

create file .env and get content of env by access URL: https://drive.google.com/drive/folders/1Too_62StmhDjy9T9a07RLOFkcKeEPlHR?usp=sharing

php artisan migrate:fresh

php artisan serve
npm run dev (Font-end with laravel-blade)
npm run scssw (if you want to write scss to show data by view on blade file ( Font-end with laravel-blade ))
```
(if showing error then installing `npm i sass` )


# Introduce Laravel
Laravel is widely used to develop backend APIs for mobile applications and Single Page Applications (SPAs) like Vue.js and Next.js.

# create project
```bash
composer create-project laravel/laravel <Name Project>
```

# run server - side backend - not use for mixing fontend & backend
```bash
php artisan serve --port=8085
```

# create controller
```bash
php artisan make:controller <Name Controller>
```

# create models
```bash
php artisan make:model <Name Model>
```

# create models with migration table (-m this means that migration table will be created)
```bash
php artisan make:model <Name Model> -m
```

# create migration -> write schema -> run magrate
```bash
php artisan make:migration <Name migration>
```
> If you create more column after creating you need to add this new column into model file of table

# remove migration previously which created
```bash
php artisan migrate:fresh
```

# run migration base on that all file migration that we had done previously
```bash
php artisan migrate
```

# create factory (dữ liệu mẫu)
```bash
php artisan make:factory <Name Factory> --model=<Name Model>
```

# create fake data to using in database
```bash
php artisan tinker
```

# the command using in tinker terminal to create fake
```php
App\Models\<name model (no extention .php)>::factory()->create();

// example: 
App\Models\User::factory()->count(10)->create();
```

# set rule (validate data) using in form and more
```bash
php artisan make:rule <Name Rule>
```

# create separate request, it is used to validate data in controller
```bash
php artisan make:request <Name request>
```

# watch list router by command
```bash
php artisan route:list
```

# use css for index.blade.php in folder views of resourse
+ `npm install`
+ `npm run dev`
+ write this line into header of html file `@vite('resources/css/app.css')` which want to use css

# some command artisan you need to know
```bash
php artisan cache:clear
php artisan optimize
php artisan clear-compiled
php artisan up 
php artisan down
php artisan env
php artisan auth:clear-resets
php artisan key:generate
php artisan session:table
php artisan view:clear
php artisan ... etc
```

# task need to do
+ config and use router API
+ connect with mySQL
+ doing CRUD with API
+ tale user
+ create controller and models
+ remove some folder not use

# what things which I need to learn
+ Introduction to PHP Laravel and MVC Architecture
+ Install XAMPP in Windows 11
+ Download and install Composer
+ Start PHP Laravel project in default port
+ Install some PHP extensions in Visual Studio Code
+ Configure Environment Variables in PHP Laravel
+ Install Laravel dependencies with Composer
+ Define or configure route in PHP Laravel
+ Create controller with php artisan
+ Pass data from Controller to View
+ Nil coalescing or default value in PHP
+ Validate input parameters of a request using Regular Expression
+ Get route's name and navigate within pages
+ Configure Header and Footer of a View using app layout
+ Configure Navigation and nav-item
+ Save images to Storage
+ Some basic commands-syntax in Laravel Blade
+ Add SASS in a Laravel Project
+ Add MySQL Database using XAMPP
+ Database Migration
+ Some SQL commands in Eloquent
+ Insert fake data to MySQL
+ CRUD with Controller and View in Laravel
+ Prevent CSRF attack
+ Add more models and migrate
+ Validate input request
+ Validation by creating a custom Request
+ Upload image to server

# laravel basic to advantage
| Mảng             | Mục tiêu học nâng cao                            |
| ---------------- | ------------------------------------------------ |
| Routing          | Route group, middleware tùy chỉnh                |
| Controller       | Form request validation, dependency injection    |
| Eloquent         | Query optimization, eager/lazy loading           |
| Service Provider | Tự viết service binding, event listener          |
| Middleware       | Global vs route middleware                       |
| Queue            | Background job + retry                           |
| Testing          | Mocking, Laravel Dusk                            |
| Broadcasting     | Event real-time với Pusher/WebSockets            |
| Security         | CSRF, XSS, Auth, Policy, Gate                    |
| Optimization     | Caching, config\:cache, opcache, Horizon (queue) |