<?php

namespace App\Http\Livewire\Admin;

use App\Models\Opcion;
use Livewire\Component;
use Livewire\WithPagination;

class ActivityApartat extends Component{
    use WithPagination;

    public $search;
    protected $paginationTheme = 'bootstrap';
    public $opcions;
    public $identificador;
   
    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function mount($identificador){
        $this->identificador=$identificador;
    }
    public function render(){
       
       
        $opcionss=Opcion::where('id',$this->identificador)->first()->apartats()->where('name','LIKE','%'. $this->search .'%')->paginate(10);
     
        $identificador=$this->identificador;
  
        return view('livewire.admin.activity-apartat',compact('opcionss','identificador'));
    }
}
