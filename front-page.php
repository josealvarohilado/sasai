<?php get_header() ?>
  <!-- Carousel -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        
        <?php
        //loop through banner gallery items
        $i = 0; 
        foreach (get_field('banner_gallery') as $image): 
        ?>
            <div class="carousel-item <?php if($i==0) echo 'active';?>">
                <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt'];?>">
            </div>

        <?php
        $i++; 
        endforeach;?>
    </div>
    <div class="text-overlay">
        <h1><?php the_field('banner_tag_line'); ?></h1>
      </div>
  </div>

  <!-- We are SASAI section -->
  <section id="we-are-sasai" class="container text-center pb-5">
    <div class="text-center">
      <h1 class="we-are-sasai">Welcome we are <span class="theme-color">SASAI</span></h1>
      <div class="sasai-descr">
        <p><?php the_field('sasai_description')?></p>
      </div>
    </div>

    <!-- Three columns -->
    <div class="row three-columns py-4">
    <?php
      if (have_rows('icons')):
          while (have_rows('icons')) : the_row();
          ?>
          <div class="col-lg-4" >
            <img src="<?php echo get_sub_field('icon_image')['url'];?>" width="140" height="140" alt="<?php echo get_sub_field('icon_image')['alt'];?>">
            <p class="mt-2"><?php the_sub_field('icon_text');?></p>
          </div>
          <?php
        endwhile;
      endif;
    ?>
    </div><!-- /.row -->

    <!-- Learn More -->
    <div class="text-center learn-more py-1">
      <a href="<?php the_field('learn_more_url'); ?>">
        <p class="d-inline theme-color"> <?php the_field('learn_more_text');?> </p>
        <span class="align-top"> 
          <svg class="bi bi-arrow-right-circle-fill theme-color " width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
          </svg>
        </span>
      </a>
    </div>
  </section>

  <!-- Donate Section -->
  
  <section id="donate" class="container-fluid" style="background-image:url(<?php the_field('donate_bg_img','option'); ?>)">
    <div class="container py-5" id="donate">
      <div class="text-center">
        <h2><?php the_field('top_text','option');?></h2>
      </div>
      <div class="text-center pb-2">
        <h3><?php the_field('sub_text','option');?></h3>
      </div>
      <div>
        <?php the_field('bullet_points','option');?>
      </div>
      <div class="text-center pt-3">
        <a href="<?php the_field('donate_button_url','option');?>" type="button" class="btn btn-donate" role="button">Donate</a>
      </div>
    </div>
  </section>

  <!-- Latest News Section -->
  <section id="latest-news" class="container pt-5 pb-3 text-center">
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
      <a href="<?php the_field('latest_news_url','option');?>" type="button" class="btn btn-more-news" role="button">See More News</a>
    </div> 
  </section>

  <!-- Corporate Legends Section -->
  <section id="corporate-legend" class="container py-5 text-center">
    <div>
      <h1 class="">Become a <span class="theme-color">Corporate Legend</span></h1>
      <p><?php the_field('corporate_legend_text'); ?></p>
    <div class='container'>
    <?php
    // check if the repeater field has rows of data
      if( have_rows('sponsors') ):
          $r = 0;
          // loop through the rows of data
          while ( have_rows('sponsors') ) : the_row();
            if ($r == 0 || $r % 3 == 0 ) :
              $remainingItems = (count(get_field('sponsors')) - ($r));
      ?>
        <div class="row pb-4">
      <?php
            endif;
          $r++;
          $sponsor_img_url = get_sub_field('sponsor_gallery')['url'];
          $sponsor_img_alt = get_sub_field('sponsor_gallery')['alt'];

          if ( $remainingItems >= 3) :        
      ?>
          <!-- Sponsors more than 3, create 3 columns -->
          <div class="col-md-4 sponsors py-2">
              <a href="<?php the_sub_field('sponsor_url')?>"><img src="<?= $sponsor_img_url?>" alt="<?= $sponsor_img_alt?>"></a>
          </div>
      <?php 
          elseif ($remainingItems == 2): 
      ?>
          <!-- Only 2 sponsors left, create 2 columns -->
          <div class="col-md-6 sponsors py-2">
              <a href="<?php the_sub_field('sponsor_url')?>"><img src="<?= $sponsor_img_url?>" alt="<?= $sponsor_img_alt?>" ></a>
          </div>
      <?php
          else:
      ?>
          <!-- 1 Sponsor left, create 1 column -->
          <div class="col-md-12 sponsors py-2">
            <a href="<?php the_sub_field('sponsor_url')?>"><img src="<?= $sponsor_img_url?>" alt="<?= $sponsor_img_alt?>" ></a>
          </div>
      <?php
          endif;
          if ($r == 0 || $r % 3 == 0 ) :
      ?>
        </div> 
      <?php
          endif;
          endwhile;
      else :
          // no rows found
      endif;
      ?>
      </div>
    </div>
  </section>

  </div><!-- /.container -->

<?php get_footer() ?>
