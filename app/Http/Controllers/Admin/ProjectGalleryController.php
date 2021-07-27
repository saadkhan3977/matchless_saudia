<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectGallery;
use File;

class ProjectGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = ProjectGallery::get();
        return view('admin.gallery.index')
        ->with(compact('gallerys'));
    }

    public function get()
    {
        $gallerys = ProjectGallery::orderBy('id','DESC')->get();
        return json_encode(array('data'=>$gallerys));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // print_r();die;
        $gallerys = ProjectGallery::where('project_id',$id)->get();
        return view('admin.project-gallery.add')
        ->with(compact('gallerys','id'));
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
        // if($request->hasFile('file')) 
        // {
        //     $vfiles = $request->file('file');
        //     $vdestinationPath = 'uploads/gallery'; // upload path
        //     $imageName = date('YmdHis') . "." . $vfiles->getClientOriginalExtension();
        //     $vfiles->move($vdestinationPath, $imageName);
        // }

        // $data = [
        //     'project_id' => $id,
        //     'image' => $imageName,
        // ];
        // ProjectGallery::create($data);

        $imagepath = 'uploads/gallery'; // upload path

        $image = $request->file('file');
        $avatarName = date('His') . "." . rand(10000000000,1000000000) . $image->getClientOriginalExtension();
        $image->move($imagepath,$avatarName);
         
        $imageUpload = new ProjectGallery();
        $imageUpload->project_id = $id;
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
        $gallerys = ProjectGallery::get();
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
        $gallery = ProjectGallery::find($id);
        $file = 'uploads/gallery/'.$gallery->image; 
        File::delete($file);
        $gallery->delete();

    }
}
