<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class StaffController extends Controller
{
    public function index()
    {
    	$staffs = User::where('role','staff')->paginate(10);
    	return view('admin.staff.index')
    	->with(compact('staffs'));
    }

    public function create()
    {
    	return view('admin.staff.add');
    }

    public function show(Request $request, $id)
    {
    	$user = User::find($id);
    	$user->status = $request->status;
    	$user->save();
    	return redirect()->back();
    }

    public function delete($id)
    {
    	$user = User::find($id);
    	$user->delete();
    	
    	return redirect()->back();
    }

    public function store(Request $request)
    {
    	// print_r($request->all());die;
    	User::createStaff([
    		// 'name' => $request->name,
    		// 'email' => $request->email,
    		// 'passowrd' => $request->passowrd,
    		// 'role' => 'staff',
    		$request->all()
    	]);
    	return redirect()->to('/admin/manage-staff');
    }

}
