<?php

namespace App\Http\Livewire\Admin;

use App\Models\Extre;
use Livewire\Component;
use Livewire\WithPagination;

class ActivityExtra extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';
  
    public function render(){
        $extres= Extre::where('name','LIKE','%'. $this->search .'%')
        ->paginate(10);

        return view('livewire.admin.activity-extra',compact('extres'));
    }
    public function updatingSearch(){
        $this->resetPage();
    }
}
