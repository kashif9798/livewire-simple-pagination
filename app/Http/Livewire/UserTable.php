<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
 
    public function search(){
        $this->resetPage();
    }

    public function render()
    {
        $users = User::when(!empty($this->search),function($q){
            $q->where('name', 'like', '%'.$this->search.'%');
        })
        ->paginate(5);

        return view('livewire.user-table',[
            'users' => $users
        ]);
    }
}
