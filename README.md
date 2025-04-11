# Fullstack Colossal: Laravel 10, Eloquent, MySQL, Tailwind CSS, jQuery, JavaScript

![Collosal Preview](preview.jpg)

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

*packag*
```bash
npm install
yarn install
pnpm install
bun install
```

*composer*
```bash
composer install
composer update
```

## Setup .env File
For setting up your environment variables, you can start by copying the `.env.example` file to create your `.env` file. The `.env.example` file typically contains examples or placeholders for the environment variables your application needs. To simplify this process, you can use the following command:
```bash
cp .env.example .env
```
This command will duplicate the `.env.example` file and create a new file named `.env`, allowing you to fill in the actual values for your environment variables.

After creating your `.env` file, ensure that your Laravel application is ready to run smoothly by executing the following command to generate an application key:
```bash
php artisan key:generate
```
This command will generate a unique key for your application, which is essential for security and encryption purposes.

Next, make sure that the database configuration in your .env file points to your MySQL database. Update the `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` variables with the appropriate values for your MySQL database setup.


To configure email-related features in your Laravel application, you need to ensure that the `MAIL_MAILER` variable in your `.env` file is appropriately set. Begin by accessing your `.env` file and locating the `MAIL_MAILER` variable. If it's not present, add it to the file. Set the value of `MAIL_MAILER` according to your email service provider's specifications. Common values include `smtp`, `sendmail`, `mailgun`, or `ses`. Ensure that other email-related variables such as `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_ENCRYPTION`, `MAIL_FROM_ADDRESS`, and `MAIL_FROM_NAME` are also properly configured based on your email service provider's settings. Once you've configured these variables, your Laravel application will be ready to send emails using the specified email service.

## Setting Up Default Data

To set up default data, you can use the following command:
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
