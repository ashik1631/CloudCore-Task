<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class task extends Model
{
    use HasFactory;
     //single line code
    /*protected $gaurd = [];*/
    protected $fillable = [
        'title',
        'link',
        'status',
        'image'
    ];
}
