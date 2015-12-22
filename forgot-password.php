<?php
	$pageTitle = 'Reset Password';
	$bodyClass = 'page-forgot-password';
	
	include('includes/header.php');
?>

<section class="section">
	<header class="section-header row align-center">
		<div class="col">
			<h2 class="section-title">Reset Your Password</h2>
		</div>
	</header>
	<div class="section-content row">
		<div class="col">
			<div class="form-container">
				<form action="/home.php" method="post">
					<fieldset class="panel">
						<legend class="assistive-text">Reset Password</legend>
						<p>Enter your email address and we&#8217;ll send you a link to reset your password.</p>
						<div class="form-group">
							<label for="Email">Email Address</label>
							<input type="email" id="Email" name="Email" autofocus="true" data-val="true" data-val-length="Email Address must be no more than 256 characters." data-val-length-max="256" data-val-required="Please enter an Email Address." maxlength="256" />
							<span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary btn-submit">Reset Password</button>
						</div>
					</fieldset>
				</form>	
			</div>
		</div>
	</div>
</section>

<?php include('includes/footer.php') ?>