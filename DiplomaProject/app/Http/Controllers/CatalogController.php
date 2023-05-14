<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Http\Filters\CatalogFilter;
use App\Http\Requests\Catalog\FilterRequest;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    //This method is essential for inserting movies into the catalog (located in the project's admin section).
    public function insert(Request $request)
    {
         $inputs = $request->validate([
            'category' => 'required', 'title' => 'required', 'description'=> 'required', 'text'=> 'required', 'photo'=> 'required', 'year'=> 'required', 'director'=> 'required', 'trailer', 'awards',
            'title_ru'=> 'required', 'text_ru'=> 'required', 'director_ru'=> 'required', 'awards_ru'
        ]);

        if (Catalog::where('title', $request->input('title'))->exists()) {
            return redirect()->back()->with('status_error', __('local.This title already exists!'))->withInput();
        }

        $catalog = new Catalog;
        $catalog->fill($request->all());
        $catalog->save();

        return redirect()->back()->with('status_success', __('local.Inserted Successfully'));
    }


    //This method is essential for updating movies in the catalog (located in the project's admin section).
    public function update(Request $request, $id)
    {
        $inputs = $request->validate([
            'category' => 'required', 'title' => 'required', 'description'=> 'required', 'text'=> 'required', 'photo'=> 'required', 'year'=> 'required', 'director'=> 'required', 'trailer', 'awards',
            'title_ru'=> 'required', 'text_ru'=> 'required', 'director_ru'=> 'required', 'awards_ru'
        ]);




        $catalogs = Catalog::find($id);
        $catalogs->fill($inputs);
        $catalogs->save();

        return redirect()->route('filmsList')->with('status', __('local.Updated Successfully'));
    }
    
    /*This method is essential for displaying and  for performing sorting, 
    searching, and filtering operations on the online catalog of films.*/
    public function catalogData(FilterRequest $request)
    {
            $query = Catalog::query();
    $data = $request->validated();
    $selectedSortOrder = 'desc';
    $searchValue = '';
    $selectedCategories = [];
    
    //This code segment is crucial for searching movies on the online catalog of films.
    if ($request->filled('search')) {
        $searchValue = $request->input('search');
        $query->where(function($query) use ($searchValue) {
            $query->where('Title','like', "%{$searchValue}%")
                ->orWhere('Title_ru','like', "%{$searchValue}%")
                ->orWhere('Director_ru','like', "%{$searchValue}%")
                ->orWhere('Director','like', "%{$searchValue}%");
        });
    }
    
    //This code segment is crucial for sorting movies on the online catalog of films.
    if ($request->filled('genre')) {
    $selectedCategories = $request->input('genre');
    $query->where(function ($query) use ($selectedCategories) {
        foreach ($selectedCategories as $category) {
            $query->orWhere('Category', 'LIKE', '%' . $category . '%');
        }
    });
}

    if ($request->filled('sort')) {
        $selectedSortOrder = $request->input('sort');
    }
        
    //This code segment is essential for sorting the catalog in English localization.
    if(app()->getLocale() == 'en'){
        switch ($selectedSortOrder) {
        case 'newest':
            $query->orderBy('Year', 'desc');
            break;
        case 'oldest':
            $query->orderBy('Year', 'asc');
            break;
        case 'a-z':
            $query->orderBy('Title', 'asc');
            break;
        case 'z-a':
            $query->orderBy('Title', 'desc');
            break;
        default:
            $query->orderBy('Year', 'desc');
            break;
    }
    }

    //This code segment is essential for sorting the catalog in Russian localization.
    if(app()->getLocale() == 'ru'){
        switch ($selectedSortOrder) {
        case 'newest':
            $query->orderBy('Year', 'desc');
            break;
        case 'oldest':
            $query->orderBy('Year', 'asc');
            break;
        case 'a-z':
            $query->orderBy('Title_ru', 'asc');
            break;
        case 'z-a':
            $query->orderBy('Title_ru', 'desc');
            break;
        default:
            $query->orderBy('Year', 'desc');
            break;
    }
    }
        
    //This code segment is essential for implementing  pagination (20 films per page).
    $filmsData = $query->paginate(20)->withQueryString();

    return view('catalog', compact('selectedCategories','selectedSortOrder','searchValue','filmsData'));
    }

    //This method is crucial for displaying the selected movie's information. 
    public function show($id){
        return view('moviepage', ['filmInfo' => Catalog::find($id)]);
    }

    //This method is essential for displaying online catalog of films in the project's admin section.
    public function index(Request $request)
    {
        $catalogs = Catalog::query();
        
        //sorting by column
        $sortOptions = [
            'id' => 'ID',
            'category' => 'Category',
            'title' => 'Title',
            'year' => 'Year',
        ];

        $sortColumn = 'id';
        $sortDirection = 'asc';

        if ($request->has('sort')) {
            $sort = explode('|', $request->sort);
            $sortColumn = $sort[0];
            $sortDirection = $sort[1];
        }
        $catalogs->orderBy($sortColumn, $sortDirection);

        $catalogs = $catalogs->paginate(18);
        return view('updateFilm', compact('catalogs', 'sortOptions', 'sortColumn', 'sortDirection'));
    }

    //his method is essential for updating movies in the catalog in the project's admin section.
    public function edit($id)
    {
        $catalog = (new Catalog())->findOrFail($id);
        return view('editFilm', compact('catalog'));
    }

    //his method is essential for deleting movies in the catalog in the project's admin section.
    public function destroy($id)
    {
        $catalog = (new Catalog())->findOrFail($id);
        $catalog->delete();
        return redirect()->back()->with('status', __('local.Deleted Successfully'));
    }
    
    //This method is essential for searching movies in the catalog in the project's admin section.
    public function searchFilm(Request $request)
    {
        $search = $request->input('search');
        $sortColumn = $request->input('sortColumn', 'id');
        $sortDirection = $request->input('sortDirection', 'asc');

        $query = Catalog::query();

        if ($search) {
            $query->where('id', 'like', '%'.$search.'%')
                ->orWhere('title', 'like', '%'.$search.'%')
                ->orWhere('category', 'like', '%'.$search.'%')
                ->orWhere('year', 'like', '%'.$search.'%');
        }

        $catalogs = $query->orderBy($sortColumn, $sortDirection)->paginate(10);

        return view('updateFilm', compact('catalogs', 'sortColumn', 'sortDirection'));
    }
}
