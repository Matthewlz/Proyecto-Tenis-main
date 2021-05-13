<?php

namespace App\Http\Livewire\Admin;


use App\Models\Galeria;
use Livewire\Component;
use Livewire\WithPagination;

class GalleryIndex extends Component{

    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch(){
        $this->resetPage();
    }
    public function render(){
        $galerias= Galeria::where('title','LIKE','%'. $this->search .'%')
        ->orwhere('description','LIKE','%'. $this->search .'%')
        ->paginate(10);
        return view('livewire.admin.gallery-index',compact('galerias'));
    }
}
