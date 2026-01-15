# Contributing to wealthMark

We welcome contributions! Please follow these steps to get started:

1. **Fork the repository** and clone your fork locally.
2. **Create a new branch** for your feature or bug fix:

    ```bash
    git checkout -b my-feature
    ```

3. **Set up the development environment**:

    - Install PHP dependencies: `composer install`
    - Install Node dependencies (if applicable): `npm install`
    - Copy the example environment file and generate an app key:

        ```bash
        cp .env.example .env
        php artisan key:generate
        ```

    - Run migrations and seed the database: `php artisan migrate --seed`

4. **Make your changes** and ensure the code follows the existing coding style.
5. **Run the test suite** (if tests are present): `php artisan test`
6. **Commit your changes** with a clear commit message.
7. **Push to your fork** and open a Pull Request against the `main` branch.

## Pull Request Checklist

-   [ ] Code follows the project's coding standards.
-   [ ] New/updated functionality is covered by tests.
-   [ ] Documentation (README, comments) is updated as needed.
-   [ ] No sensitive information or credentials are included.

Thank you for helping improve wealthMark! 🎉
