<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class Catalog extends Model
{

    use HasFactory;
    protected $guarded = false;
    public $timestamps = false;

    protected $fillable = [
        'category',
        'title',
        'description',
        'text',
        'photo',
        'year',
        'director',
        'trailer',
        'awards',
        'title_ru',
        'text_ru',
        'director_ru',
        'awards_ru'
    ];

    public function findOrFail($id)
    {
        $result = $this->find($id);
        if (!$result) {
            throw new ModelNotFoundException();
        }
        return $result;
    }

}
