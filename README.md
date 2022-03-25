<h1 align="center">
  Simulator for UEFA Champions League Group Stage
</h1>

<p align="center">The laravel application for ucl-simulator.</p>

<p align="center"><img src="https://img.shields.io/badge/version-v1.0.0-blue?style=for-the-badge&logo=none" alt="cli version" /></a>&nbsp;<img src="https://img.shields.io/badge/license-apache_2.0-red?style=for-the-badge&logo=none" alt="license" /></p>

## Installation

Then, download the GitHub repo:

```bash
git clone https://github.com/agayretli/ucl-simulator.git

cd ucl-simulator
cp .env.example .env
composer install
php artisan db:create
php artisan migrate --seed
```