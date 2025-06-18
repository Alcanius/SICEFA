# Laravel CRUD Example

This example contains minimal code for a basic CRUD application built with Laravel 8. Vendor dependencies are not included. Install them with Composer.

## Setup

1. Install PHP 7.3 or higher and Composer.
2. Run `composer install` inside the `crudapp` directory to install Laravel.
3. Copy `.env.example` to `.env` and configure your database settings.
4. Run `php artisan migrate` to create the database table.
5. Start the development server using `php artisan serve`.
6. Visit `http://localhost:8000` to see the CRUD interface for products.

## Generated Files

- `routes/web.php` contains the product resource route.
- `app/Models/Product.php` is the model.
- `app/Http/Controllers/ProductController.php` is the controller implementing CRUD operations.
- Blade templates are under `resources/views/products`.
- Migration file creates the `products` table.

This repository only includes the core source files. You must run Composer to download Laravel and its dependencies before using the project.
