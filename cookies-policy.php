<?php
	$pageTitle = 'Cookies Policy';
	$bodyClass = 'page-cookies-policy';
	
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
			<p class="section-description">These are the standards that should be applied to cookies. View the <a class="wg" href="/content/pdf/cookies-policy.pdf" target="_blank">Cookie Law Consent requirements document</a> for LC cookie standards.</p>
		</div>
	</div>
</header>

<div class="section">
	<div class="section-content row">
		<div class="col">
			<p><a href="#">The Lorem Ipsum</a> operates a strict <a href="#">privacy policy</a> around the world. We are committed to being transparent about the technologies we use, and we&#8217;ve outlined below how we use cookies when you visit our site <a href="http://www.url.com">www.url.com</a>.</p>
			<h3>What is a cookie?</h3>
			<p>A cookie is a small snippet of text that a website asks your browser to store. All cookies have expiration dates in them that determine how long they stay in your browser. Cookies can be removed in two ways: automatically, when they expire, or when you manually delete them. We&#8217;ve included more details below to help you understand what kinds of cookies we use.</p>
			<h3>Does this site use cookies?</h3>
			<p>Yes, with the primary purpose to make our website work more effectively.</p>
			<h3>What are session and persistent cookies?</h3>
			<ul>
				<li><em>Session cookies</em> &#8211; these are temporary cookies that expire (and are automatically erased) whenever you close your browser. An example of how we use session cookies is to grant access to content and enable commenting (things you have to log in to do).</li>
				<li><em>Persistent cookies</em> &#8211; these usually have an expiration date far into the future and thus stay in your browser until they expire, or until you manually delete them. An example of how we use persistent cookies is for functionalities like the &#8220;Stay logged in&#8221; tickbox. We also use persistent cookies to better understand usage patterns so we can improve the site for our customers. This information is anonymised &#8211; when we look at the data, in other words, we look at patterns, but we do not see individuals&#8217; personally identifiable information (PII).</li>
			</ul>
			<h3>In what circumstances does this site use cookies, and why?</h3>
			<p>We use different kinds of cookies for various reasons outlined below. All cookie information is completely anonymised ie we do not see individuals&#8217; PII.</p>
			<p>There are also limited third-party cookies on the site. These cookies could be session or persistent and are set by entities other than <i>Lorem Ipsum</i>. To ensure compliance with our policies, we restrict the use of third-party cookies to trusted partners of <a href="http://www.url.com">Lorem Ipsum</a>. For example, we currently allow:</p>
			<ol>
				<li><em>Essential cookies</em> &#8211; these cookies are all first party cookies that are essential for the operation of our website. For example, some cookies allow us to identify visitors and ensure they can access specific content and functionality.</li>
				<li><em>Functional cookies</em> &#8211; these cookies make sure the website looks consistent as well as allowing us to analyze site usage so we can measure and improve performance. In addition, we use functional cookies for Audience measurement and validation. We use services such as Google Analytics to understand how many people visit us and what is popular, which helps us improve the website.</li>
				<li>
					<em>Advertising cookies</em> &#8211; these cookies allow you to share pages with social networks should you wish to do so. We however do not collect your personal nor sensitive information. There are also other limited third-party cookies on the site that fall into the &#8220;Advertising cookies&#8221; category. These cookies could be session or persistent and are set by entities other than Lorem Ipsum. To ensure compliance with our policies, we restrict the use of third-party cookies to trusted partners of Lorem Ipsum. For example, we currently allow:
					<ol>
						<li>Example A</li>
						<li>Example B</li>
					</ol>
					<p>You can opt out of these cookies at any time &#8212; to learn how to do this or if you would like to learn more about how advertisers use these types of cookies, please visit <a href="http://www.youronlinechoices.eu" target="_blank">http://www.youronlinechoices.eu</a> if you are based in the EU. If you are based in the United States and would like to learn more, please visit <a href="http://www.aboutads.info/choices/" target="_blank">http://www.aboutads.info/choices/</a>.</p>
				</li>
			</ol>
			<h3>Do any of the cookies used in this site contain my personal details?</h3>
			<p>No. All the data contained in the cookies that we use is completely anonymous and doesn&#8217;t contain any PII.</p>
			<h3>Does this site use cookies to sell customer information?</h3>
			<p>No.</p>
			<h3>How can I delete or opt-out of cookies?</h3>
			<p>While we are not responsible for the content of any external websites, we set out some websites below which may help if you wish to delete or opt-out of cookies.</p>
			<ol>
				<li>If you want to delete or disable cookies, see: <a href="http://www.allaboutcookies.org/manage-cookies" target=“_blank” >http://www.allaboutcookies.org/manage-cookies</a></li>
				<li>To opt out of cookies from Adobe Site Catalyst: <a href="http://www.adobe.com/privacy/opt-out.html" target=“_blank” >http://www.adobe.com/privacy/opt-out.html</a></li>
				<li>To opt out of cookies from Google Analytics: <a href="https://tools.google.com/dlpage/gaoptout" target=“_blank” >https://tools.google.com/dlpage/gaoptout</a></li>
				<li>You are currently <strong id="siteCookieStatus"></strong>, to change this: <a id="btnModifyOpt" class="btn-link" href="javascript:void(0);"></a></li>
			</ol>
			<h3>Will the site work if I disable cookies?</h3>
			<p>You can browse this site with cookies disabled, though some interactions may not work.</p>
			<h3>How long will cookies last for?</h3>
			<p>We limit the lifetime of our cookies to 13 months. You can of course disable cookies at any time during your experience. If you do not disable cookies and continue to use this site, you consent to the use of cookies as described.</p>
		</div>
	</div>
</div>


<?php include('includes/footer.php') ?>