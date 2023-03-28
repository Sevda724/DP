<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = false;
    public $timestamps = false;

   protected $fillable = ['title_en', 'description_en', 'title_ru', 'description_ru', 'photo1', 'photo2', 'photo3'];

}
