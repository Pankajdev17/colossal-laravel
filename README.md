# Fullstack Colossal: Laravel 10, Eloquent, MySQL, Tailwind CSS, jQuery, JavaScript

Collosal is a visually stunning landing page designed for software companies. Featuring a modern dark theme with glassmorphism effects, this template includes multiple pages to showcase your company's services, team, and blog content.

## Key Features

- **User Management**: Role-based authentication system
- **Content Management**: Full CRUD operations for all content types
- **Modern Stack**: Laravel 10 with Eloquent ORM and MySQL
- **Styling**: Tailwind CSS with responsive design
- **Interactive Elements**: jQuery and JavaScript for dynamic content
- **File Management**: Integrated file system for media handling
- **Pagination**: Built-in pagination for content lists

## Technology Stack

- Backend: Laravel 10
- Database: MySQL
- ORM: Eloquent
- Frontend: Tailwind CSS, jQuery, JavaScript
- Build Tools: Vite

## Project Setup

### Prerequisites

- PHP 8.1+
- Composer
- Node.js 16+
- MySQL 8+
- NPM/Yarn/PNPM

### Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/Pankajdev17/colossal-laravel.git
   cd colossal-laravel

2. **Install PHP dependencies**:
```bash
composer install
```

3. **Install JavaScript dependencies**:
```bash
npm install
# or
yarn install
# or
pnpm install
```

4. **Setup environment**:
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configure database**:
   **Edit the .env file with your database credentials**:
```bash
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

6. **Run migrations and seed data**:
```bash
php artisan migrate:fresh --seed
php artisan storage:link
```

## Running Applications

To start your application, make sure to follow the steps below:

1. **Styling with Tailwind CSS**: Before running the application, ensure you have prepared the styling using Tailwind CSS. Run the following command to compile your assets:
   ```bash
   npm run dev
   ```
   This will ensure that the user interface of your application is styled properly using Bootstrap.
   
2. **Starting the Server**: After ensuring the styling has been applied, you can start the Laravel PHP server by running the command:
   ```bash
   php artisan serve
   ```
   Make sure to run the command in a separate terminal. This will start your local development server and make your application accessible through your web browser.

By following these steps, you can start running your application and access it through your web browser for further development. Happy exploring and developing your application!.
