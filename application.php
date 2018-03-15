<?php
/*
Template Name: Application Advice
*/
?>

<?php get_header(); ?>

<div class="container">

    <?php get_sidebar('application'); ?>

    <div class="content-container">
      <!-- <div class="content"> -->

        <h1><?php the_title(); ?></h1>

      	<?php 
      	if ( have_posts() ) : while ( have_posts() ) : the_post();
    		the_content();  
      	endwhile; endif; 
      	?>
		


      <!-- </div><!-- content -->
    </div> <!-- content container -->

<?php get_footer(); ?>
