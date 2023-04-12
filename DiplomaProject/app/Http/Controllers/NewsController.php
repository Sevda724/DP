<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;


class NewsController extends Controller
{
    
    public function newsInfo()
    {
        return view('index', ['newsInfo' => News::orderBy('id', 'desc')->take(3)->get()]);
    }

    public function show($id)
    {
        return view('news', ['newsInfo' => News::find($id)]);
    }

    public function showForEdit($id)
    {
        return view('updateNews', ['newsInfo' => News::find($id)]);
    }

    public function list()
    {
        $news = News::all();
        return view('newsList', ['news' => $news]);
    }

   public function update(Request $request, $id) {
    // Validate the request
    $validatedData = $request->validate([
        'title_en' => 'required',
        'description_en' => 'required',
        'title_ru' => 'required',
        'description_ru' => 'required',
        'photo1' => 'required',
    ]);

    // Update the news record
    $news = News::find($id);
    $news->Title_en = $request->input('title_en');
    $news->Description_en = $request->input('description_en');
    $news->Title_ru = $request->input('title_ru');
    $news->Description_ru = $request->input('description_ru');
    $news->Photo1 = $request->input('photo1');
    $news->Photo2 = $request->input('photo2');
    $news->Photo3 = $request->input('photo3');
    $news->save();

    return redirect()->route('news.list')->with('success', 'News record updated successfully!');
}


    public function delete($id)
    {

        $news = (new News())->findOrFail($id);
        $news->delete();

        return redirect()->route('news.list')->with('success', 'News deleted successfully!');
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
        'title_en' => 'required',
        'description_en' => 'required',
        'title_ru' => 'required',
        'description_ru' => 'required',
        'photo1' => 'required',
    ]);
        $news = new News;
        $news->title_en = $request->input('title_en');
        $news->description_en = $request->input('description_en');
        $news->title_ru = $request->input('title_ru');
        $news->description_ru = $request->input('description_ru');
        $news->photo1 = $request->input('photo1');
        $news->photo2 = $request->input('photo2');
        $news->photo3 = $request->input('photo3');
        $news->save();

        return redirect()->route('news.list')->with('success', 'News has been added successfully!');
    }   
}