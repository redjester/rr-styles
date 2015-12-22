<?php
	$pageTitle = 'Site Map';
	$bodyClass = 'page-site-map';
	
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
			<p class="section-description">Example of a basic site map.</p>
		</div>
	</div>
</header>

<div class="section">
	<div class="section-content row">
		<div class="col">
			<ul>
				<li><a href="/">Home</a></li>
				<li>
					<a href="#">Lorem Ipsum</a>
					<ul>
						<li><a href="#">Dolor Sit Amet</a></li>
						<li><a href="#">Consectetuer Adipiscing Elit</a></li>
					</ul>
				</li>
				<li><a href="contact-form.php">Contact Us</a></li>
				<li><a href="kitchen-sink.php">Kitchen Sink</a></li>
			</ul>
		</div>
	</div>
</div>

<?php include('includes/footer.php') ?>