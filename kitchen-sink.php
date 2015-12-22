<?php
	$pageTitle = 'Kitchen Sink';
	$bodyClass = 'page-kitchen-sink';
	$currentNavItem = 'kitchen-sink';

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
			<p class="section-description">A list of all major components used in the site. Icon font brought to you by <a href="http://fortawesome.github.io/Font-Awesome/icons" target="_blank">Font Awesome</a>.</p>
		</div>
	</div>
</header>

<div class="section">
	<div class="row">
		<div class="col md-4 lg-3">
			<div class="panel reduced">
				<ol class="reduced large">
					<li><a href="#typography">Typography</a></li>
					<li><a href="#buttons">Buttons</a></li>
					<li><a href="#lists">Lists</a></li>
					<li><a href="#forms">Forms</a></li>
					<li><a href="#tables">Tables</a></li>
					<li><a href="#panels">Panels</a></li>
					<li><a href="#tabs">Tabs</a></li>
					<li><a href="#tooltips">Tooltips</a></li>
				</ol>
			</div>
		</div>
	</div>
</div>

<section class="section" id="typography">
	<div class="row">
		<header class="section-header col md-4 lg-3">
			<h2 class="section-title">1. Typography</h2>
		</header>

		<div class="section-content col md-8 lg-9">
			<h1><strong>Heading 1</strong> lorem ipsum dolor sit amet</h1>
			<h3><strong>Heading 2</strong> lorem ipsum dolor sit amet</h3>
			<h3><strong>Heading 3</strong> lorem ipsum dolor sit amet</h3>
			<h4><strong>Heading 4</strong> lorem ipsum dolor sit amet</h4>
			<h5><strong>Heading 5</strong> lorem ipsum dolor sit amet</h5>
			<h6><strong>Heading 6</strong> lorem ipsum dolor sit amet</h6>

			<p><strong>Standard paragraph.</strong> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

			<p class="lg"><strong>Larger font size paragraph <code>(.lg)</code>.</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>

			<p class="sm"><strong>Smaller font size paragraph <code>(.sm)</code>.</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>

			<p itemscope itemtype="http://schema.org/Corporation">
				<strong><a itemprop="url" href="http://www.domain.com"><span itemprop="name">Address Using Schema.org</span></a></strong><br />
				<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			    	<span itemprop="streetAddress">0000 Consectetuer Road</span><br />
					Suite A<br />
					<span itemprop="addressLocality">Nonummy</span>, <span itemprop="addressRegion">XX</span> <span itemprop="postalCode">55555-5555</span><br />
					<span itemprop="addressCountry">United States</span>
			    </span><br />
			    Main: <a href="tel:5555555555" itemprop="telephone">(555) 555-5555</a><br />
			    Fax: <span itemprop="faxNumber">(555) 555-5555</span><br />
				<a itemprop="email" href="mailto:info@domain.com">info@domain.com</a>
			</p>
		</div>
	</div>
</section>

<section class="section" id="buttons">
	<div class="row">
		<header class="section-header col md-4 lg-3">
			<h2 class="section-title">2. Buttons</h2>
		</header>

		<div class="section-content col md-8 lg-9">
			<h3>Default Buttons</h3>
			<p><button class="btn">Button</button></p>
			<p><button class="btn btn-lg">Large Button</button></p>
			<p><button class="btn btn-sm">Small Button</button></p>
			
			<h3>Styled Buttons</h3>
			<p><button class="btn btn-primary">Primary</button></p>
			<p><button class="btn btn-info">Info</button></p>
			<p><button class="btn btn-success">Success</button></p>
			<p><button class="btn btn-warning">Warning</button></p>
			<p><button class="btn btn-danger">Danger</button></p>
			<p><button class="btn btn-outline">Outline</button></p>
			<p><button class="btn btn-link">Link</button></p>
			<p><button class="btn" disabled>Disabled</button></p>
		</div>
	</div>
</section>

<section class="section" id="lists">
	<div class="row">
		<header class="section-header col md-4 lg-3">
			<h2 class="section-title">3. Lists</h2>
		</header>

		<div class="section-content col md-8 lg-9">
			<div class="section">
				<h3>Unordered List</h3>
				<ul>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetuer adipiscing elit</li>
					<li>Aenean commodo ligula eget dolor</li>
				</ul>
			</div>

			<div class="section">
				<h3>Ordered List</h3>
				<ol>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetuer adipiscing elit</li>
					<li>Aenean commodo ligula eget dolor</li>
				</ol>
			</div>

			<div class="section">
				<h3>Definition List</h3>
				<dl>
					<dt>Lorem ipsum dolor sit amet</dt>
					<dd>Aenean commodo ligula eget dolor</dd>
					<dt>Aenean massa</dt>
					<dd>Cum sociis natoque penatibus</dd>
					<dd>Nulla consequat massa quis enim</dd>
				</dl>
			</div>

			<div class="section">
				<h3>Unstyled List <code>(.list-unstyled)</code></h3>
				<ul class="list-unstyled">
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetuer adipiscing elit</li>
					<li>Aenean commodo ligula eget dolor</li>
				</ul>
			</div>

			<div class="section">
				<h3>Inline List <code>(.list-inline)</code></h3>
				<ul class="list-inline">
					<li><a href="#">Lorem ipsum</a></li>
					<li><a href="#">Consectetuer</a></li>
					<li><a href="#">Aenean commodo</a></li>
				</ul>
			</div>

			<div class="section">
				<h3>Inline List w/ Pipes <code>(.list-inline.piped)</code></h3>
				<ul class="list-inline piped">
					<li><a href="#">Lorem ipsum</a></li>
					<li><a href="#">Consectetuer</a></li>
					<li><a href="#">Aenean commodo</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="section" id="forms">
	<div class="row">
		<header class="section-header col md-4 lg-3">
			<h2 class="section-title">4. Forms</h2>
		</header>

		<div class="section-content col md-8 lg-9">
			<form action="#" method="post">
				<p><em>&#40;&#42;&#41; Required fields.</em></p>
				<div class="row">
					<div class="form-group col xs-12 sm-6 md-6">
						<label for="Name">Full Name</label>
						<input type="text" id="Name" name="Name" data-val="true" data-val-length="Full Name length cannot exceed 150 characters" data-val-length-max="150" data-val-required="Please enter a Full Name." maxlength="150" />
						<span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
					</div>
					<div class="form-group col xs-12 sm-6 md-6">
						<label for="Email">Email Address</label>
						<input type="email" id="Email" name="Email" data-val="true" data-val-length="Email Address length cannot exceed 254 characters" data-val-length-max="254" data-val-email="Please enter a valid Email Address." data-val-required="Please enter an Email Address." maxlength="254" />
						<span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
					</div>
				</div>
				
				<fieldset class="form-group">
					<legend>Select an option</legend>
					<label class="radio" for="option1">
						<input type="radio" id="option1" name="option-group" />
						Lorem ipsum dolor sit amet
					</label>
					<label class="radio" for="option2">
						<input type="radio" id="option2" name="option-group" />
						Consectetuer adipiscing elit
					</label>
					<label class="radio" for="option3">
						<input type="radio" id="option3" name="option-group" />
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit
					</label>
				</fieldset>

				<div class="form-group char-limiter">
					<label for="Comments">Comments / Questions?</label>
					<span class="small char-counter"><span class="char-count"></span> characters remain</span>
					<textarea id="Comments" name="Comments" maxlength="500"></textarea>
					<span class="field-validation-valid" data-valmsg-for="Comments" data-valmsg-replace="true"></span>
				</div>

				<div class="form-actions">
					<button type="submit" class="btn btn-primary btn-submit">Submit</button>
				</div>

				<div class="form-validation-error" style="display:none">
					<span class="fa fa-exclamation-circle fa-2x"></span>
					<p></p>
				</div>
			</form>
		</div>
	</div>
</section>

<section class="section" id="tables">
	<div class="row">
		<header class="section-header col md-4 lg-3">
			<h2 class="section-title">5. Tables</h2>
		</header>

		<div class="section-content col md-8 lg-9">
			<div class="table-group">
				<h3>Default <code>(.table)</code></h3>
				<div class="table-wrapper">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Lorem ipsum</th>
								<th scope="col">Dolor sit amet</th>
								<th scope="col">Consectetuer adipiscing elit</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Maecenas elit metus, rutrum non nibh at</td>
								<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
								<td>Maecenas elit metus, rutrum non nibh at</td>
							</tr>
							<tr>
								<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
								<td>Maecenas elit metus, rutrum non nibh at</td>
								<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
							</tr>
							<tr>
								<td>Maecenas elit metus, rutrum non nibh at</td>
								<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
								<td>Maecenas elit metus, rutrum non nibh at</td>
							</tr>
						</tbody>
					</table>
				</div>


				<h3>Striped <code>(.table.table-striped)</code></h3>
				<div class="table-wrapper">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Lorem ipsum</th>
								<th scope="col">Dolor sit amet</th>
								<th scope="col">Consectetuer adipiscing elit</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Maecenas elit metus, rutrum non nibh at</td>
								<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
								<td>Maecenas elit metus, rutrum non nibh at</td>
							</tr>
							<tr>
								<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
								<td>Maecenas elit metus, rutrum non nibh at</td>
								<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
							</tr>
							<tr>
								<td>Maecenas elit metus, rutrum non nibh at</td>
								<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
								<td>Maecenas elit metus, rutrum non nibh at</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section" id="panels">
	<div class="row">
		<header class="section-header col md-4 lg-3">
			<h2 class="section-title">6. Panels</h2>
		</header>

		<div class="section-content col md-8 lg-9">
			<div class="panel">
				<strong>This is a panel.</strong> Maecenas elit metus, rutrum non nibh at, sodales dignissim dolor. Vestibulum sit amet nulla pharetra, vestibulum nunc in, commodo lorem. Maecenas odio nunc, cursus eget nisl ac, sodales vestibulum elit. Maecenas placerat bibendum ultricies. Nullam tincidunt lorem ante, sed venenatis ligula consequat vitae.
			</div>
			<div class="row panel-group">
				<div class="col xs-12 sm-6">
					<div class="panel">
						<div class="panel-header">
							<h3 class="panel-title h4">Panel Title</h3>
						</div>
						<div class="panel-content">
							<strong>Panel content.</strong> Maecenas elit metus, rutrum non nibh at, sodales dignissim dolor. Vestibulum sit amet nulla pharetra, vestibulum nunc in, commodo lorem. Maecenas odio nunc, cursus eget nisl ac, sodales vestibulum elit. Maecenas placerat bibendum ultricies. Nullam tincidunt lorem ante, sed venenatis ligula consequat vitae.
						</div>
					</div>
				</div>
				<div class="col xs-12 sm-6">
					<div class="panel panel-primary">
						<div class="panel-header">
							<h3 class="panel-title h4">Panel Title</h3>
						</div>
						<div class="panel-content">
							<strong>Panel content.</strong> Maecenas elit metus, rutrum non nibh at, sodales dignissim dolor. Vestibulum sit amet nulla pharetra, vestibulum nunc in, commodo lorem. Maecenas odio nunc, cursus eget nisl ac, sodales vestibulum elit. Maecenas placerat bibendum ultricies. Nullam tincidunt lorem ante, sed venenatis ligula consequat vitae.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section" id="tabs">
	<div class="row">
		<header class="section-header col md-4 lg-3">
			<h2 class="section-title">7. Tabs</h2>
		</header>

		<div class="section-content col md-8 lg-9">
			<div class="row">
				<div class="tabs-horizontal col">
					<ul class="resp-tabs-list group">
						<li>Lorem ipsum</li>
						<li>Dolar sit</li>
						<li>Consectetuer</li>
					</ul>
					<div class="resp-tabs-container">
						<div>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis eleifend augue, a hendrerit urna. Integer id ultrices libero, vel rhoncus velit. Nullam faucibus ultrices ipsum, eget mollis sem ultricies sed. Proin blandit imperdiet risus sed placerat.
						</div>
						<div>
							Maecenas elit metus, rutrum non nibh at, sodales dignissim dolor. Vestibulum sit amet nulla pharetra, vestibulum nunc in, commodo lorem. Maecenas odio nunc, cursus eget nisl ac, sodales vestibulum elit. Maecenas placerat bibendum ultricies. Nullam tincidunt lorem ante, sed venenatis ligula consequat vitae.
						</div>
						<div>
							Maecenas gravida nisi risus, mattis commodo turpis faucibus eu. Aenean blandit purus id dui laoreet, sed vulputate urna pretium. Aenean a convallis turpis, luctus porttitor metus. Etiam vitae justo ultrices, varius velit ut, venenatis ipsum. In in ultrices mi, ut suscipit dui. Curabitur eget euismod risus.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section" id="tooltips">
	<div class="row">
		<header class="section-header col md-4 lg-3">
			<h2 class="section-title">8. Tooltips</h2>
		</header>

		<div class="section-content col md-8 lg-9">
			<p>Tooltip Example 1 <span class="fa fa-question-circle tooltip-trigger-icon" data-tooltip="This is an example of a tooltip."></span></p>
			<p>Tooltip Example 2 <span class="fa fa-exclamation-circle tooltip-trigger-icon" data-tooltip="This is another example of a tooltip, using a different icon."></span></p>
		</div>
	</div>
</section>

<?php include('includes/footer.php') ?>