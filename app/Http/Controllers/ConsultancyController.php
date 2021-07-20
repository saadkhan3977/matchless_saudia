<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsultancySecOne;
use App\Models\ConsultancySecTwo;
use App\Models\HomeSecTwo;
use App\Models\ConsultancySecThree;

class ConsultancyController extends Controller
{
    public function index()
    {
    	$segments = request()->segments();
        $langs = end($segments);
        $lang = ($langs =='ar') ? 'ar' : 'en';
        $secone = ConsultancySecOne::where('lang',$lang)->get();
        $sectwo = ConsultancySecTwo::where('lang',$lang)->first();
        $secthree = HomeSecTwo::where('lang',$lang)->get();
        $secthreedetail = ConsultancySecThree::where('lang',$lang)->get();
        return view('consultancy')
    	->with(compact('secone','sectwo','secthree','secthreedetail'));
    }
}
