<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all()->sortByDesc('id');

        return view('admin.supplier.index', compact('suppliers'));
    }

   
    public function create()
    {
        return view('admin.supplier.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $supplier = Supplier::where('phone',  $data['phone'])->first();
        if ( $supplier) {
            toastr()->error('Create new supplier fail! This phone number already exists!');
            return redirect('admin/supplier/create');
        } else {
            Supplier::create($data);
            toastr()->success('Create new supplier successfully');
            return redirect('admin/supplier');
        }
    }

    public function show(Supplier $supplier)
    {
        // TODO
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);

        return view('admin.supplier.edit', compact(['supplier']));
    }


    public function update(Request $request, $id)
    {
        $supplier = Supplier::findOrFail($id);
        $data = $request->all();
        $checkSupplier = Supplier::where('phone',  $data['phone'])->first();
        if ($checkSupplier) {
            toastr()->error('Update supplier fail! This phone number already exists!');
            return view('admin.supplier.edit', compact(['supplier']));
        } else {
            $supplier->update($data);
            toastr()->success('Update supplier successfully!');
            
            return redirect('admin/supplier');
        }
    }

    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        
        // Cannot remove supplier if this supplier have at least one product
        $supplier->delete();
        toastr()->success('Delete supplier successfully!');

        return redirect('admin/supplier');
    }
}