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
	<div class="search-bar row">
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
				<h2>Own a Business&#63;</h2>
				<p>Register to gain instant recognition</p>
				<i class="fa fa-angle-down"></i>
			</a>
		</li>
		<li class="col lg-3 md-3 sm-6 xs-12">
			<a href="#getQuote">
				<h2>Get a Quote</h2>
				<p>We&#39;ll do the work for you</p>
				<i class="fa fa-angle-down"></i>
			</a>
		</li>
		<li class="col lg-3 md-3 sm-6 xs-12">
			<a href="#howWorks">
				<h2>How it all works</h2>
				<p>Our process in a nutshell</p>
				<i class="fa fa-angle-down"></i>
			</a>
		</li>
		<li class="col lg-3 md-3 sm-6 xs-12">
			<a href="#leaveReview">
				<h2>Leaving a review</h2>
				<p>We&#39;ll walk you through the easy steps</p>
				<i class="fa fa-angle-down"></i>
			</a>
		</li>
	</ul>
</header>

<div class="section">
	<div class="section-content row">
		<div class="col">
			
		</div>
	</div>
</div>

<?php include('includes/footer.php') ?>