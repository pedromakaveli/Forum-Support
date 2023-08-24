<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About the project

This is a simple ticket dashboard in Laravel

## How to run the project

### Dependencies

- `php`
- `composer`
- [compatible database](https://laravel.com/docs/10.x/database#introduction)

### 📝 Passo-a-passo:

1. Clone the repository:
    ```bash
    git clone https://github.com/pedromakaveli/support-dashboard-laravel.git
    cd support-dashboard-laravel
    ```
2. Install `composer` dependencies:
    ```bash
    composer install
    ```
3. Generate a new key using Artisan
    ```bash
    php artisan key:generate
    ```
4. Rename the file `.env.example` to `.env` and edit it with your database credentials:
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel # You can change this
    DB_USERNAME=root # Your user
    DB_PASSWORD= # Your password
    ```
5. Turn on the MySQL server (or compatible)
6. Do database [migration](https://laravel.com/docs/10.x/migrations#introduction) **(WARNING: THIS COMMAND WILL DELETE ALL CONTENT OF YOUR DATABASE DEFINED IN `DB_DATABASE`)**
    ```bash
    php artisan migrate:fresh
    ```
7. Start the server using `Artisan`:
    ```bash
    php artisan serve
    ```
    
### 🙏 Thanks

- <img width="80px" valign="middle" src="https://avatars.githubusercontent.com/u/626206?v=4"> [@guihkx](https://github.com/guihkx)
