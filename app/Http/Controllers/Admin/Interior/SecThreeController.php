<?php

namespace App\Http\Controllers\Admin\Interior;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InteriorSecThree;
use File;

class SecThreeController extends Controller
{
    public function index()
    {
        $data = InteriorSecThree::get();
        
        return view('admin.service.interior.sec_three.index')
        ->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $en = InteriorSecThree::where('lang','en')->get();
        $ar = InteriorSecThree::where('lang','ar')->get();

        return view('admin.service.interior.sec_three.add')
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
        $fileName = null;
        if($request->hasFile('image')) 
        {
            $files = $request->file('image');
            $destinationPath = 'uploads/interior'; // upload path
            $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $fileName);
        }
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => $fileName,
            'lang' => $request->lang,
        ];

        InteriorSecThree::create($data);
        return redirect()->to('/admin/interior_sec_three');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = InteriorSecThree::find($id);

        return view('admin.service.interior.sec_three.edit')
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
        $homvideo = InteriorSecThree::find($id);
        $currentImage = $homvideo->image;
        $fileName = null;
        if($request->hasFile('image')) 
        {
            File::delete('/uploads/interior/'.$currentImage);
            $files = $request->file('image');
            $destinationPath = 'uploads/interior'; // upload path
            $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $fileName);
        }
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => ($fileName) ? $fileName : $currentImage ,
            'lang' => $request->lang,
        ];

        $homvideo->update($data);
        return redirect()->to('/admin/interior_sec_three');
        // return redirect()->to('/admin/home/hospitality_consultancy/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = InteriorSecThree::find($id);
        File::delete('/uploads/interior/'.$project->image);
        $project->delete();
        return redirect()->back();
    }

}
