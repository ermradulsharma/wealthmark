# wealthMark

![Laravel](https://img.shields.io/badge/Laravel-10-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1-777BB4?style=for-the-badge&logo=php&logoColor=white)

**wealthMark** is a comprehensive, Laravel-based wealth management platform designed to handle complex financial operations including user management, transactions, escrow services, and reporting. It is built with scalability and security in mind, utilizing industry-standard packages and best practices.

## 🚀 Key Features

-   **Robust Authentication**:
    -   API authentication via **Laravel Passport** and **Laravel Sanctum**.
    -   **Social Login** integration (Google, Facebook, etc.) using Laravel Socialite.
    -   **Two-Factor Authentication (2FA)** support via Google Authenticator.
-   **Role-Based Access Control (RBAC)**:
    -   Granular permission management using `spatie/laravel-permission`.
-   **Financial Operations**:
    -   Secure **Transaction Management**.
    -   **Escrow Services** for safe peer-to-peer transactions.
    -   **Crypto Capabilities** (via `wisdom-diala/cryptocap-pkg`).
-   **Security & Compliance**:
    -   **Activity Logging** to track user actions (`spatie/laravel-activitylog` & `yungts97/laravel-user-activity-log`).
    -   **Location Detection** for security auditing (`stevebauman/location`).
    -   **Cookie Consent** management (`spatie/laravel-cookie-consent`).
-   **Utilities**:
    -   **QR Code Generation** (`bacon/bacon-qr-code`, `simplesoftwareio/simple-qrcode`).
    -   **CSV Import/Export** (`maatwebsite/excel`).
    -   Interactive Real-time features with **Websockets** (`cboden/ratchet`).

## 🛠 Technology Stack

-   **Backend Framework**: Laravel 10.x
-   **Language**: PHP 8.1+
-   **Frontend**: Blade Templates, Bootstrap 5, Vite (Build Tool)
-   **Database**: MySQL / PostgreSQL
-   **HTTP Client**: Guzzle

## ⚙️ Installation

Follow these steps to set up the project locally:

### Prerequisites

-   PHP >= 8.1
-   Composer
-   Node.js & NPM

### Setup

1.  **Clone the Repository**

    ```bash
    git clone https://github.com/mradulsharma/wealthmark.git
    cd wealthMark
    ```

2.  **Install PHP Dependencies**

    ```bash
    composer install
    ```

3.  **Install Frontend Dependencies**

    ```bash
    npm install
    ```

4.  **Environment Configuration**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

    _Configure your database credentials in the `.env` file._

5.  **Database Migration & Seeding**

    ```bash
    php artisan migrate --seed
    ```

6.  **Build Assets**
    ```bash
    npm run build
    ```

## 🏃‍♂️ Usage

**Development Server:**

```bash
php artisan serve
```

Access the application at `http://localhost:8000`.

**Frontend Watch Mode (if needed):**

```bash
npm run dev
```

## 📂 Project Structure

-   `app/Models`: Eloquent models for database interaction.
-   `app/Http/Controllers`: Handles request logic.
-   `routes/api.php`: API endpoints documentation.
-   `routes/web.php`: Web application routes.
-   `database/migrations`: Database schema definitions.

## 🤝 Contributing

We welcome contributions! Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct and the process for submitting pull requests.

## 📄 License

This project is open-sourced software licensed under the [MIT license](LICENSE).
