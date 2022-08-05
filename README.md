## Local deploy

1) Install all dependencies:

```composer install```

2) Copy .env.example to .env

```cp .env.example .env```

3) Start all Docker containers defined in docker-compose.yml:

```./vendor/bin/sail up -d```

4) Generate app key:

```./vendor/bin/sail artisan key:generate```

5) Run migrations:

```./vendor/bin/sail artisan migrate```

## Useful commands

1) Code fix:

``` ./vendor/bin/sail pint ```

2) Generate PhpDoc for models

```./vendor/bin/sail artisan ide-helper:models```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
