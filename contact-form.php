<?php
	$pageTitle = 'Contact Form';
	$bodyClass = 'page-contact-form';
	$currentNavItem = 'contact-form';

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
		<form action="/thank-you.php" method="post" id="contact-form" class="col md-9 lg-7">
			<div class="form-validation-error" style="display:none">
				<span class="fa fa-exclamation-circle fa-2x"></span>
				<p></p>
			</div>
			
			<p><em>&#40;&#42;&#41; Required fields.</em></p>
			<fieldset>
				<legend>Personal Information</legend>

				<div class="row">
					<div class="form-group col xs-12 sm-6 md-6"> 
						<label for="FirstName">First Name</label>
						<input type="text" id="FirstName" name="FirstName" title="Please enter a First Name." maxlength="50" required autofocus data-val="true" data-val-length="First Name length cannot exceed 50 characters" data-val-length-max="50" data-val-required="Please enter a First Name." />
						<span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
					</div>

					<div class="form-group col xs-12 sm-6 md-6">
						<label for="LastName">Last Name</label>
						<input type="text" id="LastName" name="LastName" title="Please enter a Last Name." required data-val="true" data-val-length="Last Name length cannot exceed 100 characters" data-val-length-max="100" data-val-required="Please enter a Last Name." maxlength="100" />
						<span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
					</div>
				</div>

				<div class="form-group">
					<label for="CompanyName">Company Name</label>
					<input type="text" id="CompanyName" name="CompanyName" data-val="true" data-val-length="Company Name length cannot exceed 100 characters" data-val-length-max="100" maxlength="100" />
					<span class="field-validation-valid" data-valmsg-for="CompanyName" data-valmsg-replace="true"></span>
				</div>

				<div class="form-group">
					<label for="AddressLine1">Address Line 1</label>
					<input type="text" id="AddressLine1" name="AddressLine1" data-val="true" data-val-length="Address Line 1 length cannot exceed 100 characters" data-val-length-max="100" maxlength="100" />
					<span class="field-validation-valid" data-valmsg-for="AddressLine1" data-valmsg-replace="true"></span>
				</div>

				<div class="form-group">
					<label for="AddressLine2">Address Line 2 <span class="fa fa-question-circle tooltip-trigger-icon" data-tooltip title="This field should include a suite or apartment number if necessary."></span></label>
					<input type="text" id="AddressLine2" name="AddressLine2" data-val="true" data-val-length="Address Line 2 length cannot exceed 100 characters" data-val-length-max="100" maxlength="100" />
					<span class="field-validation-valid" data-valmsg-for="AddressLine2" data-valmsg-replace="true"></span>
				</div>

				<div class="row">
					<div class="form-group col md-6">
						<label for="City">City</label>
						<input type="text" id="City" name="City" data-val="true" data-val-length="City length cannot exceed 100 characters" data-val-length-max="100" maxlength="100" />
						<span class="field-validation-valid" data-valmsg-for="City" data-valmsg-replace="true"></span>
					</div>

					<div class="form-group col xs-8 sm-6 md-4">
						<label for="State">State</label>
						<select id="State" name="State">
							<option value="" selected disabled>Please Select</option> 
							<option value="AL">Alabama</option> 
							<option value="AK">Alaska</option> 
							<option value="AZ">Arizona</option> 
							<option value="AR">Arkansas</option> 
							<option value="CA">California</option> 
							<option value="CO">Colorado</option> 
							<option value="CT">Connecticut</option> 
							<option value="DE">Delaware</option> 
							<option value="DC">District Of Columbia</option> 
							<option value="FL">Florida</option> 
							<option value="GA">Georgia</option> 
							<option value="HI">Hawaii</option> 
							<option value="ID">Idaho</option> 
							<option value="IL">Illinois</option> 
							<option value="IN">Indiana</option> 
							<option value="IA">Iowa</option> 
							<option value="KS">Kansas</option> 
							<option value="KY">Kentucky</option> 
							<option value="LA">Louisiana</option> 
							<option value="ME">Maine</option> 
							<option value="MD">Maryland</option> 
							<option value="MA">Massachusetts</option> 
							<option value="MI">Michigan</option> 
							<option value="MN">Minnesota</option> 
							<option value="MS">Mississippi</option> 
							<option value="MO">Missouri</option> 
							<option value="MT">Montana</option> 
							<option value="NE">Nebraska</option> 
							<option value="NV">Nevada</option> 
							<option value="NH">New Hampshire</option> 
							<option value="NJ">New Jersey</option> 
							<option value="NM">New Mexico</option> 
							<option value="NY">New York</option> 
							<option value="NC">North Carolina</option> 
							<option value="ND">North Dakota</option> 
							<option value="OH">Ohio</option> 
							<option value="OK">Oklahoma</option> 
							<option value="OR">Oregon</option> 
							<option value="PA">Pennsylvania</option> 
							<option value="RI">Rhode Island</option> 
							<option value="SC">South Carolina</option> 
							<option value="SD">South Dakota</option> 
							<option value="TN">Tennessee</option> 
							<option value="TX">Texas</option> 
							<option value="UT">Utah</option> 
							<option value="VT">Vermont</option> 
							<option value="VA">Virginia</option> 
							<option value="WA">Washington</option> 
							<option value="WV">West Virginia</option> 
							<option value="WI">Wisconsin</option> 
							<option value="WY">Wyoming</option>
						</select>
						<span class="field-validation-valid" data-valmsg-for="State" data-valmsg-replace="true"></span>
					</div>

					<div class="form-group col xs-4 sm-3 md-2">
						<label for="ZipCode">ZIP Code</label>
						<input type="text" id="ZipCode" name="ZipCode" pattern="[0-9]*" title="Please enter a ZIP Code." required class="input-zip" data-val="true" data-val-length="ZIP Code length cannot exceed 5 characters" data-val-length-max="5" data-val-required="Please enter a ZIP Code." data-val-regex="Invalid ZIP Code format." data-val-regex-pattern="^\d{5}(?:[-\s]\d{4})?$" maxlength="5" />
						<span class="field-validation-valid" data-valmsg-for="ZipCode" data-valmsg-replace="true"></span>
					</div>
				</div>

				<div class="row">
					<div class="form-group col xs-12 sm-6">
						<label for="Phone">Phone Number</label>
						<input type="tel" id="Phone" name="Phone" title="Please enter a Phone Number." required data-val="true" data-val-length="Phone Number length cannot exceed 10 characters" data-val-length-max="14" data-val-required="Please enter a Phone Number." maxlength="14" />
						<span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
					</div>

					<div class="form-group col xs-12 sm-6">
						<label for="Email">Email Address</label>
						<input type="email" id="Email" name="Email" title="Please enter an Email Address" required data-val="true" data-val-length="Email Address length cannot exceed 254 characters" data-val-length-max="254" data-val-email="Please enter a valid Email Address." data-val-required="Please enter an Email Address." maxlength="254" />
						<span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
					</div>
				</div>
			</fieldset>

			<fieldset>
				<legend>Additional Information</legend>
				<fieldset class="form-group">
					<legend>How can we help?</legend>
					<label class="radio" for="option1">
						<input type="radio" id="option1" name="option-group" />
						Lorem ipsum dolor sit amet
					</label>
					<label class="radio" for="option2">
						<input type="radio" id="option2" name="option-group" />
						Consectetuer adipiscing elit
					</label>
					<label class="radio" for="option4">
						<input type="radio" id="option4" name="option-group" />
						Other
					</label>
				</fieldset>

				<div class="row">
					<div class="form-group form-group-date col sm-6"> 
						<label for="StartDate">Start Date</label>
						<input type="text" id="StartDate" name="StartDate" class="datepicker" placeholder="mm/dd/yyyy" />
						<span class="fa fa-calendar datepicker-trigger" title="Click to view Calendar"></span>
						<span class="field-validation-valid" data-valmsg-for="StartDate" data-valmsg-replace="true"></span>
					</div>

					<div class="form-group form-group-date col sm-6"> 
						<label for="EndDate">End Date</label>
						<input type="text" id="EndDate" name="EndDate" class="datepicker" placeholder="mm/dd/yyyy" />
						<span class="fa fa-calendar datepicker-trigger" title="Click to view Calendar"></span>
						<span class="field-validation-valid" data-valmsg-for="EndDate" data-valmsg-replace="true"></span>
					</div>
				</div>
			</fieldset>

			<div class="form-group char-limiter">
				<label for="Comments">Comments / Questions?</label>
				<span class="small char-counter"><span class="char-count"></span> characters remain</span>
				<textarea id="Comments" name="Comments" maxlength="500"></textarea>
				<span class="field-validation-valid" data-valmsg-for="Comments" data-valmsg-replace="true"></span>
			</div>

			<div class="form-group">
				<label class="checkbox" for="checkbox1">
					<input type="checkbox" id="checkbox1" />
					<strong>Lorem ipsum dolor sit amet</strong>, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				</label>
				<label class="checkbox" for="checkbox2">
					<input type="checkbox" id="checkbox2" />
					<strong>Donec quam felis</strong>, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
				</label>
			</div>

			<div id="robotester" style="display:none;">
				<label for="robotest">If you are human leave this blank</label>
				<input type="text" id="robotest" name="robotest" />
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

<?php include('includes/footer.php') ?>