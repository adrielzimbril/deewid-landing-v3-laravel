# Deewid Landing V3 Laravel

Version Laravel de Deewid. Ce depot prolonge les versions front statiques en une base applicative Laravel 11 avec Livewire, en conservant les sections marketing existantes et en preparant une evolution vers une vraie app e-commerce.

## Apercu

![Deewid Laravel home](./screenshots/home.png)
![Deewid Laravel pricing](./screenshots/pricing.png)

## Perimetre

- landing Deewid rendue avec Blade
- pages `home`, `pricing`, `company`, `blog`, `store-not-found` et `store-unavailable`
- base Laravel pour faire evoluer le produit
- routes d'application reservees pour `app.deewid.com`
- socle relie aux versions statiques precedentes

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
- Les routes `app.deewid.com` sont actuellement des redirections placeholder vers la home publique tant que l'espace applicatif n'est pas encore implemente.
- L'URL cible prevue pour l'espace applicatif est `https://app.deewid.com/`.

## Render

- Le repo inclut maintenant un `Dockerfile` racine, un `.dockerignore`, un `render-start.sh` et un `render.yaml` adaptes a un deploiement Render en runtime Docker.
- La configuration recommande Render PostgreSQL avec `DB_CONNECTION=pgsql` et `DATABASE_URL`.
- `APP_KEY` et `DATABASE_URL` doivent etre renseignes dans les variables d'environnement Render.
- Si tu veux appliquer les migrations au boot sur Render, active `RUN_MIGRATIONS=true`.

## Versions Deewid

- `deewid-landing-v1`
  Repo: `https://github.com/adrielzimbril/deewid-landing-v1`
  Preview: `https://adrielzimbril.github.io/deewid-landing-v1/`
- `deewid-landing-v2`
  Repo: `https://github.com/adrielzimbril/deewid-landing-v2`
  Preview: `https://adrielzimbril.github.io/deewid-landing-v2/`
- `deewid-landing-v3-laravel`
  Repo: `https://github.com/adrielzimbril/deewid-landing-v3-laravel`
  Preview: non applicable
  Future app URL: `https://app.deewid.com/`

## Maintenance

Projet maintenu par Oricodes.

- Site: `https://www.oricodes.com/`
- GitHub: `https://github.com/adrielzimbril`

## Licence

MIT. Voir `LICENSE`.
