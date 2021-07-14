<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobs;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jobs::get();
        
        return view('admin.jobs.index')
        ->with(compact('data'));
    }

    public function create()
    {
        $en = Jobs::where('lang','en')->first();
        $ar = Jobs::where('lang','ar')->first();

        return view('admin.jobs.add')
        ->with(compact('en','ar'));
    }

    public function store(Request $request)
    {

        Jobs::create($request->all());
        return redirect()->to('/admin/jobs');
    }

    public function show($id)
    {
        $data = Jobs::find($id);
        // print_r($data->status);die;
        $data->update([
            'status' => ($data->status =='ACTIVE') ? 'DEACTIVE' : 'ACTIVE' 
        ]);
        return redirect()->to('/admin/jobs');
    }

    public function edit($id)
    {
        $data = Jobs::find($id);
        return view('admin.jobs.edit')
        ->with(compact('data'));

    }

    public function Update(Request $request,$id)
    {
        $project = Jobs::find($id);
        $project->update($request->all());
        return redirect()->to('/admin/jobs');
    }

    public function destroy($id)
    {
        $project = Jobs::find($id);
        $project->delete();
        return redirect()->to('/admin/jobs');
    }
}
