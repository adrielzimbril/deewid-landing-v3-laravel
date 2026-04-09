# Deewid Landing V3 Laravel

Version Laravel de Deewid. Ce depot prolonge les versions front statiques en une base applicative Laravel 11 avec Livewire.

## Apercu

![Deewid Laravel home](./screenshots/home.png)
![Deewid Laravel pricing](./screenshots/pricing.png)

## Perimetre

- landing Deewid rendue avec Blade
- pages `home`, `pricing`, `company`, `blog`, `store-not-found` et `store-unavailable`
- base Laravel pour faire evoluer le produit
- routes d'application reservees pour `https://deewid-landing-v3.adrielzimbril.com/`

## Stack

- Laravel 11
- PHP 8.2+
- Livewire 3
- Vite
- Tailwind CSS

## Demarrage

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Dans un second terminal:

```bash
npm run dev
```

Pour un build de production:

```bash
npm run build
php artisan test
```

## Notes

- Le sous-domaine app utilise `DEEWID_APP_DOMAIN` dans `.env`.
- L'URL publique actuelle de la V3 est `https://deewid-landing-v3.adrielzimbril.com/`.

## Render

- Le repo inclut un `Dockerfile`, `.dockerignore`, `render-start.sh` et `render.yaml`.
- Le runtime Docker est aligne sur PHP 8.4 pour etre compatible avec les dependances lockees.
- `APP_KEY` et `DATABASE_URL` doivent etre renseignes dans Render.

## Versions Deewid

- `deewid-landing-v1`
  Repo: `https://github.com/adrielzimbril/deewid-landing-v1`
  Preview: `https://adrielzimbril.github.io/deewid-landing-v1/`
- `deewid-landing-v2`
  Repo: `https://github.com/adrielzimbril/deewid-landing-v2`
  Preview: `https://adrielzimbril.github.io/deewid-landing-v2/`
- `deewid-landing-v3-laravel`
  Repo: `https://github.com/adrielzimbril/deewid-landing-v3-laravel`
  Live app: `https://deewid-landing-v3.adrielzimbril.com/`

## Maintenance

Projet maintenu par Oricodes.

- Site: `https://www.oricodes.com/`
- GitHub: `https://github.com/adrielzimbril`

## Licence

MIT. Voir `LICENSE`.


