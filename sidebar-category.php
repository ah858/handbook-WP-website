<div class="sidebar">
  <ul class="sidebar-search">
    <h1 class="sidebar-title"><?php single_cat_title(); ?></h1>
  </ul>
  <ul class="sidebar-interviews">
    <?php 
    
    $related = new WP_Query(
      array(
        'category__in'   => wp_get_post_categories( $post->ID ),
        'posts_per_page' => 5,
        'post__not_in'   => array( $post->ID )
      )
    );

    if( $related->have_posts() ) { 
      while( $related->have_posts() ) { 
        $related->the_post(); ?>

        <!-- whatever you want to output*/ -->
        <div class="sidebar-tab-button tablink">
        <a href= <?php the_permalink(); ?> >
          <?php the_title(); ?></div></a>
      <?php }
      wp_reset_postdata();
    }

    /* POSSIBLE TITLE CODE to display topic title
<?php
  setup_postdata($post);
  $perma_cat = get_post_meta($post->ID , '_category_permalink', true);
  if ( $perma_cat != null ) {
    $cat_id = $perma_cat['category'];
    $cat = get_category($cat_id);
    $category_link = get_category_link($cat_id);
    $category_name = $cat->name;
  } else {               
    $cat = get_the_category();
    $category_link = get_category_link($category->term_id);
    $category_name = $cat[0]->cat_name;
  }
?>
<a href="<?php echo $category_link ?>"><?php echo $category_name ?></a>
    */


    /* OLD CODE which displays all posts

    // the query
    $the_query = new WP_Query( get_the_category() ); ?>

    <?php if ( $the_query->have_posts() ) : ?>

      <!-- pagination here -->

      <!-- the loop -->
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="sidebar-tab-button tablink">
          <a href= <?php the_permalink(); ?> >
          <?php the_title(); ?></div></a>
      <?php endwhile; ?>
      <!-- end of the loop -->

      <!-- pagination here -->

      <?php wp_reset_postdata(); ?> 

    <?php  else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>*/ ?>
  </ul>
  <div class="sidebar-footer"></div>
</div> <!-- end sidebar -->



<?php /*

<!-- Left sidebar navigation -->
<div class="sidebar">
  <ul class="sidebar-search">
    <h1 class="sidebar-title"><?php the_title(); ?></h1>
  </ul>
  <ul class="sidebar-interviews">

  <!-- The buttons in the sidebar -->
    <button class="sidebar-tab-button tab-active tablink" onclick="openTab(event, 'tab1')">What is this site?</button>
    <button class="sidebar-tab-button tablink" onclick="openTab(event, 'tab2')">Who are we?</button>
    <button class="sidebar-tab-button tablink" onclick="openTab(event, 'tab3')">Let's go!</button>
  </ul>
  <div class="sidebar-footer"></div>
</div> <!-- end sidebar -->

*/?>