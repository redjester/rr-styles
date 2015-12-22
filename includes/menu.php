<ul class="nav row">
	<li class="nav-item <?php echo $currentNavItem == 'home' ? 'current' : '' ?>"><a class="nav-link" href="/home.php">Home</a></li>
	<li class="nav-item <?php echo $currentNavItem == 'grid' ? 'current' : '' ?>"><a class="nav-link" href="/grid.php">Grid</a></li>
	<li class="nav-item <?php echo $currentNavItem == 'tabs' ? 'current' : '' ?>"><a class="nav-link" href="/tabs.php">Tabs</a></li>
	<li class="nav-item <?php echo $currentNavItem == 'videos' ? 'current' : '' ?>"><a class="nav-link" href="/videos.php">Videos</a></li>
	<li class="nav-item <?php echo $currentNavItem == 'contact-form' ? 'current' : '' ?>"><a class="nav-link" href="/contact-form.php">Contact Form</a></li>
	<li class="nav-item <?php echo $currentNavItem == 'billing-form' ? 'current' : '' ?>"><a class="nav-link" href="/billing-form.php">Billing Form</a></li>
	<li class="nav-item <?php echo $currentNavItem == 'kitchen-sink' ? 'current' : '' ?>">
		<a href="/kitchen-sink.php" class="nav-link" data-toggle="hover" aria-haspopup="true">Kitchen Sink<span class="caret-down"></span></a>
		<ul class="nav-submenu">
			<li class="nav-submenu-item"><a class="nav-submenu-link" href="/kitchen-sink.php">View the Kitchen Sink</a></li>
			<li class="nav-submenu-item"><a class="nav-submenu-link" href="#">Another Link</a></li>
			<li class="nav-submenu-item"><a class="nav-submenu-link" href="#">Something Else</a></li>
		</ul>
	</li>
	<li class="nav-item <?php echo $currentNavItem == 'examples' ? 'current' : '' ?>"><a class="nav-link" href="/">Examples</a></li>
</ul>