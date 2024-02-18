<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Middleware\Authenticate;

use App\Models\Post;


class AdminPosts extends Component
{
        public $index = 1;
        
        public function deletePost($id)
        {

            Post::destroy($id);
            return redirect('/admin/posts');
        }
    
        public function render()
        {
            $posts = Post::orderBy('created_at', 'DESC')->get();
            return view('livewire.admin-posts',['post' => $posts]);
        }
      
}
