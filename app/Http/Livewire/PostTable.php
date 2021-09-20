<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostTable extends Component
{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';

    public $search = '';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::when(!empty($this->search),function($q){
            $q->where('title', 'like', '%'.$this->search.'%');
        })
        ->paginate(5);

        return view('livewire.post-table',[
            'posts' => $posts
        ]);
    }
}
