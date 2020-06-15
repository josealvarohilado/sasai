<?php get_header() ?>

<div id="activities" class="container-fluid page-banner" style="background-image:url(<?php echo get_field('background_img')['sizes']['large']; ?>); ">
    <p class="text-center"><?= get_the_title()?></p>
</div>

<!-- Latest News Section -->
<section id="latest-news" class="container pad-container text-center">
    <div class="pb-4">
      <h1 class="theme-color">Latest News</h1>
      <h3>Stay updated to our works and activities around NSW & ACT</h3>
    </div>
    
    <div class="row">
    <?php
      if (have_rows('latest_news_section','option')):
        while (have_rows('latest_news_section','option') ) : the_row();
          // override $post
          $post = get_sub_field('news');
          setup_postdata( $post ); 

          $post_thubmnail = get_sub_field('news_thumbnail')['sizes']['medium'];
          $post_thumbnail_alt = get_sub_field('news_thumbnail')['alt'];
    ?>
      <div class="col-md-4">
        <a href="<?php the_permalink()?>"><img src="<?= $post_thubmnail; ?>" alt="<?= $post_thumbnail_alt; ?>" class="img" height="250" width="250"></a>
        <p><?php the_title()?></p>
      </div>
    <?php
        wp_reset_postdata();
        endwhile;
        
      endif;
    ?>
    </div>
    <div class="py-4">
        <h1 class="theme-color">Time Table</h1>
    </div> 
  </section>
<?php get_footer() ?>