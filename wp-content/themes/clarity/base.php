
<?php get_template_part('templates/head'); ?>

<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <?php if(is_front_page()): ?>


    <?php get_template_part('templates/frontpage'); ?>

  <?php else: ?>

  <?php get_template_part('templates/page', 'header'); ?>

  <div class="wrap container" role="document">

    <div class="content row">

      <main class="main" role="main">

        <?php include roots_template_path(); ?>

      </main> <!-- .main -->

      <?php if (roots_display_sidebar()) : ?>

        <aside class="sidebar" role="complementary">

          <?php include roots_sidebar_path(); ?>

        </aside> <!-- .sidebar -->

      <?php endif; ?>

    </div> <!-- .content -->

  </div> <!-- .wrap -->
    
  <?php endif; ?>
  
  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

  <script>

    function scrollNav() {
      $('.nav a').click(function(){  
        //Toggle Class
        $("nav a .active").removeClass("nav a .active");      
        $(this).closest('li').addClass("nav a .active");
        var theClass = $(this).attr("class");
        $('.'+theClass).parent('li').addClass('nav a .active');
        //Animate
        $('html, body').stop().animate({
            scrollTop: $( $(this).attr('href') ).offset().top - 160
        }, 400);
        return false;
      });
      $('.scrollTop a').scrollTop();
    }
    scrollNav();

    $('.carousel').bcSwipe({ threshold: 50 });


  </script>


</body>

</html>