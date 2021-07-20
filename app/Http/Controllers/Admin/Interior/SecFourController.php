<?php

namespace App\Http\Controllers\Admin\Interior;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InteriorSecFour;
use App\Models\InteriorSecFourHeading;

use File;

class SecFourController extends Controller
{
    public function index()
    {
        $secfour = InteriorSecFour::get();
        $en = InteriorSecFourHeading::where('lang','en')->first();
        $ar = InteriorSecFourHeading::where('lang','ar')->first();
        $data = InteriorSecFourHeading::get();


        return view('admin.service.interior.sec_four.index')
        ->with(compact('data','en','ar','secfour'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $en = InteriorSecFour::where('lang','en')->get();
        $ar = InteriorSecFour::where('lang','ar')->get();

        return view('admin.service.interior.sec_four.add')
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

        InteriorSecFour::create($data);
        return redirect()->to('/admin/interior_sec_four');
    }

    public function heading_post(Request $request)
    {
        InteriorSecFourHeading::create(request()->all());
        return redirect()->back();
    }

    public function heading_update(Request $request,$id)
    {
        $project = InteriorSecFourHeading::find($id);
        $project->update($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = InteriorSecFour::find($id);

        return view('admin.service.interior.sec_four.edit')
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
        $homvideo = InteriorSecFour::find($id);
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
        return redirect()->to('/admin/interior_sec_four');
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
        $project = InteriorSecFour::find($id);
        File::delete('/uploads/interior/'.$project->image);
        $project->delete();
        return redirect()->back();
    }
    public function heading_destroy($id)
    {
        $project = InteriorSecFourHeading::find($id);
        $project->delete();
        return redirect()->back();
    }
}
