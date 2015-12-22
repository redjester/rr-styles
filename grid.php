<?php
	$pageTitle = 'Grid Demo';
	$bodyClass = 'page-grid';
	$currentNavItem = 'grid';
	
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
			<p class="section-description">Examples of grid layouts.</p>
		</div>
	</div>
</header>

<div class="section">
	<div class="section-content row panel-group">
		<div class="col sm-12">
			<div class="panel panel-primary align-center">
				<code>col sm-12</code>
			</div>
		</div>
		<div class="col sm-12 md-8">
			<div class="panel panel-primary align-center">
				<code>col sm-12 md-8</code>
			</div>
		</div>
		<div class="col sm-12 md-4 last">
			<div class="panel panel-primary align-center" style="display:flex;align-items:center;justify-content:center;height:118px">
				<code>col sm-12 md-4</code>
			</div>
		</div>
		<div class="col sm-12 md-4">
			<div class="panel panel-primary align-center">
				<code>col sm-12 md-4</code>
			</div>
		</div>
		<div class="col sm-12 md-4">
			<div class="panel panel-primary align-center">
				<code>col sm-12 md-4</code>
			</div>
		</div>
	</div>
</div>

<div class="section no-divider">
	<div class="section-content row panel-group">
		<div class="col xs-12 sm-6 md-4 lg-2">
			<div class="panel panel-primary align-center">
				<span class="large show-for-lg">2</span>
				<span class="large show-for-md">4</span>
				<span class="large show-for-sm hide-for-xs">6</span>
				<span class="large show-for-xs">12</span>
			</div>
		</div>
		<div class="col xs-12 sm-6 md-4 lg-2">
			<div class="panel panel-primary align-center">
				<span class="large show-for-lg">2</span>
				<span class="large show-for-md">4</span>
				<span class="large show-for-sm hide-for-xs">6</span>
				<span class="large show-for-xs">12</span>
			</div>
		</div>
		<div class="col xs-12 sm-6 md-4 lg-2">
			<div class="panel panel-primary align-center">
				<span class="large show-for-lg">2</span>
				<span class="large show-for-md">4</span>
				<span class="large show-for-sm hide-for-xs">6</span>
				<span class="large show-for-xs">12</span>
			</div>
		</div>
		<div class="col xs-12 sm-6 md-4 lg-2">
			<div class="panel panel-primary align-center">
				<span class="large show-for-lg">2</span>
				<span class="large show-for-md">4</span>
				<span class="large show-for-sm hide-for-xs">6</span>
				<span class="large show-for-xs">12</span>
			</div>
		</div>
		<div class="col xs-12 sm-6 md-4 lg-2">
			<div class="panel panel-primary align-center">
				<span class="large show-for-lg">2</span>
				<span class="large show-for-md">4</span>
				<span class="large show-for-sm hide-for-xs">6</span>
				<span class="large show-for-xs">12</span>
			</div>
		</div>
		<div class="col xs-12 sm-6 md-4 lg-2">
			<div class="panel panel-primary align-center">
				<span class="large show-for-lg">2</span>
				<span class="large show-for-md">4</span>
				<span class="large show-for-sm hide-for-xs">6</span>
				<span class="large show-for-xs">12</span>
			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php') ?>