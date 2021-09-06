




<header class="stick">
    <div class="topbar dark">
        <div class="container">
            <span class="top-btn  " href="{{route('site.join')}}" title="">JOIN US</span>
            <ul>
                <li><a href="{{setting('social.facebook')}}" title="">Facebook</a></li>
                <li><a href="{{setting('social.Instagram')}}" title="">Instagram</a></li>
                <li><a href="{{setting('social.linkedin')}}" title="">linkedin</a></li>
            </ul>
        </div>
    </div><!-- Topbar -->
    <div class="menubar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3"><div class="logo"><a href="#" title=""><img src="{{url('/storage/'.setting('site.logo'))}}" alt="" /></a></div></div>
                <div class="col-9">
                    <div class="header-contact">
                        <div class="info">
                            <i class="ion-ios-email-outline"></i>
                            <strong>Email
                                <span><a href="mailto:{{setting('about-us.email')}}">{{setting('about-us.email')}}</a></span>
                            </strong>
                        </div><!-- Info -->
                    </div>
                </div>

            </div>
        </div>
    </div><!-- Menu Bar -->
    <div class="menu-strip">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="{{route('site.home')}}" title="">Home</a></li>
                    <li><a href="{{route('site.campaign')}}" title="">Our Campaign</a></li>
                    <li><a href="{{route('site.join')}}" title="">Join Us</a></li>
                    <li><a href="{{route('site.news')}}" title="">Our News</a></li>
                    <li><a href="{{route('site.contact')}}" title="">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header><!-- Header -->

<div class="responsive-header">
    <div class="topbar">
        <span class="top-btn  " href="{{route('site.join')}}" title="">JOIN US</span>

        <ul>
            <li><a href="{{setting('social.facebook')}}" title="">Facebook</a></li>
            <li><a href="{{setting('social.Instagram')}}" title="">Instagram</a></li>
            <li><a href="{{setting('social.linkedin')}}" title="">linkedin</a></li>
        </ul>
    </div><!-- Topbar -->
    <div class="responsive-menubar">
        <div class="logo"><a href="#" title=""><img src="{{url('/storage/'.setting('site.logo'))}}" alt="" /></a></div>

        <a class="responsive-menu-btn" href="#" title=""><i class="ion-navicon"></i></a>
    </div><!-- Responsive Menubar -->


    <div class="sideheader">
        <a class="menu-btn close" href="javascript:void(0)" title=""><i class="icon-cancel"></i></a>
        <div class="sidemenu scrollbar">
            <ul>
                <li><a href="{{route('site.home')}}" title="">Home</a></li>
                <li><a href="{{route('site.campaign')}}" title="">Our Campaign</a></li>
                <li><a href="{{route('site.news')}}" title="">Our News</a></li>
                <li><a href="{{route('site.join')}}" title="">Join Us</a></li>
                <li><a href="{{route('site.contact')}}" title="">Contact</a></li>

            </ul>
        </div>
    </div><!-- Sideheader -->
</div><!-- Responsive Header -->
