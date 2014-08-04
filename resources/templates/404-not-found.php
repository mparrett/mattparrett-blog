<?php
	$_extends = 'layout.php';
?>
<div class="row">
    <div class="jumbotron">
		<div class="page-header">
			<h1>404</h1>
		</div>
		<div class="well">
			Sorry, <strong><?php echo $_req->path; ?></strong> was not found.
		</div>
	</div>
</div>
