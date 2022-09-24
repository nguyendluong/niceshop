<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all()->sortByDesc('id');

        return view('admin.category.index', compact('categories'));
    }

   
    public function create()
    {
        $categories = Category::where('category_id', 0)->get();

        return view('admin.category.create', compact('categories'));
    }

    public function store(Request $request)
    {
            $data = $request->all();
            $data['slug'] = Str::slug($data['name']);
            Category::create($data);
            toastr()->success('Create category successfully');

            return redirect('admin/category');
    }

    public function show(Category $category)
    {
        // TODO
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::where('category_id', 0)->get();

        return view('admin.category.edit', compact(['category', 'categories']));
    }


    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->all();
        $data['slug'] = Str::slug($data['name']);;
        $category->update($data);
        toastr()->success('Update category successfully!');
        
        return redirect('admin/category');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $categoriesChild = Category::where('category_id', $id)->get();
        if ($category['status'] === 1 || count($categoriesChild) > 0) {
            toastr()->warning('Delete category fail!');
        } else {
            $category->delete();
            toastr()->success('Delete category successfully!');
        }

        return redirect('admin/category');
    }

    public static function getCategoryName($category_id)
    {   
        if ($category_id != 0) {
            $category = Category::findOrFail($category_id);
            return $category['name'];
        }
        
        return '---';
    }
}