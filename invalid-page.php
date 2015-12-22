<?php
	$pageTitle = 'Page Not Found';
	$bodyClass = 'page-404';
	
	include('includes/header.php');
?>

<section class="section">
	<div class="section-content row">
		<div class="col">
			<h1 class="section-title"><?php echo $pageTitle ?></h1>
			<p>We&#8217;re sorry, the page you requested is unavailable. Please modify your request by clicking the <a href="#" onclick="history.back(-1);return false">back button</a> on your browser or you can try to resolve the problem by:</p>
			<ul>
				<li>Using the navigation at the top of the page</li>
				<li>Viewing the <a href="/site-map.php">site map</a></li>
				<li>Entering keywords into the search box on the top right of the page</li>
			</ul>
		</div>
	</div>
</section>

<?php include('includes/footer.php') ?>