<?php
	$_extends = 'layout.php';
?>

<div class="row">
	<div class="col-sm-8 blog-main">
		<?php
			// Inherit variables from parent
			echo $this->render('elements/post.php', $post);
		?>

		<?php if(isset($next)) { ?>
			<ul class="pager">
				<li class="previous"><a href="/blog/post/<?=$prev?>">&larr; Previous</a></li>
				<li class="next"><a href="/blog/post/<?=$next?>">Next &rarr;</a></li>
			</ul>
		<?php } ?>
	</div><!-- /.blog-main -->

	<?php
		echo $this->render('sidebar.php');
	?>
</div><!-- /.row -->