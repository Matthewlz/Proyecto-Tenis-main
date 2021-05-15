<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitatsOpcion extends Model
{
    use HasFactory;
    protected $fillable = [
        'activitat_id', 'opcio_id',
    ];
}
