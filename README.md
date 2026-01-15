# wealthMark

![Laravel](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)

## Project Overview

wealthMark is a **Laravel-based wealth management platform** that provides features such as user management, transaction handling, escrow services, and reporting. It leverages a rich set of Laravel packages (Passport, Sanctum, Socialite, ActivityLog, etc.) to deliver a secure and extensible financial application.

## Features

-   User authentication & API tokens (Laravel Passport & Sanctum)
-   Social login integration (Laravel Socialite)
-   Role-based permissions (spatie/laravel-permission)
-   Activity logging (spatie/laravel-activitylog)
-   Transaction & escrow management
-   CSV import/export utilities (Maatwebsite Excel)
-   Two-factor authentication (pragmarx/google2fa-laravel)
-   Location detection (stevebauman/location)
-   Customizable email notifications

## Installation

```bash
# Clone the repository
git clone <repository-url> wealthMark
cd wealthMark

# Install PHP dependencies
composer install

# Install Node dependencies (if any front-end assets are used)
npm install

# Set up environment file
cp .env.example .env
php artisan key:generate

# Run migrations and seed database
php artisan migrate --seed

# Serve the application
php artisan serve
```

## Usage

-   Access the web interface at `http://127.0.0.1:8000`.
-   API endpoints are documented in the `routes/api.php` file.
-   Use Laravel Telescope or the built-in logs for debugging.

## Contributing

Please see the [CONTRIBUTING.md](CONTRIBUTING.md) for guidelines on how to set up a development environment, run tests, and submit pull requests.

## License

This project is licensed under the MIT License – see the [LICENSE](LICENSE) file for details.

## Contact

For questions or support, open an issue or contact the repository maintainer.
