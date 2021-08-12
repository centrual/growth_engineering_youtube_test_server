# Growth Engineering Youtube Test - Backend

Hello Growth Engineering 🖐

This project demonstrates the back end of the youtube test.

---

## Getting Started

This project needs [PHP](https://www.php.net/manual/en/install.php) version 8.0.

### Composer

Using `composer install` to install the framework and dependencies via [Composer](http://getcomposer.org/).

### post installation steps

Change into application folder and execute following commands to get started:

```sh
cp .env.example .env
php artisan key:generate
```

Then please put your Youtube API key you generated from [Google Developers Console](https://developers.google.com/youtube/v3/getting-started) to end of the `.env` file like:

```
...

YOUTUBE_API_KEY=qwertyuopasdfghjklizxcvbnnmQW1234567890
```

after that the configurations are complete!

Let we start the server:

```
php artisan serve
```

The server is running. You can reach the server from [https://localhost:8000](https://localhost:8000).

Good job! ✌

---

## Deployment instructions

Just push your changes to `staging` branch when you want to update `api.geyt.ml`. [Heroku](https://heroku.com) will build and publish automatically.

---

## Project Structure

Because the API key sharing is insecure I split the project into 3 parts. This parts are:

1. [Frontend](https://github.com/centrual/growth_engineering_youtube_test_frontend)
2. [OpenAPI Declarations](https://github.com/centrual/growth_engineering_youtube_test_openapi)
3. Backend *

---

## Used Technologies

* This project was bootstrapped with [OpenAPI Generator - PHP-Laravel Generator](https://openapi-generator.tech/docs/generators/php-laravel).

