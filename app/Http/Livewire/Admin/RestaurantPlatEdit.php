<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\PlatoMenu;
use Illuminate\Support\Facades\DB;


class RestaurantPlatEdit extends Component
{
    use WithFileUploads;
    public $plat;
    public $menus;

    public $photo;
    public $title;
    public $description;
    public $menu_id;   
    public $Id;
    public $preu;
    public function render()
    {
        $Menus = DB::select('select * from menus');
        return view('livewire.admin.restaurant-plat-edit',compact('Menus'));
    }
    public function mount($plat,$menus){
        
      $this->plat=$plat;
      $this->menus=$menus;
      $this->title=$plat->title;
      $this->description=$plat->description;
      $this->preu=$plat->preu;
      $this->menu_id=$plat->menu_id;
      $this->Id=$plat->id;
     
        

        
    }
    public function edit(){
        
        if($this->photo){
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'image|max:2000',
            'preu'=>'required',
            'menu_id' => 'required|integer',
        ]);
        }else{
            $this->validate([
                'title' => 'required',
                'description' => 'required',
                'preu'=>'required',
                'menu_id' => 'required|integer',
            ]);
        }
      
    
      $plat=PlatoMenu::find($this->Id);
      $plat->title=$this->title;
      $plat->description=$this->description;
      $plat->preu=$this->preu;
      $plat->menu_id=$this->menu_id;
      if($this->photo){
      $plat->image_path=$this->photo->hashName();
      $this->photo->store('plat','public');
      }
      $plat->save();
      return redirect('/admin/plats/'.$this->Id.'/edit');
    
  }
}
