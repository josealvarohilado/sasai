<?php
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
      <h1 class="theme-color"><?php the_field('section_heading','option')?></h1>
      <h3><?php the_field('section_sub_heading','option')?></h3>
    </div>
    
    <div class="row">
        <?php
            $recent_posts = wp_get_recent_posts( array(
                'numberposts' => 3,
                'post_status' => 'publish'
            ));
                foreach($recent_posts as $post) : ?>
            <div class="col-md-4">
                <a href="<?= the_permalink($post['ID']);?>"><img src="<?= get_the_post_thumbnail_url( $post['ID']); ?>" alt="<?= $post['post_title'];?>" class="img" height="250" width="250"></a>
                <p><?= $post['post_title'];?></p>
            </div>
            <?php endforeach;?>
    </div>
    <?php if(get_sub_field('latest_news_page_link') != NULL || get_sub_field('latest_news_page_link') != ''):?>
      <div class="pt-4 text-center">
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
  <section id="corporate-legend" class="container py-3 text-center">
    <div>
      <?php the_field('corporate_legend_text','option'); ?>
        <div class='container pb-5 pt-3'>
            <?php
                $columns = get_field('icon_columns','option');
                if(get_field('autoplay','option')) {
                  $autoplay = 'true';
                }else{
                  $autoplay = 'false';
                };
                
                echo do_shortcode('[logoshowcase slides_column="'.$columns.'" dots="false" loop="true" autoplay="'.$autoplay.'" image_size="medium"]');
            ?>
        </div>
    </div>
  </section>

<?php
  endif;
  endwhile;
endif;
?>