@extends('layouts.app')

@section('title')
                News
@stop


@section('content')

    <div class="pagetop">
        <div class="container">
            <h1><i>Our</i> News</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('site.home')}}" title="">Home</a></li>
                <li>News</li>
            </ul>
        </div>
    </div>


    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shelter-blog">
                            <div class="row">
                                @foreach($articles as $article)
                                <div class="col-4"  style="    padding-left: 0;    padding-right: 0;    margin-right: 20px;     border: 1px solid;    border-radius: 15px;">
                                    <div class="simple-post">
                                        <div class="simple-post-img"><img style="border-radius: 10px;     max-height: 300px;" src="{{url('/storage/'.$article->image)}}" alt="" /></div>
                                        <div class="simple-post-detail" style="padding-left: 15px;">
                                            <ul class="meta">
                                                <li>By <a href="#" title="">{{$article->user->name}}</a></li>
                                                <li>{{$article->date}}</li>
                                            </ul>
                                            <h3><a href="#" title="">{{$article->title}}</a></h3>
                                            <p>{!! \Illuminate\Support\Str::substr($article->description,0,125) !!}</p>
                                            <a class="readmore" href="{{route('site.singleNews',$article)}}" title="">Read More</a>
                                        </div>
                                    </div><!-- Simple Post -->
                                </div>
                                @endforeach
                            </div>
                        </div>



                        <div class="shelter-pagination">
                            <ul class="pagination">
                                {{ $articles->links() }}
                            </ul>
                        </div><!-- Shelter Pagination -->

                    </div>
                </div>
            </div>
        </div>
    </section>

@stop




