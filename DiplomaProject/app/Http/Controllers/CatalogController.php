<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Http\Requests\Post\FilterRequest;
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

    public function update(Request $request, $id)
    {
        $catalogs = Catalog::find($id);

        $catalogs->category = $request->input('category');
        $catalogs->title = $request->input('title');
        $catalogs->description = $request->input('description');
        $catalogs->text = $request->input('text');
        $catalogs->photo = $request->input('photo');
        $catalogs->year = $request->input('year');
        $catalogs->director = $request->input('director');
        $catalogs->trailer = $request->input('trailer');
        $catalogs->awards = $request->input('awards');
        $catalogs->save();

        return redirect()->back()->with('status','Updated Successfully');
    }
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
    public function index()
    {
        // Получаем все фильмы из БД
        $catalogs = Catalog::all();

        // Отображаем страницу с фильмами
        return view('updateData', compact('catalogs'));
    }

    public function edit($id)
    {
        // Получаем данные фильма из БД
        $catalog = (new Catalog())->findOrFail($id);

        // Отображаем страницу для редактирования фильма
        return view('edit', compact('catalog'));
    }

    public function destroy($id)
    {
        $catalog = (new Catalog())->findOrFail($id);
        $catalog->delete();
        return redirect()->back()->with('status', 'Deleted Successfully');
    }
}
