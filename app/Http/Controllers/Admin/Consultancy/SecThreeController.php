<?php

namespace App\Http\Controllers\Admin\Consultancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ConsultancySecThree;
use App\Models\HomeSecTwo;

class SecThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ConsultancySecThree::get();
        $business = HomeSecTwo::get();
        return view('admin.service.consultancy.sec_three.index')
        ->with(compact('data','business'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $businessen = HomeSecTwo::where('lang','en')->get();
        $businessar = HomeSecTwo::where('lang','ar')->get();

        return view('admin.service.consultancy.sec_three.add')
        ->with(compact('businessen','businessar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ConsultancySecThree::create($request->all());
        return redirect()->to('/admin/consultancy_sec_three');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ConsultancySecThree::find($id);
        $businessen = HomeSecTwo::where('lang','en')->get();
        $businessar = HomeSecTwo::where('lang','ar')->get();

        return view('admin.service.consultancy.sec_three.edit')
        ->with(compact('data','businessen','businessar'));
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
        $data = ConsultancySecThree::find($id);
        $data->update($request->all());
        return redirect()->to('/admin/consultancy_sec_three');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ConsultancySecThree::find($id);
        $data->delete();
        return redirect()->to('/admin/consultancy_sec_three');
    }
}
