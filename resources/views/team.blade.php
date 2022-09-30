@extends('layouts/light')
@section('pagetitle')
    Team
@endsection
@section('content')
<div class="full-title">
    <div class="container-fluid">
        <!-- Page Heading/Breadcrumbs -->

        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">Our Team</li>
            </ol>
        </div>
    </div>
</div>

<div class="container-fluid">
    <!-- Team Members -->
    <div class="team-members-box text-center">
        <h2>Our Team</h2>
        <div class="row">
            <h3 class="text-center p-5">
                Our team consists of highly qualified, experienced, and knowledgeable software professionals who
                are passionate and dedicated to our clients.
            </h3>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/umer.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Md Omar Faruk</h3>
                            <span class="post">Chief Technology Officer (CTO)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/imran.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Imran Hossen</h3>
                            <span class="post">Project Manager</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/adnan.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Adnan Hossain</h3>
                            <span class="post">Software Engineer</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/mohsin.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Mohsin Adnan</h3>
                            <span class="post">Digital Marketing & SEO Expert </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/tajrin.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Tajrin Tarin</h3>
                            <span class="post">UI/UX Designer</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/feroze.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Feroze Alam</h3>
                            <span class="post">Software Engineer</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/tasnim.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Tasnim Rahman</h3>
                            <span class="post">Front-End Developer</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/rounoqul.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title"> S. M. Rounoqul Islam</h3>
                            <span class="post">2D & 3D Animator</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/gave.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Nahida Afroz Mitu</h3>
                            <span class="post">2D & 3D Animator</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/sohan.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Nuruddin Talukder Shohan</h3>
                            <span class="post">Assistant System Support</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/nisha.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Nisha Azmerry</h3>
                            <span class="post">Apex Devoloper</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/mahamudur.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Md. Mahamdudur Rahman</h3>
                            <span class="post">Graphics Designer</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/sadia.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Sadia Haque Rumpa</h3>
                            <span class="post">Network Engineer</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/ibrahim.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Ibrahim Sarkar</h3>
                            <span class="post">Jr. Software Engineer</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/selina.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Selina Akter</h3>
                            <span class="post">Graphics Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/tamim.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Md Tamimul Islam</h3>
                            <span class="post">Jr. Software Engineer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/taijul.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Taijul Islam</h3>
                            <span class="post">Jr. Software engineer</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /.row -->
    </div>
</div>
@endsection
