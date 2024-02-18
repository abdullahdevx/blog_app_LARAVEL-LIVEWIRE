<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Http\Middleware\Authenticate;


class Dashboard extends Component
{


    public function render()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('livewire.dashboard', ['post' => $posts]);
    }
}
