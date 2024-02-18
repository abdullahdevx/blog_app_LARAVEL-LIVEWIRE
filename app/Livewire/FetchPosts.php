<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Middleware\Authenticate;
use App\Models\Post;

class FetchPosts extends Component
{
    public $listeners = ['refresh' => 'render'];
    public $index = 1;
    

    public function deletePost($id)
    {
        $post = Post::find($id);
        $this->authorize('delete', $post);
        Post::destroy($id);
        $this->dispatch('refresh')->self();
    }

    public function editPost($id)
    {
        $postId = Post::find($id);
        
    }
    
    public function render()
    {
        $posts = Post::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get();
        return view('livewire.fetch-posts')->with('post', $posts);
    }
}
    
?>