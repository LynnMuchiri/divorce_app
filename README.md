## About project

The Separation Framework is an extensive platform specifically designed to address the unique challenges faced by individuals and families undergoing separation and family division in Kenya. There is a pressing need for a user-friendly system that can navigate the complexities of divorce proceedings in Kenya, especially considering the increasing divorce rate and a significant number of individuals without legal representation. This online application serves the legal requirements of Kenya by facilitating the organization and secure storage of essential documents, connecting users with local divorce professionals, and offering educational resources on the country's legal system. By simplifying processes, minimizing errors, and providing timely reminders, the system assists individuals in meeting deadlines and staying on track within the legal system.
## Installation Guides
1. Clone repo through the github desktop
2. Open the project from where you cloned it
3. Once within the root structure within your terminal, run the following commands
    ```shell
            composer install
    ```
   ```shell
        composer update
   ```
   ```shell
        composer require laravel/socialite
   ```
   ```shell
        copy .env.example .env
   ```
   ```shell
        php artisan key:generate
   ```
   ```shell
        php artisan migrate --seed
   ```
   ```shell
        php artisan serve
   ```

### Dependencies

The following open-source libraries and resources were instrumental in the development of this project:

- [Composer](https://getcomposer.org/): A tool for dependency management in PHP
- [Laravel](https://laravel.com/): A web application framework with expressive, elegant syntax
- [Laravel Socialite](https://laravel.com/docs/socialite): An official Laravel package which provides a streamlined
  OAuth authentication with various providers, in this case, Google.
- [GitHub Desktop](https://desktop.github.com/): An open-source GitHub app
