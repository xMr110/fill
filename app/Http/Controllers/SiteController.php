<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Partner;
use App\Models\Telegram;
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

    public function news()
    {
        $articles =  Article::paginate(6);

        return view('News',compact('articles'));
    }

    public function singleNews(Article $article)
    {
        $Larticle =  Article::latest()->first();
        return view('singleNews',compact('article','Larticle'));
    }

    public function join()
    {
        return view('telegram');
    }


    public function apply(Request  $request)
    {

        $this->validate($request, [
            'Fname'=>'required',
            'Lname'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email'=>'required|email',
            'abn'=>'required',
            'description'=>'required'
        ]);

        $message = new Telegram();
        $message->Fname = $request->get('Fname');
        $message->Lname = $request->get('Lname');
        $message->email = $request->get('email');
        $message->phone = $request->get('phone');
        $message->abn = $request->get('abn');
        $message->description = $request->get('description');
        $message->status = 1;

        if($message->save()){        $data = '1';}else{$data='0';}
        return   redirect()->route('site.join',compact('data'));
    }
}
