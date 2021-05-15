<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extre extends Model
{
    protected $fillable = [
        'name', 'description', 'preu',
    ];
    use HasFactory;

    public function activitats()
    {
        return $this->belongsToMany(Activitat::class);
    }
}

