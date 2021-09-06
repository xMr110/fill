@extends('layouts.app')


@section('title')

    contact us
@stop


@section('content')

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="shelter-call">
                            <div class="row">
                                <div class="col-lg-8 col-md-12"> <p>Join The <i>Ultimate and Irreplacable</i> Experience Now!</p> </div>
                            </div>
                        </div><!-- Shelter Call -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="block no-padding">
            <div class="row">
                <div class="col-md-12">
                    <div class="shelter-contact">
                        <div class="contact-img">
                            <div class="contact-name">We Are Here <span>123 E-Block, Street 3051 London, UK 441</span></div>
                        </div><!-- Contact Image -->
                        <div class="simple-form">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if(Request::get('data')=='1')
                                <div class="alert alert-success">
                                    WE HAVE RECEIVED YOUR MESSAGE
                                </div>
                            @endif
                            <form method="post" action="{{route('site.message')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12"><input type="text"  name="name" placeholder="Full Name" /></div>
                                    <div class="col-md-12"><input type="email" name="email" placeholder="Email" /></div>
                                    <div class="col-md-12"><input type="text" name="Subject" placeholder="Subject" /></div>
                                    <div class="col-md-12"><textarea name="Message" placeholder="Message"></textarea></div>
                                    <div class="col-md-12"><button class="btn" type="submit">Send Message</button></div>
                                </div>
                            </form>
                        </div><!-- Contact Form -->
                    </div><!-- Shelter Contact -->
                </div>
            </div>
        </div>
    </section>


@stop
