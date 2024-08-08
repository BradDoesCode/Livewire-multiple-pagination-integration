<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BlogPost as BP;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class BlogPost extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function placeholder(array $params = [])
    {
        return view('livewire.components.list-placeholder', $params);
    }
    public function blogPosts()
    {
        // sleep(4);
        return BP::paginate(5, pageName: 'blogPosts');
    }

    public function render()
    {
        return view('livewire.blog-post', [
            'blogPosts' => $this->blogPosts()
        ]);
    }
}
