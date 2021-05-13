<?php

namespace App\Http\Livewire\Admin;

use App\Models\Activitat;
use Livewire\Component;
use Livewire\WithPagination;

class ActivityIndex extends Component
{
    use WithPagination;
   
    public $search;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        $activitats= Activitat::where('name','LIKE','%'. $this->search .'%')
        ->orwhere('tipus','LIKE','%'. $this->search .'%')
        ->paginate(10);
        return view('livewire.admin.activity-index',compact('activitats'));
    }
}
