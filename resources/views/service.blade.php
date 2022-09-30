@extends('layouts/light')
@section('pagetitle')
    Services
@endsection
@section('content')
    <!-- full Title -->
		<div class="full-title">
			<div class="container-fluid">
				<!-- Page Heading/Breadcrumbs -->
				<h1 class="mt-4 mb-3">Services</h1>
				<div class="breadcrumb-main">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="{{url('/')}}">Home</a>
						</li>
						<li class="breadcrumb-item active">Services</li>
					</ol>
				</div>
			</div>
		</div>

		<!-- Page Content -->
		<div class="container-fluid">
			<!-- Image Header -->
			<img class="img-fluid rounded mb-4" src="{{url('assets/img/services-big.jpg')}}" alt="" />
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
									due to events that may occur during the .......
                                </p>
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
									While most understand that money flows.....
                                </p>
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
									an organization, business sector.....
                                </p>
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
									actions that a business uses to attract customers......
                                </p>
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
									team to achieve all the project goals......
                                </p>
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
									to confirm and improve your business idea....
                                </p>
							</div>
						</div>
					</div>

				</div>
				<!-- /.row -->
			</div>
		</div>

		<div class="container">
			<!-- Our Customers -->
			<div class="customers-box">
				<h2>Our Customers</h2>
				<div class="row">
					<div class="col-lg-12">
						<div id="customers-slider" class="owl-carousel">
							<div class="mb-4">
								<img class="img-fluid" src="{{url('assets/img/logo_01.png')}}" alt="" />
							</div>
							<div class="mb-4">
								<img class="img-fluid" src="{{url('assets/img/logo_02.png')}}" alt="" />
							</div>
							<div class="mb-4">
								<img class="img-fluid" src="{{url('assets/img/logo_03.png')}}" alt="" />
							</div>
							<div class="mb-4">
								<img class="img-fluid" src="{{url('assets/img/logo_04.png')}}" alt="" />
							</div>
							<div class="mb-4">
								<img class="img-fluid" src="{{url('assets/img/logo_05.png')}}" alt="" />
							</div>
							<div class="mb-4">
								<img class="img-fluid" src="{{url('assets/img/logo_06.png')}}" alt="" />
							</div>
						</div>
					</div>
				</div>
				<!-- /.row -->
			</div>
		</div>
		<!-- /.container -->
@endsection