@extends('layouts/light')
@section('pagetitle')
    Management
@endsection

@section('content')
<div class="full-title">
    <div class="container-fluid">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3"> Management</h1>
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">Management</li>
            </ol>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- Team Members -->
    <div class="team-members-box">
        <h2>Our Consultants</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/shariful.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Md Shariful Islam</h3>
                            <span class="post">Managing Director</span>
                            <ul class="social">
                                <li><a target="_blank" href="https://www.facebook.com/shariful7200"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/shariful7461"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a target="_blank"
                                        href="https://www.linkedin.com/in/shariful-islam-364430235/"><i
                                            class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/zayed.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Syed Abu Zayed Hossain</h3>
                            <span class="post">Cheif Executive Officer (CEO)</span>
                            <ul class="social">
                                <li><a target="_blank" href="https://www.facebook.com/zayed59/"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/Zayed259/"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/zayed259"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/in/zayed259/"><i
                                            class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="our-team">
                        <img class="img-fluid" src="{{url('assets/img/irin.jpg')}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">Irin Binte Abbas</h3>
                            <span class="post">Software Architect</span>
                            <ul class="social">
                                <li><a target="_blank" href="https://www.facebook.com/IrinBinteAbbbas"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>
<!-- full Title -->


<div class="container-fluid">
    <!-- About Content -->
    <div class="about-main">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="{{url('assets/img/lab.jpg')}}" alt="" />
            </div>
            <div class="col-lg-6">
                <h2>About Modern Business</h2>
                <p>Business Strategy is an online course that enables anyone to think and act strategically.
                    You’ll
                    learn an effective, easy-to-grasp framework that some of the world’s best companies use to
                    create
                    value and achieve outstanding financial performance.</p>
                <li>Assess business opportunities through the lens of value creation</li>
                <li>Apply the value stick, a research-based framework for strategy formulation, to key strategic
                    decisions that companies face today</li>
                <li>Master the language and tools of business strategy to contribute meaningfully to strategic
                    conversations and your team’s success</li>
                <li>Create value for customers, employees, and suppliers, often in surprising ways, that rival
                    companies
                    will find hard to match</li>
                <li>Build sustainable success with the help of complements and network effects</li>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>

@endsection
