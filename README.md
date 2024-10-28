# Kanye West Quotes App

## Requirements
- Docker
- Docker Compose
- Laravel Sail
- Laravel Livewire

## Setup

1. Clone the repository
2. Run `cp .env.example .env` and configure the `.env` file
3. Build and start Sail:
   ```bash
   ./vendor/bin/sail up -d
   ./vendor/bin/sail composer install
   ./vendor/bin/sail artisan migrate
   ./vendor/bin/sail artisan db:seed
   ./vendor/bin/sail npm install
   ./vendor/bin/sail num run build
   
4: Register to see latest quotes :) 
