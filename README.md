### NPS Feedback System

A simple Net Promoter Score (NPS) feedback collection system with an admin dashboard, built with Laravel (Blade + TailwindCSS) and MySQL.

## Requirements
- Laravel 12
- PHP 8.2 or above
- MySQL 8
- Composer (https://getcomposer.org/)
- NPM (Node Package Manager - https://www.npmjs.com/)
- Git

## How to setup the application
```bash
1) Clone the repository
git clone https://github.com/your-username/nps-feedback-system.git

2) Install Composer packages
composer install

3) Install Node modules
npm install

4) Rename .env.example file to .env

5) Configure following environment variables.
DB_DATABASE=your_database_name
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password

6) Generate Application key
php artisan key:generate

7) Run Database migrations
php artisan migrate

8) Frontend asset bundling
npm run dev

9) Run PHP development server
php artisan serve
```
## UI Routes
| Endpoint       | Description          | Auth Required |
|:---------------|:---------------------| :-----------: |
| `/login`       | Admin Login Page     | No            |
| `/dashboard`   | Admin Dashboard Page | Yes           |
| `/` | Feedback Form        | No            |

## Create Admin User

```
php artisan app:create-user "username" "user-email" "user-password"

```
## Run Tests

```
php artisan test
```
## Authors
#### Developed By :  Prageeth Peiris
#### Contact : glpspeiris@gmail.com
