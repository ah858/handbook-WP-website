<?php get_header(); ?>

<div class="container">

    <?php get_sidebar(single); ?>

    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
              
    <div class="post-banner-img" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
        <div class="post-banner-overlay">
            <h1><?php the_title(); ?></h1>
        </div> <!--overlay-->
    </div>  <!-- post-banner-image -->

    <div class="content-container">
      <div class="content-post">

      	<?php 
      	if ( have_posts() ) : while ( have_posts() ) : the_post();
    		the_content();  
      	endwhile; endif; 
      	?>
	

      </div><!-- content -->
    </div> <!-- content container -->

<?php get_footer(); ?>
