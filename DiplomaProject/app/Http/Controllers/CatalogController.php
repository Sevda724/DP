<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Catalog;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function insert(Request $request)
    {

        $category = $request->input('category');
        $title = $request->input('title');
        $description = $request->input('description');
        $text = $request->input('text');
        $photo = $request->input('photo');
        $year = $request->input('year');
        $director = $request->input('director');
        $trailer = $request->input('trailer');
        $awards = $request->input('awards');


        // DB::table('catalogs')->insert([
        //     'Category' => $category,
        //     'Title' => $title,
        //     'Description' => $description,
        //     'Text' => $text,
        //     'Photo' => $photo,
        //     'Year' => $year,
        //     'Director' => $director,
        //     'Trailer' => $trailer,
        //     'Awards' => $awards,
        // ]);

        $catalogs = new Catalog;
        $catalogs->category = $category;
        $catalogs->title = $title;
        $catalogs->description = $description;
        $catalogs->text = $text;
        $catalogs->photo = $photo;
        $catalogs->year = $year;
        $catalogs->director = $director;
        $catalogs->trailer = $trailer;
        $catalogs->awards = $awards;
        $catalogs->save();

        return redirect()->back()->with('status',' Inserted Succesfully');
    }
    public function catalogData()
    {
    	//$data = $request -> validated();
    	//dd($data);

    	//$filmsData = Film::where('Category',$filmsData['Category'])->get();

    	//$query = Film::query();
    	//if(isset($filmsData['Category'])){
    	/*	$query->where('Category', $filmsData['Category']);
    	}
    	$filmsData = $query->get();
    	dd($filmsData);*/

    	return view('catalog', ['filmsData' => Catalog::paginate(20)]);
    }

    public function showPopUp($id){
        //$filmFromCatalog = Catalog::find($id);

        //return response()->json($filmFromCatalog);



    	//$catalog = new Catalog();
        return view('moviepage', ['filmInfo' => Catalog::find($id)]);
    }
}
