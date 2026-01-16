# Contributing to wealthMark

First off, thank you for considering contributing to wealthMark! It's people like you that make wealthMark such a great tool.

## 🤝 Getting Started

1.  **Fork the repository** on GitHub.
2.  **Clone your fork** locally:
    ```bash
    git clone https://github.com/your-username/wealthmark.git
    ```
3.  **Create a branch** for your new feature or bug fix:

    ```bash
    git checkout -b feature/amazing-feature
    ```

    _Prefixes like `feature/`, `fix/`, `docs/` help organize branches._

4.  **Set up the environment**:
    -   `composer install`
    -   `npm install`
    -   `cp .env.example .env`
    -   `php artisan key:generate`
    -   `php artisan migrate --seed`

## 🛠 Development Workflow

-   **Code Style**: We follow the standard [Laravel coding style](https://laravel.com/docs/contributions#coding-style) (PSR-12).
-   **Testing**: Please ensure all new code is tested. Run tests before submitting:
    ```bash
    php artisan test
    ```
-   **Commits**: Write clear, descriptive commit messages.

## 📝 Pull Request Process

1.  Push your changes to your fork.
2.  Submit a **Pull Request (PR)** to the `main` branch of the `mradulsharma/wealthmark` repository.
3.  Provide a clear description of changes and link to any relevant issues.
4.  Wait for a review! We'll do our best to review PRs quickly.

## 🐛 Reporting Bugs

If you find a bug, please open an issue on GitHub with:

-   A description of the bug.
-   Steps to reproduce.
-   Expected vs. actual behavior.
-   Your environment details (OS, PHP version, etc.).

Thank you for helping make wealthMark better! 🚀
