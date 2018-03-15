<?php load_openTab(); ?>


<!-- Left sidebar navigation -->
<div class="sidebar">
  <ul class="sidebar-search">
    <h1 class="sidebar-title"><?php the_title(); ?></h1>
  </ul>
  <ul class="sidebar-interviews">

  <!-- The buttons in the sidebar -->
    <button class="sidebar-tab-button tab-active tablink" onclick="openTab(event, 'tab1')">Before Applying</button>
    <button class="sidebar-tab-button tablink" onclick="openTab(event, 'tab2')">Apply</button>
    <button class="sidebar-tab-button tablink" onclick="openTab(event, 'tab3')">Colleges</button>
    <button class="sidebar-tab-button tablink" onclick="openTab(event, 'tab4')">Interviews</button>

  <div class="sidebar-footer"></div>
</div> <!-- end sidebar -->