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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders = Sliders::all();
        return view('admin.sliders.create', compact('sliders'));   

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Sliders::create($data);
        toastr()->success('Create sliders successfully');
        return redirect('admin/sliders');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function show(sliders $sliders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function edit(sliders $sliders)
    {
        //
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
