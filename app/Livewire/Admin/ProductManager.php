<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ProductManager extends Component
{
    use WithFileUploads, WithPagination;

    // List state
    public string $search = '';

    // Form state
    public bool $showForm = false;
    public bool $isEditing = false;
    public ?int $editingId = null;

    // Form fields
    public string $name = '';
    public string $slug = '';
    public string $description = '';
    public float $price = 0;
    public bool $is_promo = false;
    public float $discount = 0;
    public string $discount_type = 'percentage';
    public int $minimum_order = 1;
    public bool $is_featured = false;
    public string $status = 'active';
    public int $sort_order = 0;
    public $image;
    public ?string $existing_image = null;

    // Delete confirmation
    public bool $showDeleteModal = false;
    public ?int $deletingId = null;

    protected function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $this->editingId,
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'is_promo' => 'boolean',
            'discount' => 'nullable|numeric|min:0',
            'discount_type' => 'required|in:percentage,nominal',
            'minimum_order' => 'required|integer|min:1',
            'is_featured' => 'boolean',
            'status' => 'required|in:active,draft',
            'sort_order' => 'integer|min:0',
            'image' => 'nullable|image|max:2048',
        ];
    }

    public function updatedName(): void
    {
        if (!$this->isEditing) {
            $this->slug = \Illuminate\Support\Str::slug($this->name);
        }
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function openCreateForm(): void
    {
        $this->resetForm();
        $this->showForm = true;
        $this->isEditing = false;
    }

    public function openEditForm(int $id): void
    {
        $product = Product::findOrFail($id);

        $this->editingId = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->description = $product->description ?? '';
        $this->price = (float) $product->price;
        $this->is_promo = $product->is_promo;
        $this->discount = (float) $product->discount;
        $this->discount_type = $product->discount_type;
        $this->minimum_order = $product->minimum_order;
        $this->is_featured = $product->is_featured;
        $this->status = $product->status;
        $this->sort_order = $product->sort_order;
        $this->existing_image = $product->image;
        $this->image = null;

        $this->showForm = true;
        $this->isEditing = true;
    }

    public function save(): void
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'price' => $this->price,
            'is_promo' => $this->is_promo,
            'discount' => $this->discount,
            'discount_type' => $this->discount_type,
            'minimum_order' => $this->minimum_order,
            'is_featured' => $this->is_featured,
            'status' => $this->status,
            'sort_order' => $this->sort_order,
        ];

        if ($this->image) {
            // Delete old image if exists
            if ($this->existing_image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($this->existing_image);
            }
            $data['image'] = $this->image->store('products', 'public');
        }

        if ($this->isEditing && $this->editingId) {
            Product::where('id', $this->editingId)->update($data);
            $this->dispatch('notify', message: 'Produk berhasil diperbarui!');
        } else {
            Product::create($data);
            $this->dispatch('notify', message: 'Produk berhasil ditambahkan!');
        }

        $this->closeForm();
    }

    public function confirmDelete(int $id): void
    {
        $this->deletingId = $id;
        $this->showDeleteModal = true;
    }

    public function deleteProduct(): void
    {
        if ($this->deletingId) {
            $product = Product::find($this->deletingId);
            if ($product) {
                if ($product->image) {
                    \Illuminate\Support\Facades\Storage::disk('public')->delete($product->image);
                }
                $product->delete();
                $this->dispatch('notify', message: 'Produk berhasil dihapus!');
            }
        }

        $this->showDeleteModal = false;
        $this->deletingId = null;
    }

    public function closeForm(): void
    {
        $this->showForm = false;
        $this->resetForm();
    }

    public function resetForm(): void
    {
        $this->reset([
            'editingId', 'name', 'slug', 'description', 'price',
            'is_promo', 'discount', 'discount_type', 'minimum_order',
            'is_featured', 'status', 'sort_order', 'image', 'existing_image',
        ]);
        $this->resetErrorBag();
    }

    public function removeImage(): void
    {
        if ($this->existing_image) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($this->existing_image);
            if ($this->editingId) {
                Product::where('id', $this->editingId)->update(['image' => null]);
            }
            $this->existing_image = null;
        }
        $this->image = null;
    }

    public function render()
    {
        $query = Product::orderBy('sort_order');

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        return view('livewire.admin.product-manager', [
            'products' => $query->paginate(10),
        ])->layout('layouts.admin')->title('Kelola Produk');
    }
}
