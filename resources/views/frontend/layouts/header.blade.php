<!-- Start Main Menu Area -->
<div class="main-menu-area-two">
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="assets/img/logo1.png"height="59" width="200" alt="Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="main-menu-two">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown active">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('team')}}">our team</a></li>
                                <li><a href="{{url('')}}">Cooming Soon</a></li>
                                <li class="dropdown-menu right-top">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Page Two <i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sub Page</a></li>
                                        <li><a href="#">Sub Two</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Page Three</a></li>
                                <li><a href="#">Page Four</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('about')}}">About</a></li>
                        <li><a href="{{url('about')}}">Our Mission</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('about')}}">Services V.1</a></li>
                                <li><a href="{{url('about')}}">Services V.2</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{url('/gallery')}}">Gallery</a>

                        </li>
                        <li><a href="{{url('contact')}}">Appointment</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-dark.html">Blog Full width</a></li>
                                <li><a href="blog-masonary-dark.html">Blog masonary</a></li>
                                <li><a href="blog-right-sidebar-dark.html">Right Sidebar</a></li>

                            </ul>
                        </li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                        <li><a href="#search"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</div>
<!-- End Main Menu Area -->

<!-- SearchBox Modal -->
<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="SEARCH KEYWORD(s)" />
        <button type="submit" class="btn theme-btn"><i class="fa fa-search"></i> Search</button>
    </form>
</div>
<!-- End SearchBox Modal -->
