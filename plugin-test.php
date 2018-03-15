<?php
/*
Template Name: plugin-test
*/
?>

<?php get_header(); ?>

  <div class="row">

    <div class="col-sm-8 blog-main">

      <?php 
      if ( have_posts() ) : while ( have_posts() ) : the_post();
    	the_content();  
      endwhile; endif; 
      ?>

    </div> <!-- /.blog-main -->

  </div> <!-- /.row -->

<?php get_footer(); ?>
