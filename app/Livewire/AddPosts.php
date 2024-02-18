<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class AddPosts extends Component
{

    public $title = '';
    public $body = '';

    public function savePost()
    {
        $this->validate([
            'title' => 'required|max:120',
            'body' => 'required'

        ]);

        $post = new Post;
        $post->title = $this->title;
        $post->body = $this->body;
        $post->user_id = Auth()->user()->id;
        $post->user_name = Auth()->user()->name;
        $post->save();

        return redirect('/posts')->with('status', 'Post successfully created.');
    }

    public function render()
    {
        return view('livewire.add-posts');
    }
}
