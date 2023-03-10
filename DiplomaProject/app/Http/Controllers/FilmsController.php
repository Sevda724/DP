<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    public function add()
    {
        return view('insertData');
    }

    public function create()
    {
        //
    }
}
