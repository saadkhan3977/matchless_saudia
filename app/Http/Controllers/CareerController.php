<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CareerSecOne;
use App\Models\CareerSecTwo;
use App\Models\CareerSecThree;
use App\Models\CareerSecFour;
use App\Models\CareerSecTwoHeading;
use App\Models\CareerSecFourHeading;
use App\Models\ContactVisit;
use App\Models\ContactQuestion;
use App\Models\GeneralSettingHeader;
use App\Models\ContactForm;
use App\Models\Jobs;

class CareerController extends Controller
{
    
    public function index()
    {
        $segments = request()->segments();
        $langs = end($segments);
        $lang = ($langs =='ar') ? 'ar' : 'en';
        
        $secone = CareerSecOne::where('lang',$lang)->get();
        $secthree = CareerSecThree::where('lang',$lang)->first();
        $sectwo = CareerSecTwo::where('lang',$lang)->get();
        $sectwoheading = CareerSecTwoHeading::where('lang',$lang)->first();
        $secfour = CareerSecFour::where('lang',$lang)->get();
        $secfourheading = CareerSecFourHeading::where('lang',$lang)->first();
        $visit = ContactVisit::where('lang',$lang)->first();
        $question = ContactQuestion::where('lang',$lang)->first();
        $footer = GeneralSettingHeader::where('lang','en')->first();
        $contactform = ContactForm::where('lang',$lang)->first();
        $jobs = Jobs::where('lang',$lang)->get();
        $activejob = Jobs::where('lang',$lang)->where('status','ACTIVE')->first();

        return view('career')
        ->with(compact('secone','sectwo','sectwoheading','secfourheading','secfour','visit','question','secthree','footer','contactform','jobs','activejob'));
    }
}
