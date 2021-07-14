<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\TeamTitle;

class TeamController extends Controller
{
    public function index()
    {
    	$segments = request()->segments();
        $langs = end($segments);
        $lang = ($langs =='ar') ? 'ar' : 'en';

        $teams = Team::where('lang',$lang)->get();
        $teamtitles = TeamTitle::where('lang',$lang)->first();
        return view('team')
        ->with(compact('teams','teamtitles'));
    }
}
