<?php

namespace App\Livewire;
use App\Models\Post;
use Illuminate\Http\Request;
use LivewireUI\Modal\ModalComponent;
// use Livewire\Component;


class EditPost extends ModalComponent
{
    public Post $post;
    public $title = '';
    public $body = '';

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->body = $post->body;
    }

    public function updatePost()
    {
        $this->validate([
            'title' => 'required|max:120',
            'body'  => 'required',
        ]);
    
        $this->post->title = $this->title;
        $this->post->body = $this->body;
        $this->post->save();
        // session()->flash('status','Post updated successfully');
        return redirect('/posts');
    }

    public function render()
    {
        return view('livewire.edit-post');
    }
}
