<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

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
        return view('admin.gallery.index')
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
    public function store($id,Request $request)
    {
        // dd($request->file);
        if($request->hasFile('file')) 
        {
            $vfiles = $request->file('file');
            $vdestinationPath = 'uploads/gallery'; // upload path
            $imageName = date('YmdHis') . "." . $vfiles->getClientOriginalExtension();
            $vfiles->move($vdestinationPath, $imageName);
        }

        $data = [
            'project_id' => $id,
            'image' => $imageName,
        ];
        Gallery::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallerys = Gallery::get();
        return view('admin.gallery.add')->with(compact('id','gallerys'));
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
        $file = '/uploads/gallery/'.$gallery->image; 
        $gallery->delete();
        File::delete($file);

    }
}
