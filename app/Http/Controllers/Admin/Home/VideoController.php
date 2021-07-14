<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeVideo;
use File;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = HomeVideo::get();
        return view('admin.home.video.index')
        ->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $en = HomeVideo::where('lang','en')->first();
        $ar = HomeVideo::where('lang','ar')->first();
        return view('admin.home.video.add')
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
        // HomeVideo::create($request->all());
        // print_r($request->background_video);die;
        $fileName = null;
        if($request->hasFile('background_video')) 
        {
            $files = $request->file('background_video');
            $destinationPath = 'uploads/home/'; // upload path
            $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $fileName);
        }
        $data = [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'link' => $request->link,
            'button_text' => $request->button_text,
            'description' => $request->description,
            'background_video'=> $fileName,
            'video_url' => $request->video_url,
            'lang' => $request->lang,
        ];

        HomeVideo::create($data);
        return redirect()->to('/admin/home/video/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = HomeVideo::find($id);
        return view('admin.home.video.edit')
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
        $homvideo = HomeVideo::find($id);
        $currentImage = $homvideo->background_video;
        $fileName = null;
        if($request->hasFile('background_video')) 
        {
            File::delete('uploads/home/'.$currentImage);
            $files = $request->file('background_video');
            $destinationPath = 'uploads/home/'; // upload path
            $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $fileName);
        }
        $data = [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'link' => $request->link,
            'button_text' => $request->button_text,
            'description' => $request->description,
            'lang' => $request->lang,
            'video_url' => $request->video_url,
            'background_video' => ($fileName) ? $fileName : $currentImage ,
        ];

        $homvideo->update($data);
        return redirect()->to('/admin/home/video/');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homvideo = HomeVideo::find($id);
        File::delete('uploads/home/'.$homvideo->background_video);
        $homvideo->delete();
        return redirect()->to('/admin/home/video/');
    }
}
