<?php

namespace App\Livewire;

use App\Models\BlogPost;
use App\Models\Setting;
use Livewire\Component;

class BlogDetailPage extends Component
{
    public BlogPost $post;

    public function mount(string $slug): void
    {
        $this->post = BlogPost::published()->where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        $relatedPosts = BlogPost::published()
            ->where('id', '!=', $this->post->id)
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('livewire.blog-detail-page', [
            'relatedPosts' => $relatedPosts,
            'whatsappUrl' => Setting::whatsappUrl(),
        ])->layout('layouts.public')->title($this->post->title);
    }
}
