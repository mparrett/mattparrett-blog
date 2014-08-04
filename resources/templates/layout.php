<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Matt Parrett's Blog about technology, life, and universe">
	<meta name="author" content="Matt Parrett">

	<meta property="article:author" content="http://facebook.com/mattparrett" />
	<link rel="author" href="http://plus.google.com/105313729277315843911" />
		<link rel="shortcut icon" href="/assets/ico/favicon.ico">

		<title><?= isset($_title) ? 'Matt Parrett: ' . $_title : "Matt Parrett's Blog"?></title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<!-- Custom styles for this template -->
		<link href="/assets/css/mp-blog.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php echo $this->render('google-analytics.php'); ?>
	</head>

	<body>
		<div class="blog-masthead">
		<?php
				echo $this->render('nav.php', $_vars); // Example: how to inherit variables from parent
			?>
		</div>
		<div class="container">
			<?php
				if (isset($_exception) && strlen($_exception) > 0) {
					$vars = array('ex'=>$_exception);
					echo $this->render('sys/php-exception.php', $vars);
				}
			?>
			<?php
				if (isset($_captured) && strlen($_captured) > 0) {
					$vars = array('captured'=>$_captured);
					echo $this->render('sys/php-captured-output.php', $vars);
				}
			?>

			<?php
				if ($_req->path == '/') {
			?>
				<div class="blog-header">
					<h1 class="blog-title">Matt Parrett's Blog</h1>
					<p class="lead blog-description">
						Welcome to my aptly-named website and blog where I write about stuff
					</p>
				</div>
			<?php
				} else {
			?>
				<br/>
			<?php
				}
			?>
			<?php
				// Render child "view" content. Requires $_extends in child template.
				echo $_child;
			?>
		</div><!-- /.container -->

		<div class="blog-footer">
			<p>
				Blog template built for <a href="http://getbootstrap.com">Bootstrap</a>
				by <a href="https://twitter.com/mdo">@mdo</a>.</p>
			<p>
				<a href="#">Back to top</a>
			</p>
		</div>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
	</body>
</html>

