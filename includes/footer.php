		</main>

		<footer class="site-footer">
			<div class="row">
				<div class="col">
					<nav class="social-nav">
						<h6 class="assistive-text">Social navigation</h6>
						<ul class="list-inline">
							<li>
								<a href="https://www.facebook.com" class="icon icon-facebook" title="<?php echo $client ?> on Facebook" target="_blank">
									<span class="fa fa-facebook"></span><span class="assistive-text">Facebook</span>
								</a>
							</li>
							<li>
								<a href="https://www.twitter.com" class="icon icon-twitter" title="<?php echo $client ?> on Twitter" target="_blank">
									<span class="fa fa-twitter"></span><span class="assistive-text">Twitter</span>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com" class="icon icon-youtube" title="<?php echo $client ?> on YouTube" target="_blank">
									<span class="fa fa-youtube-play"></span><span class="assistive-text">YouTube</span>
								</a>
							</li>
							<li>
								<a href="http://www.instagram.com" class="icon icon-instagram" title="<?php echo $client ?> on Instagram" target="_blank">
									<span class="fa fa-instagram"></span><span class="assistive-text">Instagram</span>
								</a>
							</li>
						</ul>
					</nav>

					<small class="copyright">&copy; <?php echo date("Y"); ?> <?php echo $client ?></small>

					<nav class="utility-nav">
						<h6 class="assistive-text">Utility navigation</h6>
						<ul class="list-inline piped">
							<li><a href="#">Legal Notice</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="/site-map.php">Site Map</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</footer>

		<?php
			// Grid overlay for demonstration purposes only. Remove for dev.
			include('grid-overlay.php');
		?>

		<!-- DOM Loaded JS -->
		<script src="/content/js/site.js"></script>

		<script src="/content/js/_libs/jquery.cookie/jquery.cookie-1.4.1.min.js"></script>
		<script src="/content/js/cookies.js"></script>

		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script src="/content/js/_libs/jquery.validate/jquery.validate-1.12.0.js"></script>
		<script src="/content/js/_libs/jquery.validate/jquery.validate.unobtrusive.js"></script>
		<script src="/content/js/_libs/jquery.maskedinput/jquery.maskedinput-1.3.1.js"></script>
		<script src="/content/js/_libs/jquery.pwstrength/rules.js"></script>
		<script src="/content/js/_libs/jquery.pwstrength/options.js"></script>
		<script src="/content/js/_libs/jquery.pwstrength/ui.js"></script>
		<script src="/content/js/_libs/jquery.pwstrength/methods.js"></script>
		<script src="/content/js/form-controls.js"></script>

		<script src="/content/js/_libs/jquery.easyResponsiveTabs/jquery.easyResponsiveTabs-1.2.2.min.js"></script>
		<script src="/content/js/easyResponsiveTabs.js"></script>

		<script src="/content/js/_libs/jquery.fancybox/jquery.fancybox-2.1.5.js"></script>
		<script src="/content/js/fancybox.js"></script>

		<script src="/content/js/_libs/jquery.flexslider/jquery.flexslider-2.5.0.js"></script>
		<script src="/content/js/flexslider.js"></script>

		<script src="/content/js/tooltips.js"></script>
	</body>
</html>