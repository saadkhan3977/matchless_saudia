<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactQuestion;

class QuestionController extends Controller
{
    public function index()
    {
        $data = ContactQuestion::get();
        return view('admin.contact.question.index')
        ->with(compact('data'));
    }

    public function create()
    {
        $en = ContactQuestion::where('lang','en')->first();
        $ar = ContactQuestion::where('lang','ar')->first();

        return view('admin.contact.question.add')
        ->with(compact('en','ar'));
    }

    public function store(Request $request)
    {
        ContactQuestion::create($request->all());
        return redirect()->to('/admin/contact/question');
    }

    public function show($id)
    {
        $data = ContactQuestion::find($id);
        return view('admin.contact.question.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $data = ContactQuestion::find($id);

        $data->update($request->all());
        return redirect()->to('/admin/contact/question');
    }

    public function destroy($id)
    {
        $project = ContactQuestion::find($id);
        $project->delete();
        return redirect()->to('/admin/contact/question');
    }
}
