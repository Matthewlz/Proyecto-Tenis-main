<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;


class RestaurantPlatCreate extends Component
{
    use WithFileUploads;
    

    public $title;
    public $description;
    public $photo;
    public $menu_id;
    public $preu;
    public function render(){
        $menus= Menu::get();
        return view('livewire.admin.restaurant-plat-create',compact('menus'));
    }
    public function crear(){
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'image|max:2000',
            'preu'=>'required',
            'menu_id' => 'required|integer',
        ]);
        $this->photo->store('plat','public');
       
     
   $insert=  DB::table('plato_menus')->insert(['title'=>$this->title,
   'image_path'=>$this->photo->hashName(),
   'description'=>$this->description,
   'preu'=>$this->preu,
   'menu_id'=>$this->menu_id]);
   if($insert){
    return redirect('/admin/plats');
   }else{
        return back()->with('fail','Ha fallat al pujar la imatge');
   }

}
}
