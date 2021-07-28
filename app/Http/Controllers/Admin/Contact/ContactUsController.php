<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUS;

class ContactUsController extends Controller
{
    public function delete($id)
    {
        $data = ContactUS::find($id);
        $data->delete();
        return redirect()->back();
    }
}
