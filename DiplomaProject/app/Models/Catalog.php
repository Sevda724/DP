<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
//    use Filterable;
    protected $guarded = false;
    public $timestamps = false;

    protected $fillable = [
        'title',
        'category',
        'description',
        'photo',
        'text',
        'year',
        'director',
        'trailer',
        'awards',
    ];

}
