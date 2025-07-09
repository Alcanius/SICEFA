# SICEFA Laravel Skeleton

This directory contains the initial source code for the SICEFA project built
with **Laravel 11**. It provides migrations and models for the main catalogues
and request workflow. Vendor dependencies are not included; you must install
them using Composer.

## Setup

1. Install PHP 8.3 and Composer.
2. Run `composer install` inside the `crudapp` directory to download Laravel 11
   and other dependencies.
3. Copy `.env.example` to `.env` and configure your database settings.
4. Run `php artisan migrate` to create the database tables.
5. Start the development server using `php artisan serve`.
6. Visit `http://localhost:8000` to see the basic interface.

## Generated Files

- `routes/web.php` defines resource routes for each catalogue.
- `app/Models/` contains Eloquent models for the domain entities.
- `app/Http/Controllers/` holds simple controllers with CRUD methods.
- Blade templates live under `resources/views`.
- Migration files create the required database tables.

This repository only includes the core source files. You must run Composer to download Laravel and its dependencies before using the project.
