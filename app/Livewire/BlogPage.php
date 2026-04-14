<?php

namespace App\Livewire;

use App\Models\BlogPost;
use Livewire\Component;
use Livewire\WithPagination;

class BlogPage extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.blog-page', [
            'posts' => BlogPost::published()->latest('published_at')->paginate(9),
        ])->layout('layouts.public')->title('Blog & Artikel');
    }
}
