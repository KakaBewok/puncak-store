<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Setting;
use Livewire\Component;
use Livewire\WithPagination;

class ProductPage extends Component
{
    use WithPagination;

    public string $search = '';
    public string $filter = 'all'; // all, promo

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingFilter(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Product::active()->orderBy('sort_order');

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        if ($this->filter === 'promo') {
            $query->promo();
        }

        return view('livewire.product-page', [
            'products' => $query->paginate(12),
            'whatsappUrl' => Setting::whatsappUrl(),
        ])->layout('layouts.public')->title('Produk Kami');
    }
}
