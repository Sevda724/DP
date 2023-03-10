<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
<<<<<<< HEAD
	use HasFactory;
    use Filterable;
    protected $guarded = false;

    protected $fillable = [
        'Title',
        'Category',
        'Description',
        'Photo',
        'Text',
        'Year',
        'Director',
        'Trailer',
        'Awards',
    ];

}
=======
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
>>>>>>> e449bbc49d0ae6fb9b8e3466787a4afd4148728f
