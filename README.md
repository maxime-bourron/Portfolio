# Portfolio - Maxime Bourron

Portfolio personnel réalisé dans le cadre du BTS SIO option SLAM. Il présente mon parcours (formations, expériences, projets) et ma veille technologique, et sert de support à l'épreuve E6.

## Technologies

- PHP 8.2+ et Symfony 7.4
- Doctrine ORM et MySQL 8.4
- Twig, AssetMapper et Stimulus
- HTML et CSS sans framework, responsive

## Pages

- **Accueil** : présentation, informations et aperçu des projets
- **Formations** : frise chronologique et page de détail avec le tableau des compétences du BTS SIO
- **Expériences** : stages BTS SIO et autres expériences, avec une page de détail
- **Projets** : projet mis en avant, grille des projets et page de détail
- **Veilles** : thème de veille et articles mensuels
- **Mentions légales et confidentialité**

Le site intègre aussi l'accessibilité (navigation au clavier, attributs ARIA), le référencement (meta description, canonical, sitemap, robots.txt) et le RGPD (aucun cookie, police hébergée sur le site).

## Installation en local

```bash
git clone https://github.com/maxime-bourron/Portfolio.git
cd Portfolio
composer install
```

Créer un fichier `.env.local` avec l'accès à la base de données :

```
DATABASE_URL="mysql://utilisateur:motdepasse@127.0.0.1:3306/portfolio?serverVersion=8.4.7&charset=utf8mb4"
```

Puis :

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console importmap:install
symfony serve
```

Le CV se place dans `public/documents/`, qui n'est pas versionné.

## Versions

Chaque commit suit le format `type: description` et reçoit un tag et une release.
