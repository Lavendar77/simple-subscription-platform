# SIMPLE SUBSCRIPTION PLATFORM
Create a simple subscription platform(only RESTful APIs with MySQL) in which users can subscribe to a website (there can be multiple websites in the system). Whenever a new post is published on a particular website, all it's subscribers shall receive an email with the post title and description in it. (no authentication of any kind is required)

## Installation Setup
1. Clone the repository
2. Run `composer install` to install the dependencies.
3. Run `composer run-script post-root-package-install` to generate your local `.env` file.
4. Run `composer run-script post-create-project-cmd` to generate your application key.
5. Open your `.env` and configure your database credentials.
6. Run `php artisan migrate --seed`
