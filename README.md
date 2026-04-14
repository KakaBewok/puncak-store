<p align="center">
  <strong>PUNCAK STORE</strong>
</p>

<p align="center">
  Company Profile Web Application for Cleaning & Soap Products — Built for B2B Partnerships
</p>

<p align="center">
  <a href="#features">Features</a> •
  <a href="#tech-stack">Tech Stack</a> •
  <a href="#installation">Installation</a> •
  <a href="#usage">Usage</a> •
  <a href="#project-structure">Structure</a> •
  <a href="#screenshots">Screenshots</a> •
  <a href="#license">License</a>
</p>

---

## About

**Puncak Store** is a professional company profile web application designed for businesses that sell soap and cleaning products to the B2B market. The platform provides an elegant, minimalist interface to showcase products, share industry-related blog content, and drive customer engagement through WhatsApp CTA integration.

### Target Audience

- Hotels & Resorts
- Villas & Apartments
- Hospitals & Healthcare Facilities
- Corporate Offices
- Laundry Businesses
- Hospitality Industry

### Design Philosophy

The website follows a **minimalist, clean, and professional** design approach:

- Soft corporate teal color palette
- Clean typography using Inter (Google Fonts)
- Spacious layout with generous whitespace
- Rounded corners (`rounded-md` / `rounded-lg`)
- Subtle hover animations and smooth transitions
- Fully responsive across mobile and desktop

> **Note:** The codebase and structure are written in **English**, while all UI-facing content is in **Bahasa Indonesia**.

---

## Features

### 🌐 Public Website

| Page | Description |
|------|-------------|
| **Landing Page** | Hero section, About Us, Featured Products, Why Choose Us, Latest Blog, CTA |
| **Product Listing** | Responsive grid with search bar and promo filter |
| **Product Detail** | Full product info, pricing, promo badge, WhatsApp CTA |
| **Blog Listing** | Article cards with pagination |
| **Blog Detail** | Full article content with related posts |
| **WhatsApp CTA** | Floating button + all CTAs direct to WhatsApp |
| **Responsive Design** | Fully optimized for mobile and desktop |

### 🔒 Admin Panel

| Feature | Description |
|---------|-------------|
| **Dashboard** | Overview stats (products, articles) with quick actions |
| **Product Management** | Full CRUD with image upload, promo/discount settings |
| **Blog Management** | Full CRUD with thumbnail upload, publish/draft status |
| **WhatsApp Settings** | Configure WhatsApp number and default CTA message |
| **General Settings** | Company info, contact details, social media links |
| **Authentication** | Secure admin login with Fortify |

### 📦 Product Features

- Product name and slug
- Product image upload
- Rich description
- Pricing with formatted Rupiah display
- Promo flag with percentage or nominal discount
- Minimum order quantity
- Featured product toggle
- Active / Draft status
- Sort order control

### 📝 Blog Features

- Article title and auto-generated slug
- Thumbnail image upload
- Excerpt and full HTML content
- Publish / Draft status
- Scheduled publish date
- Author relationship

---

## Tech Stack

| Technology | Version | Purpose |
|-----------|---------|---------|
| [Laravel](https://laravel.com/) | 13.x | Backend framework |
| [Livewire](https://livewire.laravel.com/) | 4.x | Reactive UI components |
| [TailwindCSS](https://tailwindcss.com/) | 4.x | Utility-first CSS framework |
| [Alpine.js](https://alpinejs.dev/) | 3.x | Lightweight JS interactions |
| [Flux UI](https://flux.livewire.laravel.com/) | 2.x | Livewire component library |
| [MySQL](https://www.mysql.com/) | 8.x | Relational database |
| [Vite](https://vitejs.dev/) | 8.x | Frontend build tool |

---

## Requirements

- PHP >= 8.3
- Composer >= 2.x
- Node.js >= 18.x
- NPM >= 9.x
- MySQL >= 8.0

---

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/KakaBewok/puncak-store.git
cd puncak-store
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node Dependencies

```bash
npm install
```

### 4. Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Configure Database

Edit your `.env` file with your MySQL credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=puncak_store
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Create Database

```bash
mysql -u root -e "CREATE DATABASE puncak_store CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

### 7. Run Migrations & Seed

```bash
php artisan migrate --seed
```

This will create all tables and populate them with sample data including:
- 1 admin user
- 8 sample products
- 4 sample blog articles
- Default settings (WhatsApp, company info)

### 8. Create Storage Link

```bash
php artisan storage:link
```

### 9. Build Frontend Assets

```bash
npm run build
```

### 10. Start the Application

```bash
# Option 1: Using Laravel's built-in server
php artisan serve

# Option 2: Using the dev script (runs server + queue + vite concurrently)
composer dev
```

Visit the application at: **http://localhost:8000**

---

## Usage

### Default Admin Credentials

| Field | Value |
|-------|-------|
| URL | `http://localhost:8000/login` |
| Email | `admin@puncakstore.com` |
| Password | `password` |

After login, you will be redirected to the admin dashboard at `/admin`.

### Public Routes

| Route | Description |
|-------|-------------|
| `/` | Landing page (Home) |
| `/produk` | Product listing |
| `/produk/{slug}` | Product detail |
| `/blog` | Blog listing |
| `/blog/{slug}` | Blog detail |

### Admin Routes

| Route | Description |
|-------|-------------|
| `/admin` | Dashboard |
| `/admin/produk` | Product management |
| `/admin/blog` | Blog management |
| `/admin/whatsapp` | WhatsApp settings |
| `/admin/pengaturan` | General settings |

---

## Project Structure

```
puncak-store/
├── app/
│   ├── Livewire/
│   │   ├── HomePage.php                 # Landing page component
│   │   ├── ProductPage.php              # Product listing with search & filter
│   │   ├── ProductDetailPage.php        # Product detail with WhatsApp CTA
│   │   ├── BlogPage.php                 # Blog listing with pagination
│   │   ├── BlogDetailPage.php           # Blog detail with related posts
│   │   └── Admin/
│   │       ├── Dashboard.php            # Admin dashboard stats
│   │       ├── ProductManager.php       # Product CRUD operations
│   │       ├── BlogManager.php          # Blog CRUD operations
│   │       ├── WhatsappSetting.php      # WhatsApp configuration
│   │       └── GeneralSetting.php       # Company settings
│   └── Models/
│       ├── User.php                     # Admin user model
│       ├── Product.php                  # Product with scopes & price helpers
│       ├── BlogPost.php                 # Blog post with published scope
│       └── Setting.php                  # Key-value settings with caching
│
├── database/
│   ├── migrations/
│   │   ├── ..._create_products_table.php
│   │   ├── ..._create_blog_posts_table.php
│   │   └── ..._create_settings_table.php
│   └── seeders/
│       └── DatabaseSeeder.php           # Sample data seeder
│
├── resources/views/
│   ├── layouts/
│   │   ├── public.blade.php             # Public layout (navbar + footer)
│   │   └── admin.blade.php              # Admin layout (sidebar + topbar)
│   ├── components/public/
│   │   ├── navbar.blade.php             # Scroll-aware responsive navbar
│   │   ├── footer.blade.php             # Footer with contacts & social
│   │   ├── whatsapp-float.blade.php     # Floating WhatsApp button
│   │   ├── product-card.blade.php       # Reusable product card
│   │   └── article-card.blade.php       # Reusable article card
│   └── livewire/
│       ├── home-page.blade.php
│       ├── product-page.blade.php
│       ├── product-detail-page.blade.php
│       ├── blog-page.blade.php
│       ├── blog-detail-page.blade.php
│       └── admin/
│           ├── dashboard.blade.php
│           ├── product-manager.blade.php
│           ├── blog-manager.blade.php
│           ├── whatsapp-setting.blade.php
│           └── general-setting.blade.php
│
├── routes/
│   └── web.php                          # All public & admin routes
│
└── ...
```

---

## Database Schema

### `products`

| Column | Type | Description |
|--------|------|-------------|
| `id` | bigint | Primary key |
| `name` | string | Product name |
| `slug` | string | URL-friendly identifier |
| `image` | string | Image path (nullable) |
| `description` | text | Product description |
| `price` | decimal(12,2) | Base price in Rupiah |
| `is_promo` | boolean | Promo flag |
| `discount` | decimal(12,2) | Discount value |
| `discount_type` | string | `percentage` or `nominal` |
| `minimum_order` | integer | Minimum order quantity |
| `is_featured` | boolean | Show on homepage |
| `status` | string | `active` or `draft` |
| `sort_order` | integer | Display order |
| `timestamps` | | Created/Updated at |

### `blog_posts`

| Column | Type | Description |
|--------|------|-------------|
| `id` | bigint | Primary key |
| `title` | string | Article title |
| `slug` | string | URL-friendly identifier |
| `thumbnail` | string | Thumbnail image path |
| `excerpt` | text | Short summary |
| `content` | longText | Full HTML content |
| `status` | string | `publish` or `draft` |
| `published_at` | timestamp | Publish date |
| `user_id` | foreignId | Author reference |
| `timestamps` | | Created/Updated at |

### `settings`

| Column | Type | Description |
|--------|------|-------------|
| `id` | bigint | Primary key |
| `key` | string | Setting identifier (unique) |
| `value` | text | Setting value |
| `timestamps` | | Created/Updated at |

---

## Screenshots

> Screenshots can be added here to showcase the application UI.

### Landing Page
_Hero section with CTA, featured products, and company highlights._

### Product Page
_Product grid with search and promo filter functionality._

### Admin Dashboard
_Dashboard with stats overview and quick action buttons._

### Product Management
_CRUD interface with table listing and modal forms._

---

## Development

### Running in Development Mode

```bash
# Terminal 1: Start Vite dev server
npm run dev

# Terminal 2: Start Laravel server
php artisan serve
```

### Building for Production

```bash
npm run build
```

### Code Style

```bash
# Format PHP code using Laravel Pint
./vendor/bin/pint
```

### Running Tests

```bash
php artisan test
```

---

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

---

## License

This project is open-sourced software licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

<p align="center">
  Built with ❤️ using Laravel, Livewire & TailwindCSS
</p>
