<?php

namespace App\Livewire\Admin;

use App\Models\BlogPost;
use App\Models\Product;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard', [
            'totalProducts' => Product::count(),
            'activeProducts' => Product::active()->count(),
            'promoProducts' => Product::promo()->count(),
            'totalPosts' => BlogPost::count(),
            'publishedPosts' => BlogPost::published()->count(),
        ])->layout('layouts.admin')->title('Dashboard Admin');
    }
}
