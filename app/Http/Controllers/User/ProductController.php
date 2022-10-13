<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Store;
use App\Models\Size;


class ProductController extends Controller
{
    public function list($cat_slug)
    {
        $category = Category::where('slug', $cat_slug)->first();

        $products = Product::where('status', 1)->where('categoryId', $category['id'])->get();
        foreach ($products as $prod) {
            $prod['avatar'] = self::getAvatar($prod->id);
            $prod['category'] = self::getCategoryDetail($prod->categoryId);
        }

        return view('client.product.index', compact('products'));
    }

    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $product['galleries'] = self::getAvatar($product->id);
        $product['category'] = self::getCategoryDetail($product->categoryId);
        $product['sizes'] = self::getSizes($product->id);

        return view('client.product-detail.index', compact('product'));
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

    public static function getSizeDetail($id)
    {
        $size = Size::where('id', $id)->first();
        return $size;
    }
    
    public static function getSizes($productId)
    {
        $sizes = Store::where('productId', $productId)->get();
        foreach ($sizes as $size) {
            $size['size_name'] = self::getSizeDetail($size->sizeId);
        }
        return $sizes;
    }
}