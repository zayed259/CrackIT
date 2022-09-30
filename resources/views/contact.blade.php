@extends('layouts/light')
@section('pagetitle')
    Contact
@endsection

@section('content')
    <!-- full Title -->
		<div class="full-title">
			<div class="container">
				<!-- Page Heading/Breadcrumbs -->
				<h1 class="mt-4 mb-3"> Contact </h1>
				<div class="breadcrumb-main">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="{{url('/')}}">Home</a>
						</li>
						<li class="breadcrumb-item active">Contact</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="contact-main">
			<div class="container">
				<!-- Content Row -->
				<div class="row">
					<!-- Map Column -->
					<div class="col-lg-8 mb-4 contact-left">
						<h3>Send us a Message</h3>
						<form name="sentMessage" id="contactForm" novalidate>
							<div class="control-group form-group">
								<div class="controls">
									<input type="text" placeholder="Full Name" class="form-control" id="name" required
										data-validation-required-message="Please enter your name.">
									<p class="help-block"></p>
								</div>
							</div>
							<div class="control-group form-group">
								<div class="controls">
									<input type="tel" placeholder="Phone Number" class="form-control" id="phone"
										required data-validation-required-message="Please enter your phone number.">
								</div>
							</div>
							<div class="control-group form-group">
								<div class="controls">
									<input type="email" placeholder="Email Address" class="form-control" id="email"
										required data-validation-required-message="Please enter your email address.">
								</div>
							</div>
							<div class="control-group form-group">
								<div class="controls">
									<textarea rows="5" cols="100" placeholder="Message" class="form-control"
										id="message" required
										data-validation-required-message="Please enter your message" maxlength="999"
										style="resize:none"></textarea>
								</div>
							</div>
							<div id="success"></div>
							<!-- For success/fail messages -->
							<button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
						</form>
					</div>
					<!-- Contact Details Column -->
					<div class="col-lg-4 mb-4 contact-right">
						<h3>Contact Details</h3>
						<p>
							H-26, R-04, B-B
							<br>MIrpur-10, Dhaka
							<br>
						</p>
						<p>
							<i class="fas fa-phone fa-rotate-90"></i> +8801911977900
						</p>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<a href="mailto:info@crackit-bd.com"> info@crackit-bd.com </a>
						</p>
						<p>
							<i class="far fa-clock"></i> Sunday - Thursday: 9:00 AM to 6:00 PM
						</p>
						<div class="map-main mt-5">
							<!-- Embedded Google Map -->
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3282331133146!2d90.36650911405016!3d23.80692448456151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0d6f6b8c2ff%3A0x3b138861ee9c8c30!2sMirpur%2010%20Roundabout%2C%20Dhaka%201216%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1664021847709!5m2!1sen!2sus"
								width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>

				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
@endsection