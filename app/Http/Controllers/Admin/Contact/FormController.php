<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactForm;

class FormController extends Controller
{
    public function index()
    {
        $data = ContactForm::get();
        return view('admin.contact.form.index')
        ->with(compact('data'));
    }

    public function create()
    {
        $en = ContactForm::where('lang','en')->first();
        $ar = ContactForm::where('lang','ar')->first();

        return view('admin.contact.form.add')
        ->with(compact('en','ar'));
    }

    public function store(Request $request)
    {
        ContactForm::create($request->all());
        return redirect()->to('/admin/contact/form');
    }

    public function show($id)
    {
        $data = ContactForm::find($id);
        return view('admin.contact.form.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $data = ContactForm::find($id);

        $data->update($request->all());
        return redirect()->to('/admin/contact/form');
    }

    public function destroy($id)
    {
        $project = ContactForm::find($id);
        $project->delete();
        return redirect()->to('/admin/contact/form');
    }
}
