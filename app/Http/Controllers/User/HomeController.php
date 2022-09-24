<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 0)->get();
        return view('client.homepages.index', compact('products'));
        
    }
}