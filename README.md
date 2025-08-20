<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Laravel Portfolio Website

A personal portfolio website built with Laravel.

## Features
- Home Page
- About Page
- Projects Page
- Blog Page
- Contact Page

## Setup
1. Clone repo  
2. Run `composer install`  
3. Run `php artisan serve`  
4. Open in browser: `http://127.0.0.1:8000`

## Structure
## Project Structure

```bash
resources/
└── views/
    ├── layouts/
    │   └── layout.blade.php       # Master layout
    ├── home.blade.php             # Home Page
    ├── about.blade.php            # About Page
    ├── projects.blade.php         # Projects Page
    ├── contact.blade.php          # Contact Page
    └── blog.blade.php             # Blog Page

app/
└── Http/
    └── Controllers/
        └── PortfolioController.php

routes/
└── web.php

