<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Size;
use App\Models\Store;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::join('categories', 'products.categoryId', '=', 'categories.id')
            ->join('suppliers', 'products.supplierId', '=', 'suppliers.id')
            ->select('products.*', 'categories.name as category_name', 'suppliers.name as supplier_name')
            ->get();

        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::where('status', 1)->get();
        $suppliers = Supplier::all();
        $sizes = Size::all();
        // Gallery::where('product_id', 0)->delete();
        Gallery::where('product_id', 0)->update(['product_id' => -1]);

        return view('admin.product.create', compact(['categories', 'suppliers', 'sizes']));
    }

    public function fileStore(Request $request)
    {
        $image = $request->file('file');
        $name = $image->getClientOriginalName();
        $request->file('file')->storeAs('public/products', $name);

        $imageUpload = new Gallery();
        $imageUpload->name = $name;
        $imageUpload->path = $name;
        $imageUpload->product_id = 0;
        $imageUpload->save();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name']);
        $id = Product::create($data)->id;

        Gallery::where('product_id', 0)->update(['product_id' => $id]);

        $date = Carbon::now();
        for ($i=0; $i < count( $data['quantity']) ; $i++) { 
            $productStore;
            $productStore['productId'] = $id;
            $productStore['sizeId'] = $i + 1;
            $productStore['quantity'] = $data['quantity'][$i] || 0;
            $productStore['date'] = $date;
            Store::create($productStore);
        }
        
        
        toastr()->success('Create product successfully');

        return redirect('admin/product');
    }

    public function show(Product $product)
    {
        //
    }

    public function fileUpdate(Request $request, $id)
    {
        $image = $request->file('file');
        $name = $image->getClientOriginalName();
        $request->file('file')->storeAs('public/products', $name);

        $imageUpload = new Gallery();
        $imageUpload->name = $name;
        $imageUpload->path = $name;
        $imageUpload->product_id = $id;
        $imageUpload->save();
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::where('status', 1)->get();
        $suppliers = Supplier::all();
        $sizes = Store::where('productId', $id)->join('sizes', 'stores.sizeId', '=', 'sizes.id')
        ->select('stores.*', 'sizes.name as size_name')
        ->get();
        
        $images = Gallery::where('product_id', $id)->get();

        return view('admin.product.edit', compact(['product','categories', 'suppliers', 'sizes', 'images']));
    }
    
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $data = $request->all();
        $data['slug'] = Str::slug($data['name']);

        $stores = Store::where('productId', $id)->get();
        
        $date = Carbon::now();
        for ($i=0; $i < count($stores); $i++) { 
            $size = Store::findOrFail($stores[$i]['id']);
            $size['quantity'] = $data['quantity'][$i] || 0;
            $productStore['date'] = $date;
            $size->update();
        }

        $product ->update($data);
        toastr()->success('Update product successfully!');
        return redirect('admin/product');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product) {
            Gallery::where('product_id', $product['id'])->delete();
            Store::where('productId', $product['id'])->delete();
            $product->delete();
            toastr()->success('Delete product successfully!');

        } else {
            toastr()->error('Delete product fail!');
        }

        return redirect('admin/product');
    }

    public function destroyImage(Request $request)
    {
        $filename =  $request->get('filename');
        Gallery::where('path',$filename)->delete();
        
        $path=storage_path('app/public/products/'.$filename);
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;  
    }
}