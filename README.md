# Task Manager API - Laravel Backend

## Features

- View all tasks
- Add a task
- Mark task as completed
- Delete a task

## API Endpoints

| Method | URL             | Description               |
|--------|------------------|---------------------------|
| GET    | /api/tasks       | List all tasks            |
| POST   | /api/tasks       | Add a new task            |
| PUT    | /api/tasks/{id}  | Mark a task as completed  |
| DELETE | /api/tasks/{id}  | Delete a task             |

## Run Locally

```bash
git clone https://github.com/your-username/backend-laravel.git
cd backend-laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
