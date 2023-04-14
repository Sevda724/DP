<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Http\Filters\CatalogFilter;
use App\Http\Requests\Catalog\FilterRequest;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function insert(Request $request)
    {
         $inputs = $request->validate([
            'category' => 'required', 'title' => 'required', 'description'=> 'required', 'text'=> 'required', 'photo'=> 'required', 'year'=> 'required', 'director'=> 'required', 'trailer', 'awards',
            'title_ru'=> 'required', 'text_ru'=> 'required', 'director_ru'=> 'required', 'awards_ru'
        ]);

        if (Catalog::where('title', $request->input('title'))->exists()) {
            return redirect()->back()->with('status_error', 'This title already exists!')->withInput();
        }

        $catalog = new Catalog;
        $catalog->fill($request->all());
        $catalog->save();

        return redirect()->back()->with('status_success', 'Inserted Successfully');
    }



    public function update(Request $request, $id)
    {
        $inputs = $request->validate([
            'category' => 'required', 'title' => 'required', 'description'=> 'required', 'text'=> 'required', 'photo'=> 'required', 'year'=> 'required', 'director'=> 'required', 'trailer', 'awards',
            'title_ru'=> 'required', 'text_ru'=> 'required', 'director_ru'=> 'required', 'awards_ru'
        ]);




        $catalogs = Catalog::find($id);
        $catalogs->fill($inputs);
        $catalogs->save();

        return redirect()->route('filmsList')->with('status', 'Updated Successfully');
    }
    public function catalogData(FilterRequest $request)
    {
            $query = Catalog::query();
    $data = $request->validated();
    $selectedSortOrder = 'desc';
    $searchValue = '';
    $selectedCategories = [];

    if ($request->filled('search')) {
        $searchValue = $request->input('search');
        $query->where(function($query) use ($searchValue) {
            $query->where('Title','like', "%{$searchValue}%")
                ->orWhere('Title_ru','like', "%{$searchValue}%")
                ->orWhere('Director_ru','like', "%{$searchValue}%")
                ->orWhere('Director','like', "%{$searchValue}%");
        });
    }

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

    $filmsData = $query->paginate(20)->withQueryString();

    return view('catalog', compact('selectedCategories','selectedSortOrder','searchValue','filmsData'));

       /* $query = Catalog::query();
        $data = $request -> validated();
        $selectedSortOrder = 'desc';
        $searchValue = '';
        if($request->filled('search')) {
        $searchValue = $request->input('search');
        $query->where('Title','like', "%{$request->input('search')}%")->orWhere('Title_ru','like', "%{$request->input('search')}%")
        ->orWhere('Director_ru','like', "%{$request->input('search')}%")->orWhere('Director','like', "%{$request->input('search')}%");
        }
        $selectedCategory = $request->input('filter');
        $query->where('Category','like', "%{$request->input('filter')}%");
        if($request->filled('sort')){
            $selectedSortOrder =  $request->input('sort');
        }
            $query -> orderBy('Year',  $selectedSortOrder);

        $filmsData = $query->paginate(20)->withQueryString();

        return view('catalog', compact('selectedCategory','selectedSortOrder','searchValue','filmsData'));*/
    }


    public function show($id){
        return view('moviepage', ['filmInfo' => Catalog::find($id)]);
    }


    public function index(Request $request)
    {
        $catalogs = Catalog::query();

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


    public function edit($id)
    {
        $catalog = (new Catalog())->findOrFail($id);
        return view('editFilm', compact('catalog'));
    }

    public function destroy($id)
    {
        $catalog = (new Catalog())->findOrFail($id);
        $catalog->delete();
        return redirect()->back()->with('status', 'Deleted Successfully');
    }

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
