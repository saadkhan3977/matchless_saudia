<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactVisit;

class VisitController extends Controller
{
    public function index()
    {
        $data = ContactVisit::get();
        return view('admin.contact.visit.index')
        ->with(compact('data'));
    }

    public function create()
    {
        $en = ContactVisit::where('lang','en')->first();
        $ar = ContactVisit::where('lang','ar')->first();

        return view('admin.contact.visit.add')
        ->with(compact('en','ar'));
    }

    public function store(Request $request)
    {
        ContactVisit::create($request->all());
        return redirect()->to('/admin/contact/visit');
    }

    public function show($id)
    {
        $data = ContactVisit::find($id);
        return view('admin.contact.visit.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $data = ContactVisit::find($id);

        $data->update($request->all());
        return redirect()->to('/admin/contact/visit');
    }

    public function destroy($id)
    {
        $project = ContactVisit::find($id);
        $project->delete();
        return redirect()->to('/admin/contact/visit');
    }
}
