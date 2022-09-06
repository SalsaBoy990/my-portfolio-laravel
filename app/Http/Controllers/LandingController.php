<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meta;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Support\Facades\App;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = App::getLocale();
        $siteMeta = Meta::where('language', $locale)->first();
        $skills = Skill::where('language', $locale)->get();
        $projects = Project::where('language', $locale)->get();

        return view('welcome')->with([
            'meta' => $siteMeta,
            'skills' => $skills,
            'projects' => $projects

        ]);
    }
}
