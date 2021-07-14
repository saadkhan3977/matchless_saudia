<?php

namespace App\Http\Controllers\Admin\Career;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CareerSecThree;

class SecThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CareerSecThree::get();
        return view('admin.career.sec_three.index')
        ->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $en = CareerSecThree::where('lang','en')->first();
        $ar = CareerSecThree::where('lang','ar')->first();

        return view('admin.career.sec_three.add')
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
            $idestinationPath = 'uploads/career'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'post_title' => $request->post_title,
            'apply_title' => $request->apply_title,
            'position_title' => $request->position_title,
            'lang' => $request->lang,
            'image' => $imageName,
        ];

        CareerSecThree::create($data);
        return redirect()->to('/admin/career/sec_three');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = CareerSecThree::find($id);

        return view('admin.career.sec_three.edit')
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
        $project = CareerSecThree::find($id);
        $currentimage = $project->image;

        $imageName = null;
        if($request->hasFile('image')) 
        {
            $imagepath = 'uploads/career/'. $project->image;
            File::delete($imagepath);
            
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/career'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'post_title' => $request->post_title,
            'apply_title' => $request->apply_title,
            'position_title' => $request->position_title,
            'lang' => $request->lang,
            'image' => ($imageName) ? $imageName : $currentimage,

        ];

        $project->update($data);
        return redirect()->to('/admin/career/sec_three');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = CareerSecThree::find($id);
        $imagepath = 'uploads/career/'. $project->image;
        File::delete($imagepath);
        $project->delete();
        return redirect()->to('/admin/career/sec_three');
    }
}
