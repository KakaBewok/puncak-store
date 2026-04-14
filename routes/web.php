<?php

use App\Livewire\BlogDetailPage;
use App\Livewire\BlogPage;
use App\Livewire\HomePage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductPage;
use App\Livewire\Admin\BlogManager;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\GeneralSetting;
use App\Livewire\Admin\ProductManager;
use App\Livewire\Admin\WhatsappSetting;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', HomePage::class)->name('home');
Route::get('/produk', ProductPage::class)->name('products');
Route::get('/produk/{slug}', ProductDetailPage::class)->name('product.detail');
Route::get('/blog', BlogPage::class)->name('blog');
Route::get('/blog/{slug}', BlogDetailPage::class)->name('blog.detail');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', Dashboard::class)->name('admin.dashboard');
    Route::get('/produk', ProductManager::class)->name('admin.products');
    Route::get('/blog', BlogManager::class)->name('admin.blog');
    Route::get('/whatsapp', WhatsappSetting::class)->name('admin.whatsapp');
    Route::get('/pengaturan', GeneralSetting::class)->name('admin.settings');
});

require __DIR__.'/settings.php';
