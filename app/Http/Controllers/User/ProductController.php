<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function list($cat_slug)
    {
        $category = Category::where('slug', $cat_slug)->first();

        $products = Product::where('status', 1)->where('categoryId', $category['id'])->get();
        return view('client.product.index', compact('products'));
        
    }
}