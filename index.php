<?php
	$sections = array(
		"about" 				=> "About me",
		"resume" 				=> "Resume",
		"projects" 			=> "Projects",
		"contact" 			=> "Contact",
	);
?>
<!DOCTYPE html>
<html>
	<haed>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1">
		<title>Evan Laurie</title>
		
		<link href='http://fonts.googleapis.com/css?family=Dosis:600,700|Open+Sans+Condensed:300|Open+Sans' rel='stylesheet' type='text/css'>
		
		<link type="text/css" rel="stylesheet" href="css/styles.css" />
		<link type="text/css" rel="stylesheet" href="css/mediaqueries.css" />
		
		<script type="text/javascript" src="js/lib/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/lib/jquery.sticky-1.0.0.js"></script>
		<script type="text/javascript" src="js/site.js"></script>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-26997190-1']);
			_gaq.push(['_trackPageview']);
			
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</haed>
	<body>
		<div class="wrap" id="wrap">
			<div class="page" id="page">
				<div id="top">
					<header class="header" id="header">
						<h1>Evan Laurie</h1>
					</header>
					<nav class="nav" id="nav">
					<?php foreach($sections as $id => $title): ?>
						<a id="nav-<?php print $id; ?>" href="#<?php print $id; ?>"><?php print $title; ?></a>
					<?php endforeach; ?>
					</nav>
				</div>
				<div class="content" id="content">
				<?php foreach($sections as $id => $title): ?>
					<section class="section clearfix" id="section-<?php print $id;?>">
						<h2 class="section-header"><?php print $title; ?></h2>
						<?php if($id == 'contact'): ?>
						<span id="email"><a href="mailto:evanlaurie@icloud.com">evanlaurie@icloud.com</a></span>
						<?php endif; ?>
						<article class="section-content clearfix">
						<?php require("content/".$id.".php"); ?>
						</article>
					</section>
				<?php endforeach; ?>
				<span id="copy">Copyright © 2017 Evan Laurie<span>
				</div>
			</div>
		</div>
	</body>
</html>