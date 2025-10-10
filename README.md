# Solareye - Solar PV Inspection and Reporting App

## Project Overview
Solareye is a Laravel + Livewire web application designed to manage solar PV inspections and reports. 
The app allows users to register/login, create sites, record inspections, and generate detailed reports.

---

## Features
- User authentication (register, login, logout)
- Profile and settings management
- CRUD operations for:
  - Sites
  - Inspections
  - Reports
- Reports include:
  - Title, Summary, Severity (Low, Medium, High)
  - Fault type (e.g., Hot Spots, Diode, etc.)
  - Photo attachment
- Dashboard for logged-in users
- Role-based visibility (guest vs authenticated user)

---

## Technologies Used
- PHP 8.x & Laravel 10.x
- Livewire for dynamic frontend interactions
- Tailwind CSS for styling
- MySQL / SQLite (for local development)
- Node.js + Vite for frontend asset compilation

---

## Installation
1. ### Clone the repository:
```bash
git clone https://github.com/your-username/solareye.git
```
2. ### Change to the project folder
```bash
cd solareye
```

3. ### Install PHP dependencies via Composer
```bash
composer install
```

4. ### Copy the example environment file and generate an app key
```bash
cp .env.example .env
php artisan key:generate
```

5. ### Install Node.js dependencies (for Vite/Tailwind)
```bash
npm install
```

6. ### Run migrations
```bash
php artisan migrate:fresh --seed
```

7. ### Build frontend assets
```bash
npm run build
```

8. ### Serve the application locally
```bash
php artisan serve
```
