@extends('layouts.light')
@section('pagetitle')
    Home
@endsection
.
@section('content')
<!-- /.container -->
<header class="slider-main">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('assets/img/istockphoto-105.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to CrackIT Limited</h3>
                    <p>A Great software Consulting firm</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('assets/img/istockphoto2.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Best Consulting Services.</h3>
                    <p>A Great software Consulting firm</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('assets/img/istockphoto612.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to CrackIT</h3>
                    <p>A Great software Consulting firm</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<!-- Page Content -->
<div class="container-fluid">
    <!-- About Section -->
    <div class="about-main">
        <div class="row">
            <div class="col-lg-6">
                <h2>Welcome to CrackIT</h2>
                <p>CrackIT Limited is an award-winning digital agency in Bangladesh! We have a Smart, Dynamic
                    and Dedicated team of talented professionals for Web, Mobile, E-Commerce & Digital Marketing
                    projects work.</p>
                <br>
                <p> we have been working successfully for the last 5+ years! We have extraordinary track records
                    of designing and developing mission-critical business-focused projects. For application
                    planning to deployment stages, we strongly give high-end priority on applying standard best
                    practices for the professional project work.</p>
                <h5>Our smart approach</h5>
                <ul>
                    <li>On time delivery.</li>
                    <li>IT security.</li>
                    <li>24/7 hour supports and solutions.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="{{url('assets/img/cra.jpg')}}" alt="" />
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>

<div class="services-bar">
    <div class="container-fluid">
        <h1 class="py-4">Our Best Services </h1>
        <!-- Services Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-img">
                        <img class="img-fluid" src="{{url('assets/img/services-img-01.jpg')}}" alt="" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-header"> Business management System </h4>
                        <p class="card-text">Business amangement system coverage protects businesses from losses
                            due to events that may occur during the .......</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-img">
                        <img class="img-fluid" src="{{url('assets/img/services-img-02.jpg')}}" alt="" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-header"> Custom ERP Development </h4>
                        <p class="card-text">Custom ERP Development is a mystery to the vast majority of people.
                            While most understand that money flows.....</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-img">
                        <img class="img-fluid" src="{{url('assets/img/services-img-03.jpg')}}" alt="" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-header"> HRM & CRM </h4>
                        <p class="card-text">Human resources is the set of people who make up the workforce of
                            an organization, business sector.....</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-img">
                        <img class="img-fluid" src="{{url('assets/img/services-img-04.jpg')}}" alt="" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-header">Software As A Service (SaaS) </h4>
                        <p class="card-text">Software As A Service (SaaS) is a set of competitive moves and
                            actions that a business uses to attract customers......p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-img">
                        <img class="img-fluid" src="{{url('assets/img/services-img-05.jpg')}}" alt="" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-header"> Custom Software Development </h4>
                        <p class="card-text">Custom Software Development is the process of leading the work of a
                            team to achieve all the project goals......</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-img">
                        <img class="img-fluid" src="{{url('assets/img/services-img-06.jpg')}}" alt="" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-header">E-Commerce </h4>
                        <p class="card-text">E-Commerce Development blends consumer behavior and economic trends
                            to confirm and improve your business idea....</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{url('assets/img/imransedk.jpg')}}" class="img-fluid rounded mb-4" alt="">
        </div>
        <div class="col-lg-6">
            <h1>We provide quality solutions for clients</h1>
            <p>CrackIT Limited gives it a priority no. 1 when the question of Software Quality Assurance (SQA)
                comes and we deal with all software development processes starting from defining requirements to
                coding until release. Its prime goal is to ensure quality.</p>
            <p>Since 2018, CrackIT Limited has been providing its services to engineer and automate business
                organizations through innovative, eminance, time-bound, secure and value-added solution.
                Services provided by MicroMac help its clients by improving the way they work and manage
                information.</p>
        </div>
    </div>
</div>

<div class="about-inner">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-lg-6">
                <div class="left-ab">
                    <h3>Our Mission</h3>
                    <p>Think about the brands you purchase from over and over. Why do you choose to buy products
                        and or services from them even when cheaper options exist?

                        Well, there's a good reason for it — because of their values. The best brands combine
                        physical, emotional, and logical elements into one exceptional customer (and employee)
                        experience that you value as much as they do.

                        When your brand creates a genuine connection with customers and employees, they'll stay
                        loyal to your company, thereby increasing your overall profitability. But this type of
                        success doesn’t happen overnight.</p>
                    <p>As a company grows, its objectives and goals may be reached, and in turn, they'll change.
                        Therefore, mission statements should be revised as needed to reflect the business's new
                        culture as previous goals are met.

                        But first, you have to understand how to write a proper mission statement to build off
                        of as your company evolves.</p>
                    <ul>
                        <li>To offer designer eyewear at a revolutionary price while leading the way for
                            socially conscious businesses.</li>
                        <li>Become essential to our customers by providing differentiated products and services
                            to help them achieve their aspirations.</li>
                        <li>Question Assumptions. Think Deeply. Iterate as a Lifestyle. Details, Details. Design
                            is Everywhere. Integrity.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-ab">
                    <img class="img-fluid rounded mb-4" src="{{url('assets/img/mission-img.jpg')}}" alt="" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="right-ab">
                    <img class="img-fluid rounded mb-4" src="{{url('assets/img/vision-img.jpg')}}" alt="" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="left-ab">
                    <h3>Our Vision</h3>
                    <p>"We believe that we are on the face of the earth to make great products and that's not
                        changing. We are constantly focusing on innovating. We believe in the simple not the
                        complex. We believe that we need to own and control the primary technologies behind the
                        products that we make, and participate only in markets where we can make a significant
                        contribution. We believe in saying no to thousands of projects, so that we can really
                        focus on the few that are truly important and meaningful to us. We believe in deep
                        collaboration and cross-pollination of our groups, which allow us to innovate in a way
                        that others cannot. And frankly, we don't settle for anything less than excellence in
                        every group in the company, and we have the self-honesty to admit when we're wrong and
                        the courage to change. And I think regardless of who is in what job those values are so
                        embedded in this company that Apple will do extremely well."</p>
                    <ul>
                        <li>To help people enjoy life by offering an affordable solution to health care.</li>
                        <li>To provide delicious, seasonal food and a fun atmosphere that will bring customers
                            back again and again.</li>
                        <li>As we move towards our goal of being a world-class university, we will support
                            research on a global scale. Locally, our campus will service the research needs of
                            the learning community, granting access to many informational resources.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <h1 class="text-center">Our Specialization</h1>
    <h5 class="text-center">The highly organized dedicated team of CrackIT Limited can do any challenging
        projects!</h5>
    <div class="row m-3">
        <div class="col-sm-3"><img class="img1 " src="{{url('assets/img/php.png')}}" height="200px" width="200px" alt=""></div>
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/laravel.png')}}" height="200px" width="200px" alt="">
        </div>
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/codeigniter.png')}}" height="200px" width="200px" alt="">
        </div>
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/react.png')}}" height="200px" width="200px" alt="">
        </div>
    </div>
    <div class="row m-3">
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/wordpress.png')}}" height="200px" width="200px" alt="">
        </div>
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/shopify.jpg')}}" height="200px" width="200px" alt="">
        </div>
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/vue.png')}}" height="200px" width="200px" alt=""></div>
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/angular.svg')}}" height="200px" width="200px" alt="">
        </div>
    </div>
    <div class="row m-3">
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/mysql.png')}}" height="200px" width="200px" alt="">
        </div>
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/java.png')}}" height="200px" width="200px" alt="">
        </div>
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/jquery.png')}}" height="200px" width="200px" alt="">
        </div>
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/swift.png')}}" height="200px" width="200px" alt="">
        </div>
    </div>
    <div class="row m-3">
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/js.svg')}}" height="200px" width="200px" alt=""></div>
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/bs5.png')}}" height="200px" width="200px" alt=""></div>
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/flutter.png')}}" height="200px" width="200px" alt="">
        </div>
        <div class="col-sm-3"><img class="img1" src="{{url('assets/img/magento.png')}}" height="200px" width="200px" alt="">
        </div>
    </div>
</div>

<!-- /.container -->
@endsection