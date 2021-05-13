<?php

namespace App\Http\Livewire\Admin;

use App\Models\Menu;
use Livewire\Component;
use Livewire\WithPagination;

class RestaurantSeccio extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        $seccions= Menu::where('name','LIKE','%'. $this->search .'%')
        
        ->paginate(10);
        return view('livewire.admin.restaurant-seccio',compact('seccions'));
    }
}
