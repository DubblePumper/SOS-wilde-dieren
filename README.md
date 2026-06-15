# SOS wilde dieren

Nieuwe Laravel 13 website voor SOS wilde dieren, opvangcentrum voor vogels en wilde dieren in Geraardsbergen.

## Stack

- PHP 8.5.4+
- Laravel 13
- Blade server-rendered pagina's
- Tailwind CSS 4 via Vite
- Laravel Sail voor Docker-gebaseerde ontwikkeling

## Lokale installatie

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
php artisan serve
```

De site is daarna beschikbaar via `http://127.0.0.1:8000`.

## Sail

Sail is geinstalleerd en gebruikt `compose.yaml`.

```bash
./vendor/bin/sail up
./vendor/bin/sail npm install
./vendor/bin/sail npm run build
```

Voor Sail met MySQL zet je in `.env` onder andere:

```dotenv
DB_CONNECTION=mysql
DB_HOST=mysql
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database
```

Run daarna:

```bash
./vendor/bin/sail artisan migrate
```

## Configuratie

Belangrijke waarden staan centraal in `config/sos.php` en kunnen via `.env` worden aangepast:

- `SOS_PHONE`
- `SOS_EMAIL`
- `SOS_ADDRESS`
- `SOS_OPENING_HOURS`
- `SOS_DONATION_URL`
- `SOS_CONTACT_RECIPIENT`

Als `SOS_DONATION_URL` leeg is, linkt de doneerknop naar `/hoe-helpen#gift`.

## Tests en checks

```bash
php artisan test
npm run build
```

De featuretests controleren publieke pagina's, oude redirects, contactvalidatie, mailverzending, honeypot, sitemap en robots.
