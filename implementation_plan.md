# Puncak Store - Company Profile Implementation Plan

## Phase 1: Database & Models
1. Create migrations: `products`, `blog_posts`, `settings`
2. Create models: `Product`, `BlogPost`, `Setting`
3. Create seeders with sample data + admin user

## Phase 2: Public Layout & Components
1. Create public layout (`layouts/public.blade.php`)
2. Create reusable components: navbar, footer, product-card, article-card, cta-button, promo-badge
3. Style with TailwindCSS - soft corporate colors, clean typography

## Phase 3: Public Pages (Livewire)
1. Landing Page (Home) - Hero, About, Products, Why Us, Blog, CTA, Footer
2. Products Page - Grid with optional filter
3. Product Detail Page
4. Blog Page - Article listing
5. Blog Detail Page

## Phase 4: Admin Panel (Livewire)
1. Admin Dashboard with stats
2. Product Management (CRUD)
3. Blog Management (CRUD)
4. WhatsApp Settings
5. General Settings

## Phase 5: Routes & Middleware
1. Public routes
2. Admin routes (auth middleware)
3. Storage link for images

## Design Tokens
- Primary: Soft teal/blue (#0F766E / #0D9488)
- Secondary: Warm gray
- Accent: Soft gold for CTAs
- Background: White / Light gray
- Font: Inter (Google Fonts)
- Border radius: rounded-md / rounded-lg
- Spacious whitespace
