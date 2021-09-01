<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Partner;
use App\Models\Video;

use Illuminate\Http\Request;

class SiteController extends Controller
{


    public function index()
    {

        $videos = Video::latest()->take(3)->get();
        $articles =  Article::latest()->take(3)->get();
        $partners = Partner::all();
        return view('index',compact('videos','articles','partners'));
    }
}
