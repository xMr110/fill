<header>
    <div class="topbar">
        <span class="top-btn  " href="#" title="">FOLLOW US</span>
        <ul>
            <li><a href="{{setting('social.facebook')}}" title="">Facebook</a></li>
            <li><a href="{{setting('social.Instagram')}}" title="">Instagram</a></li>
            <li><a href="{{setting('social.linkedin')}}" title="">linkedin</a></li>
        </ul>
    </div><!-- Topbar -->
    <div class="menubar fancy">
        <div class="row align-items-center">
            <div class="col-3"><div class="logo" style=" max-width: 220px;"><a href="#" title=""><img src="{{url('/storage/'.setting('site.logo'))}}" alt="" /></a></div></div>
            <div class="col-9">

                <nav>
                    <ul>
                        <li><a href="index.html" title="">Home</a></li>
                        <li><a href="#" title="">Pages</a> </li>
                        <li><a href="#Articles" title="">Our News</a></li>
                        <li><a href="#" title="">Events</a></li>
                        <li><a href="causes.html" title="">Causes</a></li>
                        <li><a href="#" title="">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div><!-- Menu Bar -->
</header><!-- Header -->
<div class="responsive-header">
    <!--  Top Bar  -->
    <div class="topbar">
        <a class="top-btn open-popup" href="#" title="">Donate Now</a>
        <ul>
            <li><a href="become-volunteer.html" title="">Join Now</a></li>
            <li><a href="#" title="">Careers</a></li>
            <li><a href="#" title="">Login</a></li>
        </ul>
    </div><!-- Topbar -->
    <div class="responsive-menubar">
        <div class="logo"><a href="#" title=""><img src="{{url('/storage/'.setting('site.logo'))}}" alt="" /></a></div>

        <a class="responsive-menu-btn" href="#" title=""><i class="ion-navicon"></i></a>
        <div class="shelter-search">
            <a href="#" title=""><i class="fa fa-search"></i></a>
            <form>
                <input type="search" placeholder="Enter Your Search keywords" />
                <button><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div><!-- Responsive Menubar -->

{{--    Mobile View--}}
    <div class="sideheader">
        <a class="menu-btn close" href="javascript:void(0)" title=""><i class="icon-cancel"></i></a>
        <div class="sidemenu scrollbar">
            <ul>
                <li><a href="index.html" title="">Home</a> </li>
                <li><a href="#" title="">Pages</a> </li>
                <li><a href="#Articles" title="">Our News</a>  </li>
                <li><a href="#" title="">Events</a></li>
                <li><a href="causes.html" title="">Causes</a> </li>
                <li><a href="#" title="">Contact</a> </li>
            </ul>
        </div>
    </div><!-- Sideheader -->
</div><!-- Responsive Header -->
