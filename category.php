<?php
/*
Template Name: Interview Insights
*/
?>

<?php get_header(); ?>

<div class="container">

    <?php get_sidebar('category'); ?>

    <div class="content-container">
      <div class="content">


      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h2> <?php the_title(); ?> </h2>
        
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('medium');
        } ?>

    		<p> <?php the_excerpt(); ?> </p>

        <p class="read-more"><a href = <?php the_permalink() ?>>Read more ...</a></p>

        <p> ========================= <p>

        <?php
      	endwhile; endif; 
      	?>
		


      </div><!-- content -->
    </div> <!-- content container -->

<?php get_footer(); ?>
