<?php
	$pageTitle = 'Tabs';
	$bodyClass = 'page-tabs';
	$currentNavItem = 'tabs';

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
			<p class="section-description">The example below uses the jQuery <a href="https://github.com/samsono/Easy-Responsive-Tabs-to-Accordion" target="_blank">Easy Responsive Tabs to Accordion</a> plugin.</p>
		</div>
	</div>
</header>

<section class="section">
	<header class="section-header row">
		<div class="col">
			<h2 class="section-title">Horizontal Tabs</h2>
		</div>
	</header>

	<div class="section-content row">
		<div class="col">
			<div class="tabs-horizontal">
				<ul class="resp-tabs-list group">
					<li>Tab 1</li>
					<li>Tab 2</li>
					<li>Tab 3</li>
				</ul> 
				<div class="resp-tabs-container">
					<div>
						<h3>1. Lorem ipsum dolar sit amet</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						<p>Maecenas elit metus, rutrum non nibh at, sodales dignissim dolor. Vestibulum sit amet nulla pharetra, vestibulum nunc in, commodo lorem. Maecenas odio nunc, cursus eget nisl ac, sodales vestibulum elit. Maecenas placerat bibendum ultricies. Nullam tincidunt lorem ante, sed venenatis ligula consequat vitae.</p>
					</div>
					<div>
						<h3>2. Consectetuer adipiscing elit</h3>
						<p>Maecenas elit metus, rutrum non nibh at, sodales dignissim dolor. Vestibulum sit amet nulla pharetra, vestibulum nunc in, commodo lorem. Maecenas odio nunc, cursus eget nisl ac, sodales vestibulum elit. Maecenas placerat bibendum ultricies. Nullam tincidunt lorem ante, sed venenatis ligula consequat vitae.</p>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</div>
					<div>
						<h3>3. Aenean commodo ligula</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						<p>Maecenas elit metus, rutrum non nibh at, sodales dignissim dolor. Vestibulum sit amet nulla pharetra, vestibulum nunc in, commodo lorem. Maecenas odio nunc, cursus eget nisl ac, sodales vestibulum elit. Maecenas placerat bibendum ultricies. Nullam tincidunt lorem ante, sed venenatis ligula consequat vitae.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<header class="section-header row">
		<div class="col">
			<h2 class="section-title">Vertical Tabs</h2>
		</div>
	</header>

	<div class="section-content row">
		<div class="col">
			<div class="tabs-vertical">
				<ul class="resp-tabs-list group">
					<li>Tab 1</li>
					<li>Tab 2</li>
					<li>Tab 3</li>
				</ul> 
				<div class="resp-tabs-container">
					<div>
						<h3>1. Lorem ipsum dolar sit amet</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						<p>Maecenas elit metus, rutrum non nibh at, sodales dignissim dolor. Vestibulum sit amet nulla pharetra, vestibulum nunc in, commodo lorem. Maecenas odio nunc, cursus eget nisl ac, sodales vestibulum elit. Maecenas placerat bibendum ultricies. Nullam tincidunt lorem ante, sed venenatis ligula consequat vitae.</p>
					</div>
					<div>
						<h3>2. Consectetuer adipiscing elit</h3>
						<p>Maecenas elit metus, rutrum non nibh at, sodales dignissim dolor. Vestibulum sit amet nulla pharetra, vestibulum nunc in, commodo lorem. Maecenas odio nunc, cursus eget nisl ac, sodales vestibulum elit. Maecenas placerat bibendum ultricies. Nullam tincidunt lorem ante, sed venenatis ligula consequat vitae.</p>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</div>
					<div>
						<h3>3. Aenean commodo ligula</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						<p>Maecenas elit metus, rutrum non nibh at, sodales dignissim dolor. Vestibulum sit amet nulla pharetra, vestibulum nunc in, commodo lorem. Maecenas odio nunc, cursus eget nisl ac, sodales vestibulum elit. Maecenas placerat bibendum ultricies. Nullam tincidunt lorem ante, sed venenatis ligula consequat vitae.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('includes/footer.php') ?>