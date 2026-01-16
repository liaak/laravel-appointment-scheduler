# WebpageAppointment - Appointment Booking System

This application allows users to book appointments online and provides an admin dashboard for managing bookings.

## Features

- **Public Interface**
  - Browse services offered
  - Book appointments with real-time availability
  - View contact information and privacy policy
  - Responsive design for mobile and desktop

- **Admin Dashboard**
  - View all appointments in a clean, organized interface
  - Filter appointments by date range
  - Edit appointment details with modal forms
  - Delete appointments
  - Dynamic updates with JavaScript and AJAX

- **Appointment Management**
  - Create new appointments with name, email, phone, date, time, and notes
  - Prevent booking of past time slots
  - Real-time availability checking
  - Data validation and error handling

## Tech Stack

### Backend
- **PHP 8.2+** - Modern PHP for server-side logic
- **Laravel 12.0** - Web application framework
- **Livewire 3.6** - Used for the public appointment booking form
- **MySQL** - Relational database management

### Frontend
- **Tailwind CSS 4.0** - Utility-first CSS framework
- **Vite 7.0** - Fast build tool and development server
- **JavaScript (ES6+)** - For interactive features and AJAX requests
- **Blade Templates** - Laravel's templating engine

### Testing
- **PHPUnit 11.5** - PHP testing framework for unit and feature tests

## Installation

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js & npm
- MySQL database

### Setup Instructions

1. **Clone the repository**
   ```
   git clone <repository-url>
   cd WebpageAppointment
   ```


2. **Install PHP dependencies**
   ```
   composer install
   ```

3. **Install Node dependencies**
   ```
   npm install
   ```

4. **Environment Configuration**
   ```
   create your .env (copy .env.example)
   ```
   
   Update the following in your `.env` file:
   ```
   DB_CONNECTION=mysql
   DB_DATABASE=wp_appointment
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Generate Application Key**
   ```
   php artisan key:generate
   ```

6. **Run Migrations**
   ```
   php artisan migrate
   ```

7. **Build Frontend Assets**
   ```
   npm run build
   ```
   
   For development with hot-reload:
   ```
   npm run dev
   ```

8. **Start the Development Server**
   ```
   php artisan serve
   ```

   Visit `http://localhost:8000` in your browser.



## Testing

Run the test suite:

```
php artisan test
```


## Usage

### Booking an Appointment
1. Navigate to the Appointments page
2. Fill in the booking form with your details
3. Select a preferred date and time
4. Submit the form
5. Receive on-screen confirmation

### Admin Access
1. Navigate to `/admin`
2. View all appointments in a table
3. Use filters to view appointments by date range
4. Click "Edit" to modify appointment details
5. Click "Delete" to remove appointments

## Routes

**Public:** `/` (home), `/services`, `/appointments`, `/contact`, `/privacy-policy`

**Admin:** `/admin` (dashboard)

**AJAX Endpoints:** `GET/PUT/DELETE /admin/appointments/{id}`

## License

Copyright (c) 2025 liaak - All Rights Reserved

This project is for personal, educational, and portfolio purposes only. Commercial use and redistribution for profit are not permitted.

## Credits

Built with [Laravel](https://laravel.com) and [Livewire](https://livewire.laravel.com).
