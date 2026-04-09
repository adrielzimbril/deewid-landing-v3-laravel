# Contributing

Keep contributions focused on the Laravel application layer of Deewid:

- routing
- Blade views
- blog and content flow
- Livewire usage
- repository documentation

## Setup

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
```

## Validation

- run `php artisan route:list`
- run tests when possible
- run `npm run build` for front-end asset validation
