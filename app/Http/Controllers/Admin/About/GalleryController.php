<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutGalleryHeading;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AboutGalleryHeading::get();
        
        return view('admin.about.gallery.index')
        ->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $en = AboutGalleryHeading::where('lang','en')->first();
        $ar = AboutGalleryHeading::where('lang','ar')->first();

        return view('admin.about.gallery.add')
        ->with(compact('en','ar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AboutGalleryHeading::create($request->all());
        return redirect()->to('/admin/about/about_sec_seven');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = AboutGalleryHeading::find($id);

        return view('admin.about.gallery.edit')
        ->with(compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = AboutGalleryHeading::find($id);
        $project->update($request->all());
        return redirect()->to('/admin/about/about_sec_seven');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = AboutGalleryHeading::find($id);
        $project->delete();
        return redirect()->to('/admin/about/about_sec_seven');
    }
}
