<?php

namespace App\Http\Controllers\Admin\Consultancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ConsultancySecTwo;

class SecTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ConsultancySecTwo::get();
        return view('admin.service.consultancy.sec_two.index')
        ->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $en = ConsultancySecTwo::where('lang','en')->first();
        $ar = ConsultancySecTwo::where('lang','ar')->first();

        return view('admin.service.consultancy.sec_two.add')
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
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'lang' => $request->lang,
        ];

        ConsultancySecTwo::create($data);
        return redirect()->to('/admin/consultancy_sec_two');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ConsultancySecTwo::find($id);
        return view('admin.service.consultancy.sec_two.edit')
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
        $data = ConsultancySecTwo::find($id);

        $row = [
            'title' => $request->title,
            'description' => $request->description,
            'lang' => $request->lang,
        ];

        $data->update($row);
        return redirect()->to('/admin/consultancy_sec_two');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ConsultancySecTwo::find($id);
        $data->delete();
        return redirect()->to('/admin/consultancy_sec_two');
        
    }
}
