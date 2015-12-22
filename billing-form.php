<?php
	$pageTitle = 'Billing Form';
	$bodyClass = 'page-billing-form';
	$currentNavItem = 'billing-form';
	
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
			<p class="section-description">These are the standards that should be applied to forms. View the <a href="/content/pdf/requirements-forms.pdf" target="_blank">form requirements document</a>  and the <a href="/content/pdf/requirements-form-data-security.pdf" target="_blank">form data security requirements document</a> for LC form standards.</p>
		</div>
	</div>
</header>

<div class="section">
	<div class="section-content row">
		<form action="/thank-you.php" method="post" id="secure-form" class="col md-9 lg-7">
			<div class="form-validation-error" style="display: none;">
				<span class="fa fa-exclamation-circle fa-2x"></span>
				<p></p>
			</div>

			<p><em>&#40;&#42;&#41; Required fields.</em></p>
			<fieldset>
				<legend>Registration</legend>
				<div class="row">
					<div class="form-group col xs-12 sm-6 md-6"> 
						<label for="FirstName">First Name</label>
						<input type="text" id="FirstName" name="FirstName" title="Please enter a First Name." maxlength="50" required autofocus data-val="true" data-val-length="First Name length cannot exceed 50 characters." data-val-length-max="50" data-val-required="Please enter a First Name." />
						<span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
					</div>
					<div class="form-group col xs-12 sm-6 md-6">
						<label for="LastName">Last Name</label>
						<input type="text" id="LastName" name="LastName" title="Please enter a Last Name." required data-val="true" data-val-length="Last Name length cannot exceed 100 characters." data-val-length-max="100" data-val-required="Please enter a Last Name." maxlength="100" />
						<span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
					</div>
				</div>
				<div class="row">
					<div class="form-group col xs-12 sm-6">
						<label for="RegUserEmail">Email Address</label>
						<input type="email" id="RegUserEmail" class="validate-email-parent" name="RegUserEmail" title="Please enter an Email Address." required data-val="true" data-val-length="Email Address length cannot exceed 254 characters." data-val-length-max="254" data-val-email="Please enter a valid Email Address." data-val-required="Please enter an Email Address." maxlength="254" />
						<span class="field-validation-valid" data-valmsg-for="RegUserEmail" data-valmsg-replace="true"></span>
					</div>
				</div>	
				<div class="row">
					<div class="form-group col xs-12 sm-6">
						<label for="ConfirmRegUserEmail">Re-type Email Address</label>
						<input disabled="disabled" type="email" id="ConfirmRegUserEmail" class="validate-email-dependent" name="ConfirmRegUserEmail" title="Please enter an Email Address." data-val-equalto="Email Address does not match." data-val-equalto-other="RegUserEmail" required data-val="true" data-val-email="Please enter a valid Email Address." data-val-required="Please enter an Email Address." />
						<span class="field-validation-valid" data-valmsg-for="ConfirmRegUserEmail" data-valmsg-replace="true"></span>
					</div>
				</div>	
				<div id="pwd-container" class="row">
					<div class="form-group col xs-12 sm-6">
						<label for="Password">Create a Password <span class="fa fa-question-circle tooltip-trigger-icon" data-tooltip title="Your password must be 10&#45;20 characters long, contain both uppercase and lowercase characters, at least one digit and at least one special character. Only alpha&#45;numerical characters, spaces, dashes, periods and underscores are allowed."></span></label>
						<input type="password" id="Password" class="validate-password-parent" name="Password" title="Please enter a Password." required data-val="true" data-val-length="Password length must be between 10 and 20 characters." data-val-length-min="10" data-val-length-max="20" data-val-required="Please enter a Password." maxlength="20" />
						<span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
					</div>
					<div class="col xs-12 sm-4">
	                    <div class="pwstrength-progress"></div>
					</div>				
				</div>	
				<div class="row">
					<div class="form-group col xs-12 sm-6">
						<label for="ConfirmPassword">Re-type Password</label>
						<input disabled="disabled" type="password" id="ConfirmPassword" class="validate-password-dependent" name="ConfirmPassword" title="Please enter a Password." data-val-equalto="Password value does not match." data-val-equalto-other="Password" required data-val="true" data-val-required="Please enter a Password." />
						<span class="field-validation-valid" data-valmsg-for="ConfirmPassword" data-valmsg-replace="true"></span>
					</div>
				</div>	
			</fieldset>

			<fieldset>
				<legend>Billing Information</legend>
				<div class="row">
					<div class="form-group col xs-12 sm-6 md-4"> 
						<label for="NameOnCC">Name on Card</label>
						<input type="text" id="NameOnCC" name="NameOnCC" title="Please enter a Name on Card." maxlength="50" required data-val="true" data-val-length="Name on Card length cannot exceed 150 characters." data-val-length-max="150" data-val-required="Please enter a Name on Card." />
						<span class="field-validation-valid" data-valmsg-for="NameOnCC" data-valmsg-replace="true"></span>
					</div>

					<div class="form-group form-group-cc col xs-12 sm-6 md-4">
						<label for="CCNumber">Credit Card Number</label>
						<input type="text" id="CCNumber" name="CCNumber" title="Please enter a Credit Card Number." required data-val="true" data-val-length="Credit Card length must be between 14 and 16 numerals." data-val-length-min="14" data-val-length-max="16" data-val-required="Please enter a Credit Card Number." maxlength="16" data-val-regex-pattern="\d+$" data-val-regex="Please enter a valid Credit Card Number using only numbers." />
						<span class="field-validation-valid" data-valmsg-for="CCNumber" data-valmsg-replace="true"></span>
					</div>

					<div class="form-group col xs-12 sm-6 md-4">
						<label for="CCExpMonth"><span class="required-field-marker">&#42;</span>&#32;Expiration Date</label>
						<div class="row clear">
							<div class="form-group col xs-6 sm-6 md-6">
								<select name="CCExpMonth" id="CCExpMonth">
									<option selected="selected" value="1">01</option>
									<option value="2">02</option>
									<option value="3">03</option>
									<option value="4">04</option>
									<option value="5">05</option>
									<option value="6">06</option>
									<option value="7">07</option>
									<option value="8">08</option>
									<option value="9">09</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</div>
							<div class="form-group col xs-6 sm-6 md-6">
								<label for="CCExpMonth" class="assistive-text">Expiration Date</label>
								<select name="CCExpYear" id="CCExpYear">
									<option selected="selected" value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
									<option value="2021">2021</option>
									<option value="2022">2022</option>
									<option value="2023">2023</option>
									<option value="2024">2024</option>
									<option value="2025">2025</option>
									<option value="2026">2026</option>
									<option value="2027">2027</option>
									<option value="2028">2028</option>
									<option value="2029">2029</option>
									<option value="2030">2030</option>
									<option value="2031">2031</option>
									<option value="2032">2032</option>
									<option value="2033">2033</option>
									<option value="2034">2034</option>
									<option value="2035">2035</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</fieldset>

			<div id="robotester" style="display: none;">
				<label for="robotest">If you are human leave this blank</label>
				<input type="text" id="robotest" name="robotest" />
			</div>

			<div class="form-actions">
				<button type="submit" class="btn btn-primary btn-submit">Submit</button>
			</div>

			<div class="form-validation-error" style="display: none;">
				<span class="fa fa-exclamation-circle fa-2x"></span>
				<p></p>
			</div>
		</form>
	</div>
</div>

<?php include('includes/footer.php') ?>