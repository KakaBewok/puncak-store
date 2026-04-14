<?php

namespace App\Livewire\Admin;

use App\Models\BlogPost;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class BlogManager extends Component
{
    use WithFileUploads, WithPagination;

    // List state
    public string $search = '';

    // Form state
    public bool $showForm = false;
    public bool $isEditing = false;
    public ?int $editingId = null;

    // Form fields
    public string $title = '';
    public string $slug = '';
    public string $excerpt = '';
    public string $content = '';
    public string $status = 'draft';
    public ?string $published_at = null;
    public $thumbnail;
    public ?string $existing_thumbnail = null;

    // Delete confirmation
    public bool $showDeleteModal = false;
    public ?int $deletingId = null;

    protected function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blog_posts,slug,' . $this->editingId,
            'excerpt' => 'nullable|string|max:500',
            'content' => 'nullable|string',
            'status' => 'required|in:publish,draft',
            'published_at' => 'nullable|date',
            'thumbnail' => 'nullable|image|max:2048',
        ];
    }

    public function updatedTitle(): void
    {
        if (!$this->isEditing) {
            $this->slug = \Illuminate\Support\Str::slug($this->title);
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
        $post = BlogPost::findOrFail($id);

        $this->editingId = $post->id;
        $this->title = $post->title;
        $this->slug = $post->slug;
        $this->excerpt = $post->excerpt ?? '';
        $this->content = $post->content ?? '';
        $this->status = $post->status;
        $this->published_at = $post->published_at?->format('Y-m-d\TH:i');
        $this->existing_thumbnail = $post->thumbnail;
        $this->thumbnail = null;

        $this->showForm = true;
        $this->isEditing = true;
    }

    public function save(): void
    {
        $this->validate();

        $data = [
            'title' => $this->title,
            'slug' => $this->slug,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'status' => $this->status,
            'published_at' => $this->published_at ?: ($this->status === 'publish' ? now() : null),
            'user_id' => auth()->id(),
        ];

        if ($this->thumbnail) {
            if ($this->existing_thumbnail) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($this->existing_thumbnail);
            }
            $data['thumbnail'] = $this->thumbnail->store('blog', 'public');
        }

        if ($this->isEditing && $this->editingId) {
            BlogPost::where('id', $this->editingId)->update($data);
            $this->dispatch('notify', message: 'Artikel berhasil diperbarui!');
        } else {
            BlogPost::create($data);
            $this->dispatch('notify', message: 'Artikel berhasil ditambahkan!');
        }

        $this->closeForm();
    }

    public function confirmDelete(int $id): void
    {
        $this->deletingId = $id;
        $this->showDeleteModal = true;
    }

    public function deletePost(): void
    {
        if ($this->deletingId) {
            $post = BlogPost::find($this->deletingId);
            if ($post) {
                if ($post->thumbnail) {
                    \Illuminate\Support\Facades\Storage::disk('public')->delete($post->thumbnail);
                }
                $post->delete();
                $this->dispatch('notify', message: 'Artikel berhasil dihapus!');
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
            'editingId', 'title', 'slug', 'excerpt', 'content',
            'status', 'published_at', 'thumbnail', 'existing_thumbnail',
        ]);
        $this->resetErrorBag();
    }

    public function removeThumbnail(): void
    {
        if ($this->existing_thumbnail) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($this->existing_thumbnail);
            if ($this->editingId) {
                BlogPost::where('id', $this->editingId)->update(['thumbnail' => null]);
            }
            $this->existing_thumbnail = null;
        }
        $this->thumbnail = null;
    }

    public function render()
    {
        $query = BlogPost::latest('created_at');

        if ($this->search) {
            $query->where('title', 'like', '%' . $this->search . '%');
        }

        return view('livewire.admin.blog-manager', [
            'posts' => $query->paginate(10),
        ])->layout('layouts.admin')->title('Kelola Artikel');
    }
}
