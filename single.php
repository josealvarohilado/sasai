<?php get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
  
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();?>
        <div class="container pb-5">
            <?php if(has_post_thumbnail()):?>
            <div class="post-thumb text-center py-5">
                <?php the_post_thumbnail('large');?>
            </div>
            <?php endif?>
            <h2 class='theme-color'><?php the_title(); ?></h2>
            <?php the_content( );?>
        </div>
        <?php
        // End the loop.
        endwhile;
        ?>
  
        </main><!-- .site-main -->
    </div><!-- .content-area -->
  
<?php get_footer(); ?>
