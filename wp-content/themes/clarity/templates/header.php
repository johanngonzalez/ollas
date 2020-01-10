
<header class="banner navbar navbar-default navbar-static-top" role="banner">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><span><?php bloginfo('name'); ?></span></a>

    </div> <!-- .navbar-header -->

    <?php if ( is_active_sidebar( 'sidebar-header' ) ) : ?>

      <div id="sidebar-header" class="clear clearfix">
        <?php dynamic_sidebar('sidebar-header'); ?>
      </div> <!-- #sidebar-header -->

    <?php endif; ?>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>

  </div> <!-- .container -->

</header>

