<?php

namespace App\Http\Controllers\Admin\Interior;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InteriorSecTwoHeading;
use App\Models\InteriorSecTwo;
use File;

class SecTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = InteriorSecTwoHeading::get();
        $en = InteriorSecTwoHeading::where('lang','en')->first();
        $ar = InteriorSecTwoHeading::where('lang','ar')->first();
        $sectwo = InteriorSecTwo::get();
        
        return view('admin.service.interior.sec_two.index')
        ->with(compact('data','sectwo','en','ar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $en = InteriorSecTwo::where('lang','en')->get();
        $ar = InteriorSecTwo::where('lang','ar')->get();

        return view('admin.service.interior.sec_two.add')
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

        InteriorSecTwo::create($data);
        return redirect()->to('/admin/interior_sec_two');
    }

    public function heading_post(Request $request)
    {
        InteriorSecTwoHeading::create(request()->all());
        return redirect()->back();
    }

    public function heading_update(Request $request,$id)
    {
        $project = InteriorSecTwoHeading::find($id);
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
        $data = InteriorSecTwo::find($id);

        return view('admin.service.interior.sec_two.edit')
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
        $homvideo = InteriorSecTwo::find($id);
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
        return redirect()->to('/admin/interior_sec_two');
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
        $project = InteriorSecTwo::find($id);
        File::delete('/uploads/interior/'.$project->image);
        $project->delete();
        return redirect()->back();
    }

    public function heading_destroy($id)
    {
        $project = InteriorSecTwoHeading::find($id);
        $project->delete();
        return redirect()->back();
    }
}
