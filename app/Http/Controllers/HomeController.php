<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralSettingWebStyle;
use App\Models\HomeVideo;
use App\Models\HomeContactUs;
use App\Models\Projects;
use App\Models\HomeProjects;
use App\Models\HomeHospitalityConsultancy;
use App\Models\HomeMissions;
use App\Models\HomeSecTwo;
use App\Models\HomeMissionsFeatures;
use App\Models\ContactForm;

class HomeController extends Controller
{
    public function index()
    {
		$general_wesbstyle =  GeneralSettingWebStyle::first();
		
		$segments = request()->segments();
		$langs = end($segments);
        $lang = ($langs =='ar') ? 'ar' : 'en';

		$videodata =  HomeVideo::where('lang',$lang)->first();
		$contacts = HomeContactUs::where('lang',$lang)->first();
		$projects = Projects::where('lang',$lang)->get();
		$homwproject = HomeProjects::where('lang',$lang)->first();
		$homehospitalityconsultancy = HomeHospitalityConsultancy::where('lang',$lang)->first();
		$homemissions = HomeMissions::where('lang',$lang)->first();
        $homemissionsfeatures = HomeMissionsFeatures::where('lang',$lang)->get();
        // print_r($homemissionsfeatures);die;
        $sectwo = HomeSecTwo::where('lang',$lang)->get();
        $contactform = ContactForm::where('lang',$lang)->first();

		return view('welcome')
    	->with(compact('general_wesbstyle','videodata','contacts','projects','homwproject','homehospitalityconsultancy','homemissions','homemissionsfeatures','sectwo','contactform'));
    }
}
