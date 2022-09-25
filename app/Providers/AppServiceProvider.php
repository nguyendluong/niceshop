<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use App\Models\News;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    
    public function boot(Request $request)
    {
        $routeName = request()->path(); 
        $categories = Category::where('status', 1)->where('category_id', 0)->with('subcategory')->get();
        $news = News::where('status', 1)->get();
        
        view()->share('routeName', $routeName);
        view()->share('categories', $categories);
        view()->share('news', $news);
    }
}