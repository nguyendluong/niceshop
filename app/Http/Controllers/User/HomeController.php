<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\sliders;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = sliders::where('status', 1)->get();
        $categories = Category::where('status', 1)->where('category_id', 0)->get();
        $all_product = Product::where('status', 1)->get();
        $news = News::where('status', 1)->get();

        foreach ($all_product as $prod) {
            $prod['avatar'] = self::getAvatar($prod->id);
            $prod['category'] = self::getCategoryDetail($prod->categoryId);
        }

        foreach ($categories as $cat) {
            $cat['products'] = self::getProductsOfCategory($cat->id);
        }


        return view('client.homepages.index', compact(['all_product', 'sliders', 'categories', 'news']));
    }

    public static function getAvatar($product_id)
    {
        $galleries = Gallery::where('product_id', $product_id)->get();
        return $galleries;
    }

    public static function getCategoryDetail($categoryId)
    {
        $category = Category::where('id', $categoryId)->first();
        return $category;
    }

    public static function getProductsOfCategory($id)
    {
        $products = Product::where('status', 1)->where('categoryId', $id)->get();
        foreach ($products as $prod) {
            $prod['avatar'] = self::getAvatar($prod->id);
            $prod['category'] = self::getCategoryDetail($prod->categoryId);
        }
        return $products;
    }
}