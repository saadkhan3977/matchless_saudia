<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
    	$gallerys = Gallery::get();
    	return view('gallery')
    	->with(compact('gallerys'));
    }
}
