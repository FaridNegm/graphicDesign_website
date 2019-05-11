@extends('website.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12">
                @section('content')

                    <!--
Start Preloader
==================================== -->
                        <div id="preloader">
                            <div class="preloader">
                                <div class="sk-cube-grid">
                                    <div class="sk-cube sk-cube1"></div>
                                    <div class="sk-cube sk-cube2"></div>
                                    <div class="sk-cube sk-cube3"></div>
                                    <div class="sk-cube sk-cube4"></div>
                                    <div class="sk-cube sk-cube5"></div>
                                    <div class="sk-cube sk-cube6"></div>
                                    <div class="sk-cube sk-cube7"></div>
                                    <div class="sk-cube sk-cube8"></div>
                                    <div class="sk-cube sk-cube9"></div>
                                </div>
                            </div>
                        </div>
                        <!--
                        End Preloader
                        ==================================== -->

                        <!--
                        Welcome Slider
                        ==================================== -->
                        @foreach($all_settings as $setting)
                            <section class="hero-area" style="background-image: url('dashboard/images/sitesetting/{{$setting->site_image}}')">

                                {{--<video autoplay muted loop id="myVideo">--}}
                                    {{--<source src="{{url('dashboard/images/sitesetting/'.$setting->site_image)}}" type="video/mp4">--}}
                                {{--</video>--}}

                                <div class="block">
                                    <div class="video-button">
                                        <i class="tf-ion-play"></i>
                                    </div>
                                    <h1>{{$setting->name}}</h1>
                                    <p>{{$setting->description}}</p>
                                    <a data-scroll href="#services" class="btn btn-transparent">Explore Us</a>
                                </div>
                            </section>
                        @endforeach

                        <!--
                         Fixed Navigation
                         ==================================== -->
                        <header id="navigation" class="navbar navigation">
                            <div class="container">
                                <div class="navbar-header">
                                    <!-- responsive nav button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <!-- /responsive nav button -->

                                    <!-- logo -->
                                    <a class="navbar-brand logo" href="#body">
                                        <!-- <img src="images/logo.png" alt="Website Logo" /> -->
                                        <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="3">
                                                    <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
                                                    <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
                                                    <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <!-- /logo -->
                                </div>

                                <!-- main nav -->
                                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                                    <ul id="nav" class="nav navbar-nav navigation-menu">
                                        <li><a data-scroll href="#body">Home</a></li>
                                        <li><a data-scroll href="#about">About Us</a></li>
                                        <li><a data-scroll href="#services">Services</a></li>
                                        <li><a data-scroll href="#portfolio">Portfolio</a></li>
                                        <li><a data-scroll href="#our-team">Team</a></li>
                                        <li><a data-scroll href="#pricing">Pricing</a></li>
                                        <li><a data-scroll href="#blog">Blog</a></li>
                                        <li><a data-scroll href="#contact-us">Contact</a></li>
                                        <li><a data-scroll href="{{url('login')}}">Login</a></li>
                                        <li><a data-scroll href="{{url('register')}}">Register</a></li>
                                    </ul>
                                </nav>
                                <!-- /main nav -->

                            </div>
                        </header>
                        <!--
                        End Fixed Navigation
                        ==================================== -->

                        <!--
                                Start About Section
                                ==================================== -->
                        <section class="bg-one about section">
                            <div class="container">
                                <div class="row">

                                    <!-- section title -->
                                    <div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
                                        <h2>About <span class="color">Us</span> </h2>
                                        <div class="border"></div>
                                    </div>
                                    <!-- /section title -->

                                    <!-- About item -->
                                    <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
                                        <div class="block">
                                            <div class="icon-box">
                                                <i class="tf-tools"></i>
                                            </div>
                                            <!-- Express About Yourself -->
                                            <div class="content text-center">
                                                <h3 class="ddd">We're Creative</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End About item -->

                                    <!-- About item -->
                                    <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
                                        <div class="block">
                                            <div class="icon-box">
                                                <i class="tf-strategy"></i>
                                            </div>
                                            <!-- Express About Yourself -->
                                            <div class="content text-center">
                                                <h3>We're Professional</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End About item -->

                                    <!-- About item -->
                                    <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                                        <div class="block kill-margin-bottom">
                                            <div class="icon-box">
                                                <i class="tf-anchor2"></i>
                                            </div>
                                            <!-- Express About Yourself -->
                                            <div class="content text-center">
                                                <h3>We're Genius</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End About item -->

                                </div> 		<!-- End row -->
                            </div>   	<!-- End container -->
                        </section>   <!-- End section -->

                        <section class="section about-2 padding-0 bg-dark" id="about">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 padding-0 ">
                                        <img class="img-responsive" src="{{url('/website')}}/images/about/about-business-man.jpg" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-block">
                                            <h2>We’re A Digital Design Agency.</h2>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam tempora itaque, autem dolores culpa cum mollitia voluptate nesciunt voluptatibus quasi.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eveniet vel et mollitia nemo corporis sed ut, exercitationem incidunt, rerum nam doloremque quos ratione doloribus, officiis adipisci error quasi soluta?</p>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, magnam.</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="media">
                                                        <div class="pull-left">
                                                            <i class="tf-circle-compass"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">SEO Optimized</h4>
                                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus consectetur dolores repellendus eos saepe</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="media">
                                                        <div class="pull-left">
                                                            <i class="tf-hotairballoon"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Easy Customization</h4>
                                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus consectetur dolores repellendus </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!--
                        Start Call To Action
                        ==================================== -->
                        <section class="call-to-action section-sm bg-1 overly">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h2>Great Design & Incredible Features</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur odio impedit incidunt? <br> Omnis accusantium ea reiciendis, fugit commodi nostrum.</p>
                                        <a href="#" class="btn btn-main">Start a project with us</a>
                                    </div>
                                </div> 		<!-- End row -->
                            </div>   	<!-- End container -->
                        </section>   <!-- End section -->

                        <!-- Start Services Section
                        ==================================== -->

                        <section id="services" class="bg-one section">
                            <div class="container">
                                <div class="row">

                                    <!-- section title -->
                                    <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                                        <h2>Our <span class="color">Services</span></h2>
                                        <div class="border"></div>
                                    </div>
                                    <!-- /section title -->

                                    <!-- Single Service Item -->
                                    @foreach($all_services as $service)
                                        <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
                                            <div class="service-block text-center">
                                                <div class="service-icon text-center">
                                                    <img src="{{url('dashboard/images/services/'.$service->image)}}" width="70px" height="70px;" style="border-radius: 50%;">
                                                </div>
                                                <h3>{{$service->title}}</h3>
                                                <p style="height: 60px;">{{str_limit($service->body , 150)}}</p>
                                            </div>
                                        </article>
                                    @endforeach
                                    <!-- End Single Service Item -->
                                </div> 		<!-- End row -->
                            </div>   	<!-- End container -->
                        </section>   <!-- End section -->


                        <!-- Start Team Skills
                                =========================================== -->

                        <section id="team-skills" class="parallax-section section section-bg overly">
                            <div class="container">
                                <div class="row" >
                                    <!-- section title -->
                                    <div class="col-md-12">
                                        <div class="title text-center">
                                            <h2>Our <span class="color">Skills</span></h2>
                                            <div class="border"></div>
                                        </div>
                                    </div>
                                    <!-- /section title -->
                                </div>  		<!-- End row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>We’ve skilled in wide range of web and <br>
                                            Other digital market tools.</h2>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis magni explicabo cum aperiam recusandae sunt accusamus totam. Quidem quos fugiat sapiente numquam accusamus quas hic, itaque in libero reiciendis tempora!</p>
                                        <img class="img-responsive" src="{{url('/website')}}/images/about/company-growth.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="skill-bar">
                                            <li>
                                                <p><span>01-</span> Business Development</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <p><span>02-</span> Analysis</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <p><span>03-</span> Design</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <p><span>04-</span> IOS Development</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <p><span>04-</span> Andriod Development</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:94%">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>   	<!-- End container -->
                        </section>   <!-- End section -->

                        <!-- Start Portfolio Section
                                =========================================== -->

                        <section class="portfolio section" id="portfolio">
                            <div class="container">
                                <div class="row " >
                                    <div class="col-lg-12">

                                        <!-- section title -->
                                        <div class="title text-center">
                                            <h2>Our <span class="color">Works</span></h2>
                                            <div class="border"></div>
                                        </div>
                                        <!-- /section title -->
                                    </div> <!-- /end col-lg-12 -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portfolio-filter">
                                            <button  type="button" data-filter="all">All</button>
                                            <button type="button" data-filter=".photography">Photography</button>
                                            <button type="button" data-filter=".design">Design</button>
                                            <button type="button" data-filter=".development">Development</button>
                                            <button type="button" data-filter=".item1">item1</button>
                                            <button type="button" data-filter=".item2">item2</button>
                                            <button type="button" data-filter=".item3">item3</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row portfolio-items-wrapper">
                                    @foreach($my_works as $work)
                                        <div class="mix col-md-4 {{$work->category}}">
                                            <div class="portfolio-block">
                                                <img class="img-responsive" src="{{url('dashboard/images/works/'.$work->image)}}" style="height: 250px;width: 100%;"/>
                                                <div class="caption">
                                                    <a class="search-icon image-popup" data-effect="mfp-with-zoom" href="{{url('dashboard/images/works/'.$work->image)}}" data-lightbox="">
                                                        <i class="tf-ion-android-search"></i>
                                                    </a>
                                                    <h4><a href="">{{$work->title}}</a></h4>
                                                    <p>{{str_limit($work->body , 50)}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>	<!-- end container -->
                        </section>   <!-- End section -->

                        <!--
                        Start Counter Section
                        ==================================== -->

                        <section id="counter" class="parallax-section bg-1 section overly">
                            <div class="container">
                                <div class="row">

                                    <!-- first count item -->
                                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
                                        <div class="counters-item">
                                            <i class="tf-ion-android-happy"></i>
                                            <span data-speed="3000" data-to="320">320</span>
                                            <h3>Happy Clients</h3>
                                        </div>
                                    </div>
                                    <!-- end first count item -->

                                    <!-- second count item -->
                                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
                                        <div class="counters-item">
                                            <i class="tf-ion-archive"></i>
                                            <span data-speed="3000" data-to="565">565</span>
                                            <h3>Projects completed</h3>
                                        </div>
                                    </div>
                                    <!-- end second count item -->

                                    <!-- third count item -->
                                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                                        <div class="counters-item">
                                            <i class="tf-ion-thumbsup"></i>
                                            <span data-speed="3000" data-to="95">95</span>
                                            <h3>Positive feedback</h3>

                                        </div>
                                    </div>
                                    <!-- end third count item -->

                                    <!-- fourth count item -->
                                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                        <div class="counters-item kill-margin-bottom">
                                            <i class="tf-ion-coffee"></i>
                                            <span data-speed="3000" data-to="2500">2500</span>
                                            <h3>Cups of Coffee</h3>
                                        </div>
                                    </div>
                                    <!-- end fourth count item -->

                                </div> 		<!-- end row -->
                            </div>   	<!-- end container -->
                        </section>   <!-- end section -->

                        <!--
                        Start Our Team
                        =========================================== -->
                        <section id="our-team" class="section">
                            <div class="container">
                                <div class="row">

                                    <!-- section title -->
                                    <div class="title text-center wow fadeInUp" data-wow-duration="500ms">
                                        <h2>Our <span class="color">Team</span></h2>
                                        <div class="border"></div>
                                    </div>
                                    <!-- /section title -->

                                    @foreach($all_users as $user)
                                    <!-- team member -->
                                    <div class="col-md-3 col-sm-6 col-xs-12  wow fadeInDown" data-wow-duration="500ms">
                                        <div class="team-member">
                                            <div class="member-photo">
                                                <!-- member photo -->
                                                    <img class="img-responsive" src="{{url('dashboard/images/users/'.$user->image)}}" style="width: 100%;height: 250px;margin-bottom: 20px;">
                                                <!-- /member photo -->

                                                <!-- member social profile -->
                                                <div class="mask">
                                                    <ul class="list-inline">
                                                        <li><a href="{{$user->facebook}}" target="_blank"><i class="tf-ion-social-facebook"></i></a></li>
                                                        <li><a href="{{$user->twitter}}"><i class="tf-ion-social-twitter" target="_blank"></i></a></li>
                                                        <li><a href="{{$user->instegram}}"><i class="tf-ion-social-linkedin" target="_blank"></i></a></li>
                                                        <li><a href="{{$user->facebook}}"><i class="tf-ion-social-dribbble-outline" target="_blank"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- /member social profile -->
                                            </div>

                                            <!-- member name & designation -->
                                            <div class="member-meta">
                                                <h4>{{$user->name}}</h4>
                                                <p style="height: 80px;">{{str_limit($user->description , 100)}}</p>
                                            </div>
                                            <!-- /member name & designation -->
                                            <!-- /about member -->

                                        </div>
                                    </div>
                                    <!-- end team member -->
                                    @endforeach
                                </div>  	<!-- End row -->
                            </div>   	<!-- End container -->
                        </section>   <!-- End section -->


                        <!-- Start Pricing section
                                =========================================== -->

                        <section id="pricing" class="pricing section">
                            <div class="container">
                                <div class="row">

                                    <!-- section title -->
                                    <div class="title text-center wow fadeInDown" data-wow-duration="500ms">
                                        <h2>Our Greatest<span class="color"> Plans</span></h2>
                                        <div class="border"></div>
                                    </div>
                                    <!-- /section title -->

                                    <!-- single pricing table -->
                                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="200ms">
                                        <div class="price-item">

                                            <!-- plan name & value -->
                                            <div class="price-title">
                                                <h3>Free</h3>
                                                <p><strong class="value">$99</strong>/ month</p>
                                            </div>
                                            <!-- /plan name & value -->

                                            <!-- plan description -->
                                            <ul>
                                                <li>1GB Disk Space</li>
                                                <li>10 Email Account</li>
                                                <li>Script Installer</li>
                                                <li>1 GB Storage</li>
                                                <li>10 GB Bandwidth</li>
                                                <li>24/7 Tech Support</li>
                                            </ul>
                                            <!-- /plan description -->

                                            <!-- signup button -->
                                            <a class="btn btn-transparent" href="#">Signup</a>
                                            <!-- /signup button -->

                                        </div>
                                    </div>
                                    <!-- end single pricing table -->

                                    <!-- single pricing table -->
                                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                                        <div class="price-item">

                                            <!-- plan name & value -->
                                            <div class="price-title">
                                                <h3>Silver</h3>
                                                <p><strong class="value">$149</strong/>/ month</p>
                                            </div>
                                            <!-- /plan name & value -->

                                            <!-- plan description -->
                                            <ul>
                                                <li>1GB Disk Space</li>
                                                <li>10 Email Account</li>
                                                <li>Script Installer</li>
                                                <li>1 GB Storage</li>
                                                <li>10 GB Bandwidth</li>
                                                <li>24/7 Tech Support</li>
                                            </ul>
                                            <!-- /plan description -->

                                            <!-- signup button -->
                                            <a class="btn btn-transparent" href="#">Signup</a>
                                            <!-- /signup button -->

                                        </div>
                                    </div>
                                    <!-- end single pricing table -->

                                    <!-- single pricing table -->
                                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                                        <div class="price-item">

                                            <!-- plan name & value -->
                                            <div class="price-title">
                                                <h3>Gold</h3>
                                                <p><strong class="value">$199</strong/>/ month</p>
                                            </div>
                                            <!-- /plan name & value -->

                                            <!-- plan description -->
                                            <ul>
                                                <li>1GB Disk Space</li>
                                                <li>10 Email Account</li>
                                                <li>Script Installer</li>
                                                <li>1 GB Storage</li>
                                                <li>10 GB Bandwidth</li>
                                                <li>24/7 Tech Support</li>
                                            </ul>
                                            <!-- /plan description -->

                                            <!-- signup button -->
                                            <a class="btn btn-transparent" href="#">Signup</a>
                                            <!-- /signup button -->

                                        </div>
                                    </div>
                                    <!-- end single pricing table -->

                                    <!-- single pricing table -->
                                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="750ms">
                                        <div class="price-item">

                                            <!-- plan name & value -->
                                            <div class="price-title">
                                                <h3>Platinum</h3>
                                                <p><strong class="value">$299</strong/>/ month</p>
                                            </div>
                                            <!-- /plan name & value -->

                                            <!-- plan description -->
                                            <ul>
                                                <li>1GB Disk Space</li>
                                                <li>10 Email Account</li>
                                                <li>Script Installer</li>
                                                <li>1 GB Storage</li>
                                                <li>10 GB Bandwidth</li>
                                                <li>24/7 Tech Support</li>
                                            </ul>
                                            <!-- /plan description -->

                                            <!-- signup button -->
                                            <a class="btn btn-transparent" href="#">Signup</a>
                                            <!-- /signup button -->

                                        </div>
                                    </div>
                                    <!-- end single pricing table -->


                                </div>       <!-- End row -->
                            </div>   	<!-- End container -->
                        </section>   <!-- End section -->

                        <!-- Start Testimonial
                                =========================================== -->

                        <section id="testimonial" class="testimonial overly section bg-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- testimonial wrapper -->
                                        <div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
                                            @foreach($all_testmonials as $test)
                                            <!-- testimonial single -->
                                            <div class="item text-center">

                                                <!-- client photo -->
                                                <div class="client-thumb">
                                                    <img src="{{url('dashboard/images/testmonials/'.$test->image)}}" class="img-responsive" alt="{{$test->title}}">
                                                </div>
                                                <!-- /client photo -->

                                                <!-- client info -->
                                                <div class="client-info">
                                                    <div class="client-meta">
                                                        <h3 style="color: orangered;">{{$test->title}}</h3>
                                                        <span>{{$test->created_at->diffForHumans()}}</span>
                                                    </div>
                                                    <div class="client-comment">
                                                        <p>{{str_limit($test->body , 200)}}</p>
                                                    </div>
                                                </div>
                                                <!-- /client info -->
                                            </div>
                                            <!-- /testimonial single -->
                                            @endforeach
                                        </div>
                                            <!-- /testimonial single -->
                                    </div> 		<!-- end col lg 12 -->
                                </div>	    <!-- End row -->
                            </div>       <!-- End container -->
                        </section>    <!-- End Section -->


                        <!--
                        Start Blog Section
                        =========================================== -->

                        <section id="blog" class="section">
                            <div class="container">
                                <div class="row">

                                    <!-- section title -->
                                    <div class="title text-center wow fadeInDown">
                                        <h2> Latest <span class="color">Posts</span></h2>
                                        <div class="border"></div>
                                    </div>
                                    <!-- /section title -->

                                    <div class="clearfix">

                                        <!-- single blog post -->
                                        @foreach($my_works2 as $post)
                                        <article class="col-md-4 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
                                            <div class="post-block">
                                                <div class="media-wrapper">
                                                    <img style="width: 100%;height: 250px;" src="{{url('dashboard/images/works/'.$post->image)}}" alt="amazing caves coverimage" class="img-responsive">
                                                </div>

                                                <div class="content">
                                                    <h3><a href="">{{$post->title}}</a></h3>
                                                    <p>{{str_limit($post->body , 150)}}</p>
                                                    <a class="btn btn-transparent" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                        </article>
                                        @endforeach
                                        <!-- /single blog post -->

                                        <!-- single blog post -->
                                        <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
                                            <div class="post-block">
                                                <div id="gallery-post" class="media-wrapper">
                                                    @foreach($my_works_slider as $post_slider)
                                                    <div class="item">
                                                        <img style="width: 100%;height: 250px;" src="{{url('dashboard/images/works/'.$post_slider->image)}}" alt="blog post" class="img-responsive">
                                                    </div>
                                                    @endforeach
                                                </div>

                                                <div class="content">
                                                    <h3><a href="#">{{$post_slider->title}}</a></h3>
                                                    <p>{{str_limit($post_slider->body , 150)}}</p>
                                                    <a class="btn btn-transparent" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- end single blog post -->

                                        <!-- single blog post -->
                                        @foreach($my_works as $post)
                                        <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                                            <div class="post-block">
                                                <div class="media-wrapper">
                                                    <img  style="width: 100%;height: 250px;" src="{{url('dashboard/images/works/'.$post->image)}}" alt="amazing caves coverimage" class="img-responsive">
                                                </div>

                                                <div class="content">
                                                    <h3><a href="">{{$post->title}}</a></h3>
                                                    <p >{{str_limit($post_slider->body , 150)}}</p>
                                                    <a class="btn btn-transparent" href="single-post.html">Read more</a>
                                                </div>
                                            </div>
                                        </article>
                                        @endforeach
                                        <!-- end single blog post -->
                                    </div>

                                    <div class="all-post text-center">
                                        <a class="btn btn-main" href="#">View All Post</a>
                                    </div>

                                </div> <!-- end row -->
                            </div> <!-- end container -->
                        </section> <!-- end section -->


                        <!-- Srart Contact Us
                        =========================================== -->
                        <section id="contact-us" class="contact-us section-bg">
                            <div class="container">
                                <div class="row">

                                    <!-- section title -->
                                    <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                                        <h2>Get In <span class="color">Touch</span></h2>
                                        <div class="border"></div>
                                    </div>
                                    <!-- /section title -->

                                    <!-- Contact Details -->
                                    @foreach($all_settings as $setting)
                                    <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                                        <h3>{{$setting->name}}</h3>
                                        <p>{{$setting->description}}</p>
                                        <div class="contact-details">
                                            <div class="con-info clearfix">
                                                <i class="tf-map-pin"></i>
                                                <span>Address: {{$setting->address}}</span>
                                            </div>

                                            <div class="con-info clearfix">
                                                <i class="tf-ion-ios-telephone-outline"></i>
                                                <span>Phone: {{$setting->phones}}</span>
                                            </div>

                                            <div class="con-info clearfix">
                                                <i class="tf-ion-iphone"></i>
                                                <span>Fax: {{$setting->fax}}</span>
                                            </div>

                                            <div class="con-info clearfix">
                                                <i class="tf-ion-ios-email-outline"></i>
                                                <span>Email: {{$setting->email}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- / End Contact Details -->

                                    <!-- Contact Form -->
                                    <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                        <form id="contact-form" method="post" action="sendmail.php" role="form">

                                            <div class="form-group">
                                                <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                                            </div>

                                            <div class="form-group">
                                                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                                            </div>

                                            <div class="form-group">
                                                <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                                            </div>

                                            <div id="mail-success" class="success">
                                                Thank you. The Mailman is on His Way :)
                                            </div>

                                            <div id="mail-fail" class="error">
                                                Sorry, don't know what happened. Try later :(
                                            </div>

                                            <div id="cf-submit">
                                                <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                                            </div>

                                        </form>
                                    </div>
                                    <!-- ./End Contact Form -->

                                </div> <!-- end row -->
                            </div> <!-- end container -->

                            <!-- Google Map -->
                            <div class="google-map">
                                <div id="map-canvas"></div>
                            </div>
                            <!-- /Google Map -->

                        </section> <!-- end section -->





                        <!-- end Contact Area
                        ========================================== -->

                        <footer id="footer" class="bg-one">
                            <div class="container">
                                <div class="row wow fadeInUp" data-wow-duration="500ms">
                                    <div class="col-lg-12">

                                        <!-- Footer Social Links -->
                                        @foreach($all_settings as $setting)
                                        <div class="social-icon">
                                            <ul class="list-inline">
                                                <li><a href="{{$setting->facebook}}" target="_blank"><i class="tf-ion-social-facebook"></i></a></li>
                                                <li><a href="{{$setting->twitter}}" target="_blank"><i class="tf-ion-social-twitter"></i></a></li>
                                                <li><a href="{{$setting->facebook}}" target="_blank"><i class="tf-ion-social-google-outline"></i></a></li>
                                                <li><a href="{{$setting->youtube}}" target="_blank"><i class="tf-ion-social-youtube"></i></a></li>
                                                <li><a href="{{$setting->behance}}" target="_blank"><i class="tf-ion-social-linkedin"></i></a></li>
                                                <li><a href="{{$setting->facebook}}" target="_blank"><i class="tf-ion-social-pinterest-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        @endforeach
                                        <!--/. End Footer Social Links -->

                                        <!-- copyright -->
                                        <div class="copyright text-center">
                                            <a href="index.html">
                                                <!-- <img src="images/logo-meghna.png" alt="Meghna" />  -->
                                                <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="3">
                                                            <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
                                                            <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
                                                            <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                            <br />

                                            <p>Design And Developed by <a href="http://www.themefisher.com"> Themefisher Team</a>. Copyright &copy; <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.
                                                <br>Get More <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">Free Bootstrap Templates</a>
                                            </p>
                                        </div>
                                        <!-- /copyright -->

                                    </div> <!-- end col lg 12 -->
                                </div> <!-- end row -->
                            </div> <!-- end container -->
                        </footer> <!-- end footer -->

                        <div id="scroll-up">
                            up
                        </div>

                @endsection
            </div>
        </div>
    </div>
@endsection
