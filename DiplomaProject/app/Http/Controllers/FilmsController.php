<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
<<<<<<< HEAD
=======
use App\Models\Film;
>>>>>>> e449bbc49d0ae6fb9b8e3466787a4afd4148728f
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    public function add()
    {
        return view('insertData');
    }

<<<<<<< HEAD
    public function insert(Request $request)
    {
        $films = new Catalog();
        $films->Title = $request->input('title');
        $films->Category = $request->input('category');
        $films->Description = $request->input('description');
        $films->Photo = $request->input('photo');
        $films->Text= "some text";
        $films->Year = "1990";
        $films->Director = "some director";
        $films->Trailer = 'some link';
        $films->Awards = 'some awards';
        //$films->id = 1000;



        $films->save();
        return redirect('/')->with('status',' Inserted Succesfully');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
=======
>>>>>>> e449bbc49d0ae6fb9b8e3466787a4afd4148728f
    public function create()
    {
        //
    }
}
