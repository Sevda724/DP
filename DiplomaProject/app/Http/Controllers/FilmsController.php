<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    public function add()
    {
        return view('insertData');
    }

    public function insert(Request $request)
    {
        $films = new Film();
        $films->title = $request->input('title');
        $films->category = $request->input('category');
        $films->description = $request->input('description');
        $films->photo = $request->input('photo');
        $films->save();
        return redirect('/')->with('status',' Inserted Succesfully');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Films  $films
     * @return \Illuminate\Http\Response
     */
    public function show(Films $films)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Films  $films
     * @return \Illuminate\Http\Response
     */
    public function edit(Films $films)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Films  $films
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Films $films)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Films  $films
     * @return \Illuminate\Http\Response
     */
    public function destroy(Films $films)
    {
        //
    }
}
