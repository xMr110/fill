@extends('layouts.app')


@section('content')



    <section>
        <div class="block no-padding">
            <div class="row">
                <div class="col-12">
                    <div class="shelter-featured-carousel">
                        <div class="shelter-img-carousel">
                            <img src="{{url('/storage/'.setting('slider.slide_image_one'))}}" alt="" />
                            <img src="{{url('/storage/'.setting('slider.slide_image_two'))}}" alt="" />
                        </div><!-- Img Carousel -->

                        <div class="shelter-featured-text">
                            <div class="container">
                                <span>{{setting('slider.slider_subTitle')}}</span>
                                <h2>{{setting('slider.slider_Title')}}</h2>
                                <p style="width: 50%;">{!!setting('slider.Slider_description')  !!}</p>
                                <a class="btn open-popup" href="" onclick="myFunction( {{ setting('slider.slider_video') }}
                                    ,  [{ 'download_link':'{{ voyager::image(setting('slider.video_image')) }}'  }]) " title="">{{setting('slider.slider_video_button_text')}}</a>
                            </div>
                        </div><!-- Shelter Featured Text -->



                    </div><!-- Shelter Featured Carousel -->
                </div>

            </div>
        </div>
    </section>


{{--    who we are section --}}


    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shelter-services">
                            <div class="row no-gutters">
                                <div class="col-lg-4 col-md-12">
                                    <div class="shelter-service">
                                        <h3>{{setting('who-we-are.who_FIrst_Title')}}</h3>
                                        <p>{{setting('who-we-are.who_FIrst_Description')}}</p>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="shelter-service style2">
                                        <h3>{{setting('who-we-are.who_second_Title')}}</h3>
                                        <p>{{setting('who-we-are.who_second_Description')}}</p>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="shelter-service style3">
                                        <h3>{{setting('who-we-are.who_Third_Title')}}</h3>
                                        <p>{{setting('who-we-are.who_Third_Description')}}</p>

                                    </div>
                                </div>
                            </div>
                        </div><!-- Shelter Services -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block remove-gap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title">
                            <span>Help The Homeless People</span>
                            <h2><i>FILLTHETILL</i> RECENT VIDEOS</h2>
                        </div>

{{--iam here--}}
                        <div class="recent-causes">
                            <div class="causes-carousel">
                                @if( $videos != null)
                                @foreach($videos as $video)
                                <div class="cause-img">
                                    <div class="cause-bg"><img src="{{url('/storage/'.$video->image)}}" alt="" /></div>
                                    <div class="cause-inner">
                                        <img src="{{url('/storage/'.$video->image)}}" alt="" />
                                        <div class="cause-text">
                                            <span>{{$video->subTitle}}</span>
                                            <h4>{{$video->title}}</h4>
                                            <p>{{$video->description}}</p>
                                            <a class="btn small open-popup"
                                               onclick="myFunction( {{ $video->video }}
                                                   ,  [{ 'download_link':'{{ voyager::image($video->image) }}'  }]) "  href="" title="">watch Now</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                    @endif
                            </div>
                            <div class="creative-navs">
                                @foreach($videos as $key=>$video)
                                <span @if($key==0)class="slick-current"@endif>0{{$key+1}}</span>
                                @endforeach

                            </div>
                        </div><!-- Creative Portfolio -->

                    </div>
                </div>
            </div>
        </div>
    </section>



{{--    To Edit--}}

    <section>
        <div class="block blackish">
            <div class="fixed-bg " style=" background-image: url({{Voyager::image(setting('support.image'))}}) !important;"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12">
                        <div class="simple-parallax">
                            <h3>{{setting('support.title')}}</h3>
                            <p>{{setting('support.description')}}</p>
                            <a class="btn" href="{{setting('social.Instagram')}}" title="">Join Our Instgram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="block" id="Articles">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title">
                            <span>Give Your Hand To Help</span>
                            <h2><i>FILL THE TILL</i> RECENT NEWS</h2>
                        </div>
                        <div class="shelter-blog">
                            <div class="row">
                                @foreach($articles as $article)
                                <div class="col" style="    padding-left: 0;    padding-right: 0;    margin-right: 20px;     border: 1px solid;    border-radius: 15px;">
                                    <div class="simple-post" style="padding-left: 0;padding-right: 0;">
                                        <div class="simple-post-img"><img style="border-radius: 10px" src="{{url('/storage/'.$article->image)}}" alt="" /></div>
                                        <div class="simple-post-detail" style="padding-left: 15px;">
                                            <ul class="meta">
                                                <li>By <a href="#" title="">{{$article->user->name}}</a></li>
                                                <li>{{$article->date}}</li>
                                            </ul>
                                            <h3><a href="#" title="">{{$article->title}}</a></h3>
                                            <p>{{$article->description}}</p>
                                            <a class="readmore" href="#" title="">Read More</a>
                                        </div>
                                    </div><!-- Simple Post -->
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



{{--    Partners--}}
    <section>
        <div class="block less-space gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="shelter-logos">
                            @foreach($partners as $partner)
                            <li><a href="@if(isset($partner->link) && $partner->link != null){{$partner->link}}@endif" title=""><img src="{{url('/storage/'.$partner->image)}}" alt="" /></a></li>
                            @endforeach
                        </ul><!-- Trace Logos -->
                    </div>
                </div>
            </div>
        </div>
    </section>



@stop
@section('script')

    <style>
        .videoBox {
            align-items: center;
            text-align: center;
        }
    </style>

{{--    <script>--}}

{{--        function myFunction(e){--}}



{{--            var id =  e[0].download_link;--}}
{{--            console.log(id);--}}
{{--            var html = '<source src="storage/'+id+'" type="video/mp4" size="576">'--}}
{{--            $('#pass_id').append(html);--}}
{{--        };--}}

{{--    </script>--}}
    <div class="popup" id="popupModel">
        <div class="popup-box" style="width:60%;  ">
            <div class="popup-title"> <h3>watch video</h3> <a  id="popupClose" class="close-popup" href="#" title=""><i class="ion-close-round"></i></a> </div><!-- Popup Title -->
            <div class="popup-content" style="max-height:unset!important;">
                <div class="videoBox">
                    <video id="pass_id" controls crossorigin playsinline poster="">
                    </video>
                </div>

            </div><!-- Popup Content -->

        </div>
    </div><!-- Popup -->
    <script>


    </script>
    <script>

        let player = null;

        // window.player = player;
        function myFunction(e,c){
;
            console.log('hello');
            player = new Plyr('video', {captions: {active: true}});


            console.log(c);
            var VideoURL =  e[0].download_link;
            var ImageURL = c[0].download_link;
            var html = '<source src="storage/'+VideoURL+'" type="video/mp4" size="576">'
            $('#pass_id').attr("poster",ImageURL)
            $('#pass_id').append(html);
        };


        $("#popupClose").on("click", function () {

                player.destroy();
        });


    </script>
@stop
