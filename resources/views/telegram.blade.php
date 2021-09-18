@extends('layouts.app')

@section('title')
    Support Us
@stop

@section('content')
    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="become-volunteer">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="title left">
                                        <span>Shine Bright the world needs you</span>
                                        <h2><i>Your Business</i>  is Essential</h2>
                                    </div>
                                    <div style="color: black!important;"> {{setting('support.description')}}</div>
                                    <br>
                                    <br>

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
                                          WE HAVE RECEIVED YOUR REQUEST
                                        </div>
                                    @endif
                                    <br>
                                    <form enctype="multipart/form-data" action="{{route('site.apply')}}" method="post">
                                        @csrf
                                        <input name="Fname" type="text" placeholder="First Name *">
                                        <input name="Lname" type="text" placeholder="Last Name *">
                                        <input name="email" type="text" placeholder="Email Address *">
                                        <input name="phone" type="text" placeholder="Phone Number *">
                                        <input name="abn" type="text" placeholder="ABN">
                                        <textarea name="description" placeholder="About your business *"></textarea>
                                        <button class="btn submit" type="submit">Join NOW</button>
                                    </form>
                                    <br>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
