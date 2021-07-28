<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InteriorSecOne;
use App\Models\InteriorSecTwo;
use App\Models\InteriorSecTwoHeading;
use App\Models\InteriorSecThree;
use App\Models\InteriorSecFour;
use App\Models\InteriorSecFourHeading;

class InteriorController extends Controller
{
    public function index()
    {
    	$segments = request()->segments();
        $langs = end($segments);
        $lang = ($langs =='ar') ? 'ar' : 'en';
        $secone = InteriorSecOne::where('lang',$lang)->first();
        // print_r($secone->image);die;

        $sectwoheading = InteriorSecTwoHeading::where('lang',$lang)->first();
        $sectwo = InteriorSecTwo::where('lang',$lang)->get();
        $secthree = InteriorSecThree::where('lang',$lang)->get();
        $secfour = InteriorSecFour::where('lang',$lang)->get();
        $secfourheading = InteriorSecFourHeading::where('lang',$lang)->first();
        return view('interior')
    	->with(compact('secone','sectwo','sectwoheading','secthree','secfour','secfourheading'));
    }

    public function edge()
    {
        $segments = request()->segments();
        $langs = end($segments);
        $lang = ($langs =='ar') ? 'ar' : 'en';

        $secfour = InteriorSecFour::where('lang',$lang)->get();
        $dsecfour = InteriorSecFour::where('lang',$lang)->OrderBy('id','desc')->get();
        $secfourheading = InteriorSecFourHeading::where('lang',$lang)->first();
        return view('edge')
        ->with(compact('secfour','secfourheading','dsecfour'));
    }
}
