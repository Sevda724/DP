<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class Catalog extends Model
{

	use HasFactory;
    use Filterable;
    protected $guarded = false;
    public $timestamps = false;

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

    public function findOrFail($id)
    {
        $result = $this->find($id);
        if (!$result) {
            throw new ModelNotFoundException();
        }
        return $result;
    }

}

