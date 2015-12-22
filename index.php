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
		<div class="home-search col lg-8 md-12">
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
</header>

<div class="section">
	<div class="section-content row">
		<div class="col">
			
		</div>
	</div>
</div>

<?php include('includes/footer.php') ?>