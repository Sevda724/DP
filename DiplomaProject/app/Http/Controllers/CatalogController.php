<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Catalog;
use App\Http\Filters\CatalogFilter;


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
    
    public function catalogData(FilterRequest $request)
    {
        $query = Catalog::query();
        $data = $request -> validated();
        $selectedSortOrder = 'desc';
        $q = '';  
        if($request->filled('search')) {
        $q = $request->input('search');
        $query->where('Title','like', "%{$request->input('search')}%")->orWhere('Title_ru','like', "%{$request->input('search')}%");
        }
            $selectedCategory = $request->input('filter');
            $query->where('Category','like', "%{$request->input('filter')}%");
            if($request->filled('sort')){
               $selectedSortOrder =  $request->input('sort');
            }
            $query -> orderBy('Year',  $selectedSortOrder);

        $filmsData = $query->paginate(20)->withQueryString();
        return view('catalog', compact('selectedCategory','selectedSortOrder','q','filmsData'));
    }

    public function show($id){
        return view('moviepage', ['filmInfo' => Catalog::find($id)]);
    }
}
