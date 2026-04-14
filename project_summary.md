# Puncak Store - Company Profile Website

## ✅ Project Status: Complete & Running

The website is fully functional at **http://127.0.0.1:8000/**

---

## 🔐 Admin Access

| Field | Value |
|-------|-------|
| URL | http://127.0.0.1:8000/admin |
| Email | `admin@puncakstore.com` |
| Password | `password` |

---

## 📁 Project Structure

```
app/
├── Livewire/
│   ├── HomePage.php              # Landing page
│   ├── ProductPage.php           # Product listing
│   ├── ProductDetailPage.php     # Product detail
│   ├── BlogPage.php              # Blog listing
│   ├── BlogDetailPage.php        # Blog detail
│   └── Admin/
│       ├── Dashboard.php         # Admin dashboard
│       ├── ProductManager.php    # CRUD products
│       ├── BlogManager.php       # CRUD articles
│       ├── WhatsappSetting.php   # WhatsApp config
│       └── GeneralSetting.php    # Company settings
├── Models/
│   ├── User.php
│   ├── Product.php               # Products with scopes & price helpers
│   ├── BlogPost.php              # Blog with published scope
│   └── Setting.php               # Key-value settings with caching
resources/views/
├── layouts/
│   ├── public.blade.php          # Public layout (navbar + footer)
│   └── admin.blade.php           # Admin layout (sidebar)
├── components/public/
│   ├── navbar.blade.php          # Scroll-aware responsive navbar
│   ├── footer.blade.php          # Footer with contacts & social
│   ├── whatsapp-float.blade.php  # Floating WhatsApp button
│   ├── product-card.blade.php    # Reusable product card
│   └── article-card.blade.php    # Reusable article card
├── livewire/
│   ├── home-page.blade.php
│   ├── product-page.blade.php
│   ├── product-detail-page.blade.php
│   ├── blog-page.blade.php
│   ├── blog-detail-page.blade.php
│   └── admin/
│       ├── dashboard.blade.php
│       ├── product-manager.blade.php
│       ├── blog-manager.blade.php
│       ├── whatsapp-setting.blade.php
│       └── general-setting.blade.php
```

---

## 🗄️ Database Tables

| Table | Purpose |
|-------|---------|
| `users` | Admin authentication |
| `products` | Product catalog (name, slug, image, price, promo, discount, min order, status) |
| `blog_posts` | Blog articles (title, slug, thumbnail, content, status, publish date) |
| `settings` | Key-value store (WhatsApp number, company info, social links) |

---

## 🌐 Public Pages

| Route | Page | Description |
|-------|------|-------------|
| `/` | Home | Hero, About, Products, Why Us, Blog, CTA |
| `/produk` | Products | Grid listing with search & promo filter |
| `/produk/{slug}` | Product Detail | Full product info with WhatsApp CTA |
| `/blog` | Blog | Article grid listing |
| `/blog/{slug}` | Blog Detail | Full article with related posts |

## 🔒 Admin Pages

| Route | Page | Description |
|-------|------|-------------|
| `/admin` | Dashboard | Stats overview with quick actions |
| `/admin/produk` | Products | CRUD table with modal forms |
| `/admin/blog` | Blog | CRUD table with modal forms |
| `/admin/whatsapp` | WhatsApp | Number & CTA message config |
| `/admin/pengaturan` | Settings | Company info & social media |

---

## 🎨 Design System

- **Font**: Inter (Google Fonts)
- **Primary Color**: Teal palette (`#0f766e` → `#14b8a6`)
- **Style**: Minimalist, clean, corporate
- **Corners**: `rounded-md` / `rounded-lg`
- **UI Language**: Bahasa Indonesia
- **Code Language**: English

---

## 📦 Sample Data Included

- **8 products** (soap, cleaners, detergent, disinfectant)
- **4 blog articles** (hospitality cleaning tips)
- **Settings** (WhatsApp, company info, social links)
- **1 admin user**
