# Kanye West Quotes App

## Requirements
- Docker
- Docker Compose
- Laravel Sail
- Laravel Livewire

## Setup

1. Clone the repository
2. Run `cp .env.example .env` and configure the `.env` file
3. Install composer dependencies:
   ```bash
   composer install
4. Install npm dependencies:
   ```bash
   npm install
5. Generate App Key:
   ```bash
   php artisan key:generate
6. Start Sail:
   ```bash
   ./vendor/bin/sail up -d
   ./vendor/bin/sail artisan migrate
   ./vendor/bin/sail artisan db:seed
   ./vendor/bin/sail npm run build
   
7. Register to see latest quotes. 😉
8. If you want to run tests.
   ```bash
   ./vendor/bin/sail test

## Note:
- Before starting sail make sure to free apache and mysql ports as sail will throw error if ports are not free.
- Otherwise change the port in docker-compose.yml
