<?php 
/*
Template Name: Page Template
*/
get_header();

if (have_rows('section_content')):
  while (have_rows('section_content')) : the_row();

  if (get_row_layout() === 'donate_section') :?>
    <!-- Donate Section -->
    <section id="donate" class="py-5 container-fluid" style="background-image:url(<?php the_field('donate_bg_img','option'); ?>)">
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
          <?php if(get_field('donate_button_url','option') != NULL || get_field('donate_button_url','option') != ''): ?>
            <div class="text-center pt-3">
              <a href="<?php the_field('donate_button_url','option');?>" type="button" class="btn btn-donate" role="button">Donate</a>
            </div>
          <?php endif; ?>
        </div>
    </section>

<?php elseif(get_row_layout() === 'banner_section') :?>
  <!-- Banner Section -->
  <div id="donate-page" class="container-fluid page-banner" style="background-image:url(<?php echo get_sub_field('background_image')['sizes']['large']; ?>); ">
      <p class="text-center"><?= get_the_title()?></p>
  </div>

<?php elseif(get_row_layout() === 'text_content_section') :?>
  <!-- Text Content -->
  <div class="container pad-container">
    <div id='text-content'>
      <?php the_sub_field('text_content');?>
    </div>
    <?php if(get_sub_field('text_content_page_link') != NULL):?>
      <div class="pt-4 pb-3 text-center">
        <a href="<?php the_sub_field('text_content_page_link');?>" type="button" class="btn btn-custom" role="button"><?php the_sub_field('text_content_button_text');?></a>
      </div>
    <?php endif;?>
  </div>

<?php elseif(get_row_layout() === 'latest_news_section') :?>
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
    <?php if(get_sub_field('latest_news_page_link') != NULL || get_sub_field('latest_news_page_link') != ''):?>
      <div class="pt-4 pb-3 text-center">
        <a href="<?php the_sub_field('latest_news_page_link');?>" type="button" class="btn btn-custom" role="button"><?php the_sub_field('latest_news_button_text');?></a>
      </div>
    <?php endif;?>
  </section>

<?php elseif(get_row_layout()==='contact_us_section'):?>
  <!-- Contact Us Section -->
  <div class="container pad-container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="theme-color"><?php the_field('contact_us_heading_text','option')?></h3>
            <p><?php the_field('contact_us_sub_heading','option')?></p>
            <p class="theme-color">Address</p>
            <p><?php the_field('address','option');?></p>
            <p class="theme-color">Contact</p>
            <p><span><i class="fas fa-phone pr-1 theme-color"></i></span><?php the_field('contact_number','option');?></p>
            <p><span><i class="fas fa-envelope pr-1 theme-color"></i></span><?php the_field('email','option');?></p>
        </div>
        <div class="col-md-6 contact-form">
        <h3 class="theme-color">Contact Us</h3>
        <?php echo do_shortcode('[contact-form-7 id="2229" title="Contact form"]')?>
        </div>
    </div>
  </div>

<?php elseif(get_row_layout() === 'corporate_legends_section'):?>
  <!-- Corporate Legends Section -->
  <section id="corporate-legend" class="container py-5 text-center">
    <div>
      <?php the_sub_field('corporate_legend_text','option'); ?>
    <div class='container'>
    <?php
    // check if the repeater field has rows of data
      $totalRows = count(get_field('sponsors','option'));
      if( have_rows('sponsors') ):
          $r = 0;
          // loop through the rows of data
          while ( have_rows('sponsors') ) : the_row();
            if ($r == 0 || $r % 3 == 0 ) :
              $remainingItems = $totalRows - $r;
              
      ?>
        <div class="row pb-4">
      <?php
            endif;
          $r++;
          $sponsor_img_url = get_sub_field('sponsor_gallery')['url'];
          $sponsor_img_alt = get_sub_field('sponsor_gallery')['alt'];
          $sponsor_url = get_sub_field('sponsor_url');

          if ( $remainingItems >= 3) : ?>
            <!-- Sponsors more than 3, create 3 columns -->
            <div class="col-md-4 sponsors py-2">
          <?php elseif ($remainingItems == 2): ?>
            <!-- Only 2 sponsors left, create 2 columns -->
            <div class="col-md-6 sponsors py-2">
          <?php else: ?>
            <!-- 1 Sponsor left, create 1 column -->
            <div class="col-md-12 sponsors py-2">
          <?php endif; ?>
              <?php
                if($sponsor_url != '') : ?>
                  <a href="<?= $sponsor_url?>"><img src="<?= $sponsor_img_url?>" alt="<?= $sponsor_img_alt?>"></a>
                <?php else: ?>
                  <img src="<?= $sponsor_img_url?>" alt="<?= $sponsor_img_alt?>">
                <?php endif; ?>
          </div>
      <?php
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
<?php
  endif;
  endwhile;
endif;

get_footer(); ?>