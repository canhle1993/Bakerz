# Bakerz Bite

Bakerz Bite is a Laravel 11 bakery and beverage ecommerce project with a customer storefront, admin dashboard, rank-based rewards, health-based product suggestions, workshop registration, deal-of-the-day campaigns, coming-soon products, and Power BI reporting.

## Tech stack

- PHP 8.2
- Laravel 11
- MySQL
- Blade templates
- Vite
- Bootstrap / custom frontend assets
- Google Maps JavaScript API
- VNPay
- Power BI Embed

## Main features

- Customer storefront with product catalog, category filtering, search, cart, checkout, wishlist, and reviews
- Health-based product suggestion flow with BMI support and product-health mapping
- Deal of the Day and Coming Soon product sections managed from admin
- Bakerz Bite Rewards with Bronze, Gold, and Diamond ranks
- Workshop registration limited to Diamond accounts
- Admin management for products, categories, discounts, banners, chefs, blogs, clients, admins, orders, reviews, workshops, and social media
- Contact form and location/distance display with Google Maps
- Power BI chart embedded in admin dashboard

## Project structure

```text
app/
  Http/Controllers/      Application logic for client, admin, auth, payment, workshop, reviews...
  Models/                Eloquent models for product, order, user, discount, workshop, banner...
  Providers/             Global view composers and shared data

config/
  bakerz.php             App-specific config for contact info and third-party integrations

database/
  migrations/            Laravel migrations
  backup/                Database backup files used by this project

resources/views/
  admin/                 Admin dashboard and management pages
  client/                Storefront, shop, blog, contact, profile, rewards, coming soon...
  layouts/               Shared header, footer, social links, partials

routes/
  web.php                Main web routes

public/
  assets/                Frontend assets
  darkpan-1.0.0/         Admin template assets
```

## Database note

This project uses a custom schema in addition to standard Laravel tables. The application logic mainly works with tables such as `user`, `product`, `category`, `order`, `orderdetails`, `cart`, `discount`, `discountproduct`, `heathy_catalog`, `link_product_heathy`, `coming_soon`, `deal_of_the_day`, `workshop`, and `socialmedia`.

Because of that, running only `php artisan migrate` may not be enough for a fresh setup. If tables are missing, import the project database backup first.

## Installation

1. Clone the repository.
2. Install PHP dependencies.
3. Install Node dependencies.
4. Copy `.env.example` to `.env`.
5. Update database and integration settings in `.env`.
6. Generate the app key if needed.
7. Import the project database if your local database is empty.

```bash
git clone https://github.com/canhle1993/Bakerz.git
cd Bakerz
composer install
npm install
cp .env.example .env
php artisan key:generate
```

## Environment configuration

Important variables in `.env`:

```env
APP_NAME="Test App"
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bakerz
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME="your-email@gmail.com"
MAIL_PASSWORD="your-app-password"
MAIL_FROM_ADDRESS="your-email@gmail.com"

APP_DISPLAY_ADDRESS="35/6 duong D5, Q. Binh Thanh, TP.HCM"
APP_DISPLAY_PHONE="1800 1779"
APP_DISPLAY_EMAIL="hello@example.com"

STORE_LATITUDE=10.80688612
STORE_LONGITUDE=106.71420533
GOOGLE_MAPS_API_KEY=

POWERBI_EMBED_URL=

VNPAY_URL="https://sandbox.vnpayment.vn/paymentv2/vpcpay.html"
VNPAY_TMN_CODE=
VNPAY_HASH_SECRET=
```

## Run locally

### Option 1: XAMPP / Apache

Start Apache and MySQL in XAMPP, then run:

```bash
npm run dev
```

Open:

```text
http://localhost/bakerz/public
```

### Option 2: Laravel development server

```bash
php artisan serve
npm run dev
```

Open:

```text
http://127.0.0.1:8000
```

## Admin and business modules

- Dashboard with Power BI report
- Product management
- Category and healthy type management
- Discount management
- Order lifecycle management
- Banner, chef, and blog management
- Deal of the Day management
- Coming Soon management
- Workshop registration review
- Contact message handling
- Social media management

## Rewards and rank logic

- Bronze: default customer rank
- Gold: unlocked from accumulated score
- Diamond: unlocked from higher accumulated score and required for workshop registration
- Rank-based checkout discounts are applied in cart and checkout flows

## Health-based suggestion flow

- Products are mapped to health tags through `link_product_heathy`
- Customers can select health conditions on the homepage
- BMI is calculated on the client side and can auto-select weight-related health tags
- Filtered products are shown based on the selected health conditions

## Integrations

- Google Maps: display store map, user location, route, and distance
- VNPay: payment redirect and return handling
- Power BI: embedded report in admin dashboard
- SMTP: email sending

## Useful commands

```bash
composer install
npm install
npm run dev
npm run build
php artisan serve
php artisan config:clear
php artisan cache:clear
```

## Testing

The repository currently contains only the default Laravel example tests.

```bash
php artisan test
```

## Repository

- GitHub: https://github.com/canhle1993/Bakerz
