<?php
	$pageTitle = 'Internal Server Error';
	$bodyClass = 'page-500';
	
	include('includes/header.php');
?>

<section class="section">
	<div class="section-content row">
		<div class="col">
			<h1 class="section-title"><?php echo $pageTitle ?></h1>
			<p>The server encountered an internal error or misconfiguration and was unable to complete your request. You can try to resolve the problem by:</p>
			<ul>
				<li>Clicking the <a href="#" onclick="history.back(-1);return false">back button</a> on your browser</li>
				<li>Using the navigation at the top of the page</li>
				<li>Using the <a href="/site-map.php">site map</a></li>
			</ul>
		</div>
	</div>
</div>

<?php include('includes/footer.php') ?>