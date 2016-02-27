<?php
	$pageTitle = 'Examples';
	$bodyClass = 'page-examples';
	$currentNavItem = 'examples';

	include('includes/header.php');
?>

<header class="section home section-page-header">
	<div class="section-content row">
		<div class="col">
			<h1 class="section-title">What are you looking for?</h1>
		</div>
	</div>
	<div class="search-bar-home row">
		<div class="home-search col lg-10 md-12">
			<div class="row">
				<div class="search-type col lg-8 md-8 sm-12">
					<form>
						<label for="SearchType" class="assistive-text">Search Type</label>
						<input type="search" id="SearchType" name="SearchType" placeholder="Plumber, Electrician, Handy-man, etc." maxlength="650" />
						<button class="btn btn-primary">
							<span class="fa fa-search"></span>
							<span class="assistive-text">Go</span>
						</button>
					</form>
				</div>
				<div class="search-near col lg-4 md-4 sm-12">
					<form>
						<label for="SearchNear" class="assistive-text">Search Location</label>
						<input type="search" id="SearchNear" name="SearchNear" placeholder="Near" maxlength="150" />
						<button class="btn btn-primary">
							<span class="fa fa-search"></span>
							<span class="assistive-text">Go</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<ul class="quick-links list-unstyled row">
		<li class="col lg-3 md-3 sm-6 xs-12">
			<a href="#ownBusiness">
				<h2>Own a <span class="wrap-lg">Business&#63;</span></h2>
				<p>Register to gain instant recognition</p>
				<i class="fa fa-angle-down"></i>
			</a>
		</li>
		<li class="col lg-3 md-3 sm-6 xs-12">
			<a href="#getQuote">
				<h2>Get a <span class="wrap-lg">Quote</span></h2>
				<p>We&#39;ll do the work for you</p>
				<i class="fa fa-angle-down"></i>
			</a>
		</li>
		<li class="col lg-3 md-3 sm-6 xs-12">
			<a href="#howWorks">
				<h2>How it <span class="wrap-lg">all works</span></h2>
				<p>Our process in a nutshell</p>
				<i class="fa fa-angle-down"></i>
			</a>
		</li>
		<li class="col lg-3 md-3 sm-6 xs-12">
			<a href="#leaveReview">
				<h2>Leaving a <span class="wrap-lg">review</span></h2>
				<p>We&#39;ll walk you through the easy steps</p>
				<i class="fa fa-angle-down"></i>
			</a>
		</li>
	</ul>
</header>

<div class="section section-default register-business-home-section section-default" id="ownBusiness">
	<header class="section-header row">
		<div class="col">
			<h2 class="section-title">Register your business</h2>
		</div>
	</header>
	<div class="section-content row">
		<div class="col md-6 sm-12">
			<p class="line-height-lg">Registering your business will give you sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			<a class="btn btn-primary btn-arrow" href="#" title="Learn more about the benefits">Get Started</a>
		</div>
		<div class="col md-6 sm-12">
			<ul class="list-lg">
				<li>Huge benefits when you register</li>
				<li>This is why you should register</li>
				<li>Another benefit when you register</li>
			</ul>
		</div>
	</div>
</div>
<div class="section section-default get-a-quote-home-section section-alt" id="getQuote">
	<header class="section-header row">
		<div class="col">
			<h2 class="section-title">Get a quote</h2>
		</div>
	</header>
	<div class="section-content row">
		<div class="col md-5 sm-12">
			<div class="shape-wrapper">
				<span class="bg-crl"></span>
			</div>
			<h6 class="rr-sprite rr-sprite1">Registered Reviews Get a Quote</h6>
		</div>
		<div class="col md-7 sm-12">
			<p class="line-height-lg">Let us do the hard work and ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			<a class="btn btn-primary btn-arrow" href="#" title="Learn how to quickly get a quote">Get Quote</a>
		</div>
	</div>
</div>
<div class="section section-default how-it-works-section section-default" id="howWorks">
	<header class="section-header row">
		<div class="col">
			<h2 class="section-title">How it works</h2>
		</div>
	</header>
	<ul class="how-it-works-list list-unstyled row">
		<li class="col lg-3 md-3 sm-6 xs-12">
			<div class="list-item">
				<span class="rr-sprite rr-sprite2"></span>
				<h2>Verified <span class="wrap-lg">Reviews</span></h2>
				<p>Every one of our reviews are verified through an actual invoice giving you the utmost confidence in its accuracy.</p>
			</div>
		</li>
		<li class="col lg-3 md-3 sm-6 xs-12">
			<span class="rr-sprite rr-sprite3"></span>
			<h2>100&#37; Free</h2>
			<p>Unlike other sites, we won&rsquo;t charge you a dime to search and find results on our site.</p>
		</li>
		<li class="col lg-3 md-3 sm-6 xs-12">
			<span class="rr-sprite rr-sprite4"></span>
			<h2>Local</h2>
			<p>Unlike other review sites we specialize in Wisconsin businesses.</p>
		</li>
		<li class="col lg-3 md-3 sm-6 xs-12">
			<span class="rr-sprite rr-sprite5"></span>
			<h2>Seamless</h2>
			<p>We can quickly connect you to affordable, trusted local businesses for any service need.</p>
		</li>
	</ul>
</div>
<div class="section section-default leave-a-review-home-section section-default" id="leaveReview">
	<header class="section-header row">
		<div class="col">
			<h2 class="section-title">Leaving a review&#63;</h2>
		</div>
	</header>
	<div class="section-content row">
		<div class="col md-12 sm-12">
			<p class="line-height-md">Follow these easy steps. Don't worry, your invoice is only viewable to those needing to verify it, so your information is safe. <span class="wrap-lg">Please note that an invoice is required to leave a review.</span></p>
		</div>
	</div>
	<div class="section-content">
		<ul class="leave-review-list list-unstyled row">
			<li class="col lg-4 md-4 sm-4 xs-12">
				<div class="list-item">
					<h5>Take a picture of <span class="wrap-lg">your invoice</span></h5>
				</div>
			</li>
			<li class="col lg-4 md-4 sm-4 xs-12">
				<div class="list-item">
					<h5>Upload from <span class="wrap-lg">your computer</span></h5>
				</div>
			</li>
			<li class="col lg-4 md-4 sm-4 xs-12">
				<div class="list-item">
					<h5>Answer a few <span class="wrap-lg">questions &#38; a description </span><span class="wrap-lg">of your experience</span></h5>				
				</div>
			</li>
		</ul>
		<div class="row">
			<div class="col sm-12 btn-center">
				<a class="btn btn-primary btn-arrow" href="#" title="Verify your review by uploading an invoice">Upload an invoice</a>
			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php') ?>