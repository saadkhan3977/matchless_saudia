<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUS;
use App\Mail\ContactMail;
use App\Models\Emails;
use App\Models\ContactVisit;
use App\Models\ContactQuestion;
use App\Models\HomeContactUs;
use App\Models\ContactForm;
use Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        $segments = request()->segments();
        $langs = end($segments);
        $lang = ($langs =='ar') ? 'ar' : 'en';

        $contacts = HomeContactUs::where('lang',$lang)->first();
        $contactform = ContactForm::where('lang',$lang)->first();

        // $contacts = ContactUs::first();
        $visit = ContactVisit::where('lang',$lang)->first();
        $question = ContactQuestion::where('lang',$lang)->first();

        return view('contact')->with(compact('contacts','visit','question','contactform'));
    }

    public function store(Request $request)
    {
    	ContactUS::create($request->all());
    	$objDemo = new \stdClass();
        $objDemo->fullname = $request->fullname;
        $objDemo->email = $request->email;
        $objDemo->subject = $request->subject;
        $objDemo->phone = $request->phone;
        $objDemo->description = $request->description;
        $contacts = Emails::get();
        if($contacts)
        {
            foreach($contacts as $row){
                Mail::to($row->email)->send(new ContactMail($objDemo));
            }
        }
        else
        {
            Mail::to('info@mls.com')->send(new ContactMail($objDemo));
        }
    	return redirect()->back()->with('success_contact','Thank you For Contact');
    }
}
