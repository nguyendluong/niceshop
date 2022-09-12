<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Stringable;

class NewsController extends Controller
{
    public function index()
    {

        $news = News::all();

        return view('admin.news.index', compact('news'));   
    }
   
    public function create()
    {
        $news = News::all();

        return view('admin.news.create', compact('news'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        $checkNews = News::where('slug', '=', $data['slug'] )->get();
        if (count($checkNews) > 0) {
            toastr()->error('Duplicate title! Please reinput news');
            return redirect('admin/news/create');
        } else {
            News::create($data);
            toastr()->success('create new news successfully');
            return redirect('admin/news');
        }
    }
    
    public function show(News $news)
    {
        //
    }

   
    public function edit($id)
    {
        $news = News::findOrFail($id);

        return view('admin.news.edit', compact('news'));
    }

    
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $data = $request->all();
        $news ->update($data);
        toastr()->success('Update news successfully!');
        return redirect('admin/news');

    }

   
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        if ($news['status'] === 1) {
            toastr()->warning('Delete news fail!');
        } else {
            $news->delete();
            toastr()->success('Delete news successfully!');
        }

        return redirect('admin/news');
    }
}