<?php
    $_extends = 'layout.php';
    $_title = 'Linux and Life'
?>

<div class="row">
	<div class="col-sm-8 blog-main">
		<?php
            echo $about;
        ?>
		<hr/>
		<h1>Recent Posts</h1>
		<hr/>
		<?php
            foreach ($posts as $post) {
                echo $this->render('elements/post.php', $post);
            }
        ?>
	</div><!-- /.blog-main -->

	<?php
        echo $this->render('sidebar.php');
    ?>

</div><!-- /.row -->
