<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
      <header>
        <div class="container py-3">
            <nav class="navbar navbar-expand-md bg-white navbar-light">
              <div class="navbar-brand"><?php the_custom_logo() ?></div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarCollapse',
                    'menu_class'        => 'nav navbar-nav ml-auto',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                  );
              ?>
            </nav>
        </div>
      </header>
      
      <main role="main">