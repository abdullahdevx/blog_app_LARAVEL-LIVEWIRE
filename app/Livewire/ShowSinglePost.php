<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;


class ShowSinglePost extends Component
{
    public function render($id)
    {
        $post = Post::find($id);
        return view('livewire.show-single-post',['posts' => $post]);
    }
}
