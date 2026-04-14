<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Setting;
use Livewire\Component;

class ProductDetailPage extends Component
{
    public Product $product;

    public function mount(string $slug): void
    {
        $this->product = Product::active()->where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        $relatedProducts = Product::active()
            ->where('id', '!=', $this->product->id)
            ->limit(4)
            ->inRandomOrder()
            ->get();

        $whatsappMessage = "Halo, saya tertarik dengan produk: {$this->product->name} ({$this->product->formatted_final_price}). Bisa info lebih lanjut?";

        return view('livewire.product-detail-page', [
            'relatedProducts' => $relatedProducts,
            'whatsappUrl' => Setting::whatsappUrl($whatsappMessage),
        ])->layout('layouts.public')->title($this->product->name);
    }
}
