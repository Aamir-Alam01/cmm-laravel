# Course Management

This is a course management project that allows user to create course, create instructors and allocate instructor to the course.

## Screenshots
![Dashboard Screenshot](screenshots/course_panel.png)


## Requirements

- PHP >= 8.0
- Composer
- MySQL or any other supported database
- Laravel >= 10.x

## Installation Steps

Follow these steps to set up your project locally:

### 1. Clone the Repository

```bash
git clone https://github.com/Aamir-Alam01/cmm-laravel
cd cmm-laravel

```

### 2. Create and Configure Your Environment
```bash
cp .env.example .env
```
- Edit the .env file to set your database connection details.

### 2. Install the dependencies
- Make sure you have Composer installed. Then, run:
```bash
composer install
```

### 3. Generate Application Key
- Run the following command to generate the application key:
```bash
php artisan key:generate
```

### 4. Create a database and configure `.env` file
- Create a database with your desired name and configure the `.env` file with the database name and other configuration like username and password as per your settings.

### 5. Run Migration
- Execute the migration command to create the necessary database tables:
```bash
php artisan migrate
```

### 6. Serve the Application
- You can serve your application using the built-in PHP server: database tables:
```bash
php artisan serve
```
- Now you can access your application at http://127.0.0.1:8000.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
