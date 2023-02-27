<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\Post\FilterRequest;
use App\Models\Catalog;

class CatalogController extends Controller
{
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
