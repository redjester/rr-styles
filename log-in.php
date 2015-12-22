<?php
	$pageTitle = 'Log In';
	$bodyClass = 'page-login';
	
	include('includes/header.php');
?>

<section class="section">
	<header class="section-header row align-center">
		<div class="col">
			<h2 class="section-title">Log In</h2>
		</div>
	</header>
	<div class="section-content row">
		<div class="col">
			<div class="form-container">
				<form action="/home.php" method="post">
					<fieldset class="panel">
						<legend class="assistive-text">Log In</legend>
						<div class="form-group">
							<label for="Username">Username or Email</label>
							<input type="text" id="Username" name="Username" autofocus="true" data-val="true" data-val-length="Username or Email must be no more than 256 characters." data-val-length-max="256" data-val-required="Please enter a Username or Email." maxlength="256" />
							<span class="field-validation-valid" data-valmsg-for="Username" data-valmsg-replace="true"></span>
						</div>
						<div class="form-group">
							<label for="Password">Password</label>
							<input type="password" id="Password" name="Password" data-val="true" data-val-required="Please enter a Password." />
							<span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<input type="checkbox" name="RememberMe" id="RememberMe" />
								<label for="RememberMe">Remember Me</label>
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary btn-submit">Sign In</button>
						</div>
					</fieldset>
				</form>	
			</div>
			<p class="align-center"><a href="/forgot-password.php">Forgot your password?</a></p>
		</div>
	</div>
</section>

<?php include('includes/footer.php') ?>