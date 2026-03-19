# Wanderlust Travel

A travel and tourism website built with Laravel, featuring trip information, service listings, and a gallery — designed for travel agencies and tour operators.

## Features

- **Homepage & Slider** — Dynamic landing page with image slider and featured content
- **Service Listings** — Showcase of travel services and tour packages
- **Blog** — Travel blog section for articles and destination guides
- **Gallery** — Photo gallery of destinations and experiences
- **About & Contact** — Company information and contact form
- **User Authentication** — Registration, login, password reset, and email verification (Laravel Breeze)
- **Dashboard** — Authenticated user dashboard

## Tech Stack

- **Framework:** Laravel 8
- **PHP:** 7.3+ / 8.0+
- **Auth Scaffolding:** Laravel Breeze
- **API:** Laravel Sanctum
- **Frontend:** Blade templates with responsive layout
- **Database:** MySQL

## Getting Started

```bash
# Clone the repository
git clone https://github.com/mhmalvi/wanderlust-travel.git
cd wanderlust-travel

# Install dependencies
composer install

# Configure environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Start the development server
php artisan serve
```

## Project Structure

```
resources/views/
├── layouts/        # Header, footer, navigation, slider, scripts
├── pages/          # About, blogs, contact, gallery, services
├── auth/           # Login, register, password reset
└── dashboard.blade.php
public/assets/      # Images, CSS, JavaScript
```

## License

MIT
