<?php

namespace App\Http\Controllers\Admin\Interior;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InteriorSecOne;
use File;

class SecOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = InteriorSecOne::get();
        return view('admin.service.interior.sec_one.index')
        ->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $en = InteriorSecOne::where('lang','en')->first();
        $ar = InteriorSecOne::where('lang','ar')->first();

        return view('admin.service.interior.sec_one.add')
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
        $imageName = null;
        if($request->hasFile('image')) 
        {
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/interior'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'lang' => $request->lang,
            'description' => $request->description,
            'image' => $imageName,
        ];

        InteriorSecOne::create($data);
        return redirect()->to('/admin/interior_sec_one');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = InteriorSecOne::find($id);
        return view('admin.service.interior.sec_one.edit')
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
        $project = InteriorSecOne::find($id);
        $currentimage = $project->image;

        $imageName = null;
        if($request->hasFile('image')) 
        {
            $imagepath = 'uploads/interior/'. $project->image;
            File::delete($imagepath);
            
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/interior'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'lang' => $request->lang,
            'description' => $request->description,
            'image' => ($imageName) ? $imageName : $currentimage,

        ];

        $project->update($data);
        return redirect()->to('/admin/interior_sec_one');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = InteriorSecOne::find($id);

        File::delete('/uploads/interior/'.$project->image);
        $project->delete();
        return redirect()->to('/admin/interior_sec_one');

    }
}
