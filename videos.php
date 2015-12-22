<?php
	$pageTitle = 'Videos';
	$bodyClass = 'page-videos';
	$currentNavItem = 'videos';
	
	include('includes/header.php');
?>

<nav class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
	<div class="row">
		<div class="col">
			<h6 class="assistive-text">Breadcrumb navigation</h6>
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
		</div>
	</div>
</header>

<section class="section">
	<header class="section-header row">
		<div class="col">
			<h2 class="section-title">Fancybox Videos</h2>
		</div>
	</header>

	<div class="section-content">
		<ul class="list-unstyled row">
			<li class="col md-3 sm-6">
				<a class="video-thumb fancybox-video" href="//youtu.be/lVpdzoPZ594" title="Mud Crab">
					<img src="//i1.ytimg.com/vi/lVpdzoPZ594/mqdefault.jpg" alt="Mud Crab" />
				</a>
				<a class="fancybox-video" href="//youtu.be/lVpdzoPZ594">Mud Crab</a> (4:51)
			</li>
			<li class="col md-3 sm-6">
				<a class="video-thumb fancybox-video" href="//youtu.be/jxepnIG1yQQ" title="The Missing Scarf">
					<img src="//i1.ytimg.com/vi/jxepnIG1yQQ/mqdefault.jpg" alt="The Missing Scarf" />
				</a>
				<a class="fancybox-video" href="//youtu.be/xepnIG1yQQ">The Missing Scarf</a> (6:36)
			</li>
			<li class="col md-3 sm-6">
				<a class="video-thumb fancybox-video" href="//youtu.be/NWsGYKaMa8A" title="Steve Laughlin - The Future of Marketing">
					<img src="//i1.ytimg.com/vi/NWsGYKaMa8A/mqdefault.jpg" alt="Steve Laughlin - The Future of Marketing" />
				</a>
				<a class="fancybox-video" href="//youtu.be/NWsGYKaMa8A">Steve Laughlin - The Future of Marketing</a> (2:45)
			</li>
			<li class="col md-3 sm-6">
				<a class="video-thumb fancybox-video" href="//youtu.be/XQu8TTBmGhA" title="The Video Placeholder">
					<img src="//i1.ytimg.com/vi/XQu8TTBmGhA/mqdefault.jpg" alt="The Video Placeholder" />
				</a>
				<a class="fancybox-video" href="//youtu.be/XQu8TTBmGhA">The Video Placeholder</a> (0:31)
			</li>
		</ul>
	</div>
</section>

<?php /* ?><section class="section">
	<header class="section-header row">
		<div class="col">
			<h2 class="section-title">Fancybox Videos Using Embedify</h2>
		</div>
	</header>

	<div class="section-content">
		<ul class="list-unstyled video-list row">
			<li class="col md-3 sm-6">
				<div data-embedify="fancyboxYoutube" data-youtube-id="lVpdzoPZ594" data-youtube-name="Mud Crab">
					Your browser does not support embedded YouTube videos. <a href="http://www.youtube.com/watch?v=lVpdzoPZ594" target="_blank">View at YouTube.com</a>
				</div>
				<a class="fancybox-video" href="//www.youtube.com/watch?v=lVpdzoPZ594">Mud Crab</a> (4:51)
			</li>
		</ul>
	</div>
</section><?php */ ?>

<section class="section">
	<header class="section-header row">
		<div class="col">
			<h2 class="section-title">Embedded Videos</h2>
		</div>
	</header>

	<div class="section-content">
		<div class="row">
			<div class="col md-6">
				<h3>YouTube</h3>
				<div class="video-container">
					<iframe src="//www.youtube.com/embed/a1Y73sPHKxw?&amp;rel=0" width="420" height="315" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col md-6">
				<h3>Vimeo</h3>
				<div class="video-container">
					<iframe src="//player.vimeo.com/video/23237102?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<?php /* ?><section class="section">
	<header class="section-header row">
		<div class="col">
			<h2 class="section-title">Embedded Videos Using Embedify</h2>
		</div>
	</header>

	<div class="section-content">
		<div class="row">
			<div class="col md-6">
				<div class="video-container">
					<div class="video" data-embedify="youtube" data-youtube-id="a1Y73sPHKxw" data-youtube-name="Dramatic Chipmunk">
						Your browser does not support embedded YouTube videos. <a href="http://www.youtube.com/watch?v=a1Y73sPHKxw" target="_blank">View at YouTube.com</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><?php */ ?>

<?php include('includes/footer.php') ?>