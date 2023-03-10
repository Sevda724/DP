<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\Post\FilterRequest;
use App\Models\Catalog;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Filters\CatalogFilter;

class CatalogController extends Controller
{
    public function catalogData(FilterRequest $request)
    {
        $query = Catalog::query();
        $data = $request -> validated();

        if($request->filled('search')) {
        $query->where('Title','like', "%{$request->input('search')}%");
        $filmsData = $query->paginate(20)->withQueryString();
        //return $filmsData;
        //dd($filmsData);
        return view('catalog', compact('filmsData'));
        }elseif(isset($data['Year'])){
            $query -> orderBy('Year', $data['Year']);
            $filmsData = $query->paginate(20)->withQueryString();
            return view('catalog', compact('filmsData'));
         } else {
        $data = $request -> validated();
        $filter = app()->make(CatalogFilter::class, ['queryParams' => array_filter($data)]);
        $filmsData = Catalog::filter($filter) -> paginate(20);
        return view('catalog', compact('filmsData'));
        }



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

    public function filter($filter)
    {
        //$filter = $request->input('filter');
        $query = Catalog::query();
        if ($filter) {
            $query -> where('Category', $filter) -> get();
            $filmsData = $query->paginate(20)->withQueryString();
            //dd($filmsData);
            return view('catalog', compact('filmsData'));
        } else {
            dd($filter);
            //return view('catalog', ['filmsData' => Catalog::paginate(20)]);
        }
  
    }

    public function show($id){
        return view('moviepage', ['filmInfo' => Catalog::find($id)]);
    }

    public function insert(Request $request)
    {
        $films = new Catalog();
        $films->Title = $request->input('title');
        $films->Category = $request->input('category');
        $films->Description = $request->input('description');
        $films->Photo = $request->input('photo');
        $films->Text= $request->input('text');
        $films->Year = $request->input('year');
        $films->Director = $request->input('director');
        $films->Trailer = $request->input('trailer');
        $films->Awards = $request->input('awards');
        //$films->id = 1000;



        $films->save();
        return redirect('/')->with('status',' Inserted Succesfully');
    }
}
