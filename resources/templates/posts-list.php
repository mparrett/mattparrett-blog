<?php
    $_extends = 'layout.php';
?>

<div class="row">
	<div class="col-sm-8 blog-main">
		<ul>
			<?php foreach ($posts as $post) {
    ?>
				<li><a href="/blog/post/<?=$post['id']?>"><?php echo $post['title']; ?></a></li>
			<?php 
} ?>
		</ul>
	</div><!-- /.blog-main -->

	<?php
        echo $this->render('sidebar.php');
    ?>
</div><!-- /.row -->
