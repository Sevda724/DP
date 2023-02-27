<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userRequest extends Model
{
    use HasFactory;

    public $fillable = [
        'filmTitle','userName', 'userEmail', 'userSubject' ,'userMessage'
    ];
}