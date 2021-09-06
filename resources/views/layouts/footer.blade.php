<footer>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget">
                        <div class="about-widget">
                            <div class="logo"><a href="#" title=""><img src="{{url('/storage/'.setting('site.footer_logo'))}}" alt="" /></a></div>
                            <p>Subscribe with our newsletters to keep you updated. </p>
{{--                            To update later --}}
                            <form class="newsletter-form">
                                <input type="text" placeholder="Enter Your E-mail" />
                                <button><i class="fa fa-paper-plane-o"></i></button>
                            </form>
                        </div><!-- About Widget -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget">
                        <h3 class="widget-title">Useful Links</h3>
                        <ul>
                            <li><a href="{{route('site.home')}}" title="">Home</a></li>
                            <li><a href="{{route('site.campaign')}}" title="">Our Campaign</a></li>
                            <li><a href="{{route('site.join')}}" title="">Join Us</a></li>
                            <li><a href="{{route('site.news')}}" title="">Our News</a></li>
                            <li><a href="{{route('site.contact')}}" title="">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="widget">
                        <h3 class="widget-title">Connects</h3>
                       <span>Address: {{setting('about-us.Address')}}</span><br>
                       <span>Email: {{setting('about-us.email')}}</span><br>
                       <span>Phone: {{setting('about-us.Phone')}}</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</footer>
<div class="bottombar">
    <div class="container">
        <p>© 2021 FILLTHETILL is Powered by <a href="#" title="">D.A</a> </p>
        <div class="socials">
            <a href="{{setting('social.facebook')}}" title="">Facebook</a>
            <a href="{{setting('social.linkedin')}}" title="">Instagram </a>
            <a href="{{setting('social.Instagram')}}" title="">Linkedin</a>
        </div>
    </div>
</div>
