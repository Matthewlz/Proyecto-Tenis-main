<?php

namespace App\Http\Livewire\Admin;

use App\Models\PlatoMenu;
use Livewire\Component;
use Livewire\WithPagination;

class RestaurantPlat extends Component
{
use WithPagination;
public $search;
protected $paginationTheme = 'bootstrap';

public function updatingSearch(){
    $this->resetPage();
}
public function render()
{
    $plats= PlatoMenu::where('title','LIKE','%'. $this->search .'%')
        ->orwhere('preu','LIKE','%'. $this->search .'%')
        ->orwhere('name','LIKE','%'. $this->search .'%')
        ->join('menus', 'menus.id','=', 'plato_menus.menu_id')
        ->paginate(10, array('plato_menus.id as platId','preu as preu','name as name','title as title' ,'description as description'));

    return view('livewire.admin.restaurant-plat',compact('plats'));
}
}
