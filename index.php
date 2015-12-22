<?php
	$pageTitle = 'Examples';
	$bodyClass = 'page-examples';
	$currentNavItem = 'examples';

	include('includes/header.php');
?>

<nav class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
	<div class="row">
		<div class="col">
			<h2 class="assistive-text">Breadcrumb navigation</h2>
			<ol>
				<li><a href="/" itemprop="url"><span itemprop="title">Home</span></a></li>
				<li><span itemprop="title"><?php echo $pageTitle ?></span></li>
			</ol>
		</div>
	</div>
</nav>

<header class="section section-page-header">
	<div class="section-content row">
		<div class="col">
			<h1 class="section-title"><?php echo $pageTitle ?></h1>
			<p class="section-description">Below are examples of some commonly used components.</p>
		</div>
	</div>
</header>

<div class="section">
	<div class="section-content row">
		<div class="col">
			<ul class="large">
				<li><a href="home.php">Home Page</a></li>
				<li><a href="grid.php">Grid</a></li>
				<li><a href="tabs.php">Tabs</a></li>
				<li><a href="videos.php">Videos</a></li>
				<li><a href="billing-form.php">Billing Form</a></li>
				<li><a href="contact-form.php">Contact Form</a></li>
				<li><a href="kitchen-sink.php">Kitchen Sink</a></li>
			</ul>
			<ul class="large">
				<li><a href="invalid-page.php">404 Page Not Found</a></li>
				<li><a href="error.php">500 Internal Server Error</a></li>
			</ul>
		</div>
	</div>
</div>

<?php include('includes/footer.php') ?>