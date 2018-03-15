<div class="sidebar">
  <ul class="sidebar-search">
    <h1 class="sidebar-title"><?php the_title(); ?></h1>
  </ul>
  <ul class="sidebar-interviews">
    <?php 
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

    <?php else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
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