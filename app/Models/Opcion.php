<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{

    use HasFactory;
    
    protected $fillable = [
        'name', 'preu', 'preu_soci',
    ];
    public function apartats(){
    return $this->hasMany(Apartat::class,'opcio_id','id');
    }
}

