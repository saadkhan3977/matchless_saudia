<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutSecOne;
use App\Models\AboutSecTwo;
use App\Models\AboutSecThree;
use App\Models\AboutSecFourHeading;
use App\Models\AboutSecFiveHeading;
use App\Models\AboutSecSix;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\AboutBlog;
use App\Models\AboutGalleryHeading;
use App\Models\Team;
use App\Models\Blog;
use App\Models\ContactForm;

class AboutController extends Controller
{
    public function index()
    {
        $segments = request()->segments();
        $langs = end($segments);
        $lang = ($langs =='ar') ? 'ar' : 'en';
        $secone = AboutSecOne::where('lang',$lang)->get();
        $sectwo = AboutSecTwo::where('lang',$lang)->get();
        $teams = Team::where('lang',$lang)->take(3)->get();
        $events = Blog::where('lang',$lang)->where('event','on')->get();
        $blogs = Blog::where('lang',$lang)->get();
        $secthree = AboutSecThree::where('lang',$lang)->first();
        $secfourheading = AboutSecFourHeading::where('lang',$lang)->first();
        $secfiveheading = AboutSecFiveHeading::where('lang',$lang)->first();
        $secsix = AboutSecSix::where('lang',$lang)->first();
        $galleryheading = AboutGalleryHeading::where('lang',$lang)->first();
        $gallerys = Gallery::get();
        $testimonials = Testimonial::get();
        $aboublog = AboutBlog::where('lang',$lang)->first();
        $contactform = ContactForm::where('lang',$lang)->first();


    	return view('about')
    	->with(compact('secone','sectwo','secthree','secfourheading','secfiveheading','secsix','gallerys','testimonials','galleryheading','aboublog','teams','events','blogs','contactform'));
    }
}
