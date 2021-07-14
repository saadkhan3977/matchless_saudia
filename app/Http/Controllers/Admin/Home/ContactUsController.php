<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
    	$data = HomeContactUs::get();
    	return view('admin.home.contact.index')
    	->with(compact('data'));
    }

    public function create()
    {
        $en = HomeContactUs::where('lang','en')->first();
        $ar = HomeContactUs::where('lang','ar')->first();

    	return view('admin.home.contact.add')
        ->with(compact('en','ar'));
    }

    public function store(Request $request)
    {
    	HomeContactUs::create($request->all());
    	return redirect()->to('/admin/home/contact');
    }

    public function show($id)
    {
    	$data = HomeContactUs::find($id);
    	return view('admin.home.contact.edit')
    	->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
    	$data = HomeContactUs::find($id);

    	$data->update($request->all());
    	return redirect()->to('/admin/home/contact');
    }

    public function destroy($id)
    {
        $project = HomeContactUs::find($id);
        $project->delete();
        return redirect()->to('/admin/home/contact');
    }
}
