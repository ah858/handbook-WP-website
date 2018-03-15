<?php
/*
Template Name: Interview Test
*/
?>

<?php get_header(); ?>

<div class="container">

    <?php get_sidebar('interviews'); ?>

    <div class="content-container">
      <div class="content">


        <?php /* query_posts('cat=1&posts_per_page=5');

        if (have_posts()) : while (have_posts()) : the_post();

        the_content();

        endwhile; endif; */ ?>


      	<?php 
      	if ( have_posts() ) : while ( have_posts() ) : the_post();
    		
        /* grab the url for the full size featured image */
        $featured_img_url = get_the_post_thumbnail_url('full'); 

        /* NEED TO MAKE THIS CSS SO PIC IS SQUARE BOX */

        echo '<div class="post-thumbnail">
          <style="background-image:';
        echo wp_get_attachment_url($post->ID, 'medium' );  
        /* echo get_the_post_thumbnail_url('full'); */
        echo ';"></style></div>" '; 
           /* the_post_thumbnail('thumbnail'); 
        the_content();  */
      	endwhile; endif; 
      	?>
		

      </div><!-- content -->
    </div> <!-- content container -->

<?php get_footer(); ?>
