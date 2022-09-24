<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\sliders;
use Illuminate\Http\Request;


class SlidersController extends Controller
{
    public function index()
    {
        $sliders = Sliders::all()->sortByDesc('id');
        return view('admin.sliders.index', compact('sliders'));   

    }

    public function create()
    {
        return view('admin.sliders.create');   
    }

    public function store(Request $request)
    {
        $data = $request->all();

        // $validatedData = $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);

        $filenamewithextension = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $filenametostore = $filename.'_'.time().'.'.$extension;
        $imageName = str_replace(' ', '_', $filenametostore);
        $request->file('image')->storeAs('public/sliders', $imageName);

        $data['path'] = '/sliders/'.$imageName;

        Sliders::create($data);
        toastr()->success('Create sliders successfully');
        return redirect('admin/slider');


    }

    public function show(sliders $sliders)
    {
        //
    }

    public function edit($id)
    {
        $slider = Sliders::findOrFail($id);

        return view('admin.sliders.edit', compact('slider'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sliders $sliders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function destroy(sliders $sliders)
    {
        //
    }
    public function fileStore(Request $request)
    {
        $image = $request->file('file');
        $name = $image->getClientOriginalName();
        $request->file('file')->storeAs('public/sliders', $name);

        $imageUpload = new sliders();
        $imageUpload->name = $name;
        $imageUpload->path = $name;
        $imageUpload->save();
    }
}