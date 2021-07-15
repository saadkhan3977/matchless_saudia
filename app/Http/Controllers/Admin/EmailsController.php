<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Emails;

class EmailsController extends Controller
{
    public function index()
    {
        $data = Emails::get();

        return view('admin.emails.index')
        ->with(compact('data'));
    }

    public function create()
    {

        return view('admin.emails.add');
    }

    public function store(Request $request)
    {

        Emails::create($request->all());
        return redirect()->to('/admin/emails');
    }

    public function show($id)
    {
        $data = Emails::find($id);
        return view('admin.emails.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = Emails::find($id);
        $project->update($request->all());
        return redirect()->to('/admin/emails');
    }

    public function destroy($id)
    {
        $project = Emails::find($id);
        $project->delete();
        return redirect()->to('/admin/emails');
    }
}
