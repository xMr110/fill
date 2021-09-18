@extends('layouts.app')

@section('title')
        {{$article->title}}
@stop

@section('style')
    <meta property="og:url"                content="{{url()->current()}}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content=" {{$article->title}}" />
    <meta property="og:description"        content="{!! strip_tags($article->description) !!}" />
    <meta property="og:image"              content="{{url('/storage/'.$article->image)}}" />

@stop
@section('content')

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="shelter-blog-detail">
                            <div class="post-img"><img src="{{url('/storage/'.$article->image)}}" alt="" /></div>
                            <div class="post-information">
                                <div class="cat-box"><span>FILLTHETILL</span></div>
                                <h1 class="post-title"><a href="#" title=""> {{$article->title}}</a></h1>
                                <ul class="meta">
                                    <li>By <a href="#" title="">{{$article->user->name}}</a></li>
                                    <li>{{$article->date}}</li>
                                </ul>
                                <div class="round-socials">
                                    <a class="facebook" title="" href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}&display=popup"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                                {!! $article->description !!}
                        </div><!-- Shelter Blog Detail -->





                    </div>

                    <aside class="col-lg-3  col-md-12 sidebar">


                        <div class="widget">
                            <div class="widget-title"><h4>Latest  Published News </h4></div>
                            <div class="urgent-need">
                                <img src="{{url('/storage/'.$Larticle->image)}}" alt="" />
                                <div class="urgent-text">
                                    <i>Latest News</i>
                                    <h3><a href="#" title="">{{$Larticle->title}} </a></h3>
                                    {!! \Illuminate\Support\Str::substr($Larticle->description,0,50) !!}
                                    <a class="btn small" href="{{route('site.singleNews',$Larticle)}}" title="">Read Now</a>
                                </div>
                            </div>
                        </div><!-- Widget -->
                    </aside>
                </div>
            </div>
        </div>
    </section>
@stop
