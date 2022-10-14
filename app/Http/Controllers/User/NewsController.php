<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function detail($slug)
    {
        $new = News::where('slug', $slug)->first();
        return view('client.news-detail.index', compact('new'));
    }
}