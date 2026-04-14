<?php

namespace App\Livewire;

use App\Models\BlogPost;
use App\Models\Product;
use App\Models\Setting;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page', [
            'featuredProducts' => Product::active()->featured()->orderBy('sort_order')->limit(4)->get(),
            'latestPosts' => BlogPost::published()->latest('published_at')->limit(3)->get(),
            'whatsappUrl' => Setting::whatsappUrl(),
        ])->layout('layouts.public');
    }
}
