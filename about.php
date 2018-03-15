<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div class="container">

    <?php get_sidebar('about-script'); ?>

    <div class="content-container">
      <div class="content">

        <?php
      	if ( have_posts() ) : while ( have_posts() ) : the_post();
    		the_content();
      	endwhile; endif;
      	?>

      </div><!-- content -->
    </div> <!-- content container -->

<?php get_footer(); ?>
