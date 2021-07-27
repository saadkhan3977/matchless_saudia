<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = Gallery::get();
        return view('admin.gallery.add')
        ->with(compact('gallerys'));
    }

    public function get()
    {
        $gallerys = Gallery::orderBy('id','DESC')->get();
        return json_encode(array('data'=>$gallerys));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallerys = Gallery::get();
        return view('admin.gallery.add')
        ->with(compact('gallerys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagepath = 'uploads/gallery'; // upload path

        $image = $request->file('file');
        $avatarName = date('His') . "." . rand(10000000000,1000000000) . $image->getClientOriginalExtension();
        // $avatarName = $image->getClientOriginalName();
        $image->move($imagepath,$avatarName);
         
        $imageUpload = new Gallery();
        $imageUpload->image = $avatarName;
        $imageUpload->save();
        return response()->json(['success'=>$avatarName]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallerys = Gallery::orderBy('id','DESC')->get();
        return json_encode(array('data'=>$gallerys));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $file = 'uploads/gallery/'.$gallery->image; 
        File::delete($file);
        $gallery->delete();

    }
}
