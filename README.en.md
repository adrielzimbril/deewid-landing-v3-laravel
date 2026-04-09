# Deewid Landing V3 Laravel

Laravel version of Deewid. This repository extends the static front-end versions into a Laravel 11 application base with Livewire, while preserving the existing marketing sections and preparing a future app-ready ecommerce stack.

## Preview

![Deewid Laravel home](./screenshots/home.png)
![Deewid Laravel pricing](./screenshots/pricing.png)

## Scope

- Deewid landing rendered with Blade
- `home`, `pricing`, `company`, `blog`, `store-not-found`, and `store-unavailable` pages
- Laravel application base for future product work
- reserved application routes for `app.deewid.com`
- connected foundation for the previous static versions

## Stack

- Laravel 11
- PHP 8.2+
- Livewire 3
- Vite
- Tailwind CSS

## Development

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan serve
```

In a second terminal:

```bash
npm run dev
```

For a production-ready check:

```bash
npm run build
php artisan test
```

## Notes

- The app subdomain uses `DEEWID_APP_DOMAIN` from `.env`.
- The `app.deewid.com` routes currently redirect to the public home page until the actual application area is implemented.
- The planned application URL is `https://app.deewid.com/`.

## Render

- The repository now includes a root `Dockerfile`, `.dockerignore`, `render-start.sh`, and `render.yaml` for a Render Docker deployment flow.
- The recommended setup uses Render PostgreSQL with `DB_CONNECTION=pgsql` and `DATABASE_URL`.
- `APP_KEY` and `DATABASE_URL` must be configured in Render environment variables.
- If you want automatic migrations on boot, set `RUN_MIGRATIONS=true`.

## Deewid versions

- `deewid-landing-v1`
  Repo: `https://github.com/adrielzimbril/deewid-landing-v1`
  Preview: `https://adrielzimbril.github.io/deewid-landing-v1/`
- `deewid-landing-v2`
  Repo: `https://github.com/adrielzimbril/deewid-landing-v2`
  Preview: `https://adrielzimbril.github.io/deewid-landing-v2/`
- `deewid-landing-v3-laravel`
  Repo: `https://github.com/adrielzimbril/deewid-landing-v3-laravel`
  Preview: not applicable
  Future app URL: `https://app.deewid.com/`

## Maintainer

Maintained by Oricodes.

- Website: `https://www.oricodes.com/`
- GitHub: `https://github.com/adrielzimbril`

## License

MIT. See `LICENSE`.
