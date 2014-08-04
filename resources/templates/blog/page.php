<?php
  $_extends = 'layout.php';

  // Generic page template
  // Displays a title if one is set
  // Otherwise skips it
?>
<div class="row">
  <div class="col-sm-10 blog-main">
    <div class="blog-post">
    <?= $body ?>
    </div>
  </div><!-- /.blog-main -->
</div><!-- /.row -->
