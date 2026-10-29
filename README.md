# IT0049 TFA6 — From Arrays to Eloquent (Laravel POS)

This project extends the TFA5 four-page Laravel POS foundation. The Home and About pages remain, while Customer Accounts and User Accounts now retrieve records from MySQL through Eloquent models rather than static arrays.

## TFA6 requirements covered

- Migration for `customers` with `full_name`, `email`, and `phone`.
- Migration for `users` with unique `username` and `full_name`.
- Seeder creates at least five customers and five users.
- `Customer` and `User` Eloquent models.
- `CustomerController` and `UserController` retrieve records through Eloquent.
- Blade views loop through database records with `@forelse` (the same loop-based rendering approach as `@foreach`, with an empty-state fallback).
- Navigation across `/`, `/about`, `/customers`, and `/users`.

## Install into your TFA5 Laravel project

1. Back up your current TFA5 project or commit it before copying these files.
2. Extract this ZIP and merge its contents into the root of your Laravel project. It is an overlay pack, not a complete Laravel framework.
3. Update `.env` to use a development database you can reset. Example MySQL settings:

   ```dotenv
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tfa6_laravel_pos
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. Create the empty `tfa6_laravel_pos` database in phpMyAdmin.
5. The package replaces the existing default `database/migrations/0001_01_01_000000_create_users_table.php` and the TFA5 customer migration. Ensure you have only one migration that creates each of those tables.
6. In the project terminal, run:

   ```bash
   php artisan optimize:clear
   php artisan migrate:fresh --seed
   php artisan route:list
   php artisan serve
   ```

   **Warning:** `migrate:fresh` drops every table in the configured database before recreating it. Use a new TFA6 database or back up data first. Do not point this command at any database with data you need to keep.

6. Browse to `http://127.0.0.1:8000/`, `/about`, `/customers`, and `/users`.

## Database schema

- `customers`: `id`, `full_name`, `email`, nullable `phone`, timestamps.
- `users`: `id`, unique `username`, `full_name`, timestamps.

The default Laravel user migration is intentionally replaced for this assessment. No login functionality is required by TFA6.

## Seed data

`database/seeders/TFA6Seeder.php` creates five customers and five users. It uses `updateOrCreate`, so rerunning the seeder will not duplicate the sample records. `DatabaseSeeder.php` calls `TFA6Seeder`.

## GitHub safety

Commit the Laravel source files, routes, migrations, seeder, and README. Never commit `.env`, production credentials, or generated dependency folders such as `vendor/` or `node_modules/`. Keep `composer.json` and `composer.lock`.
