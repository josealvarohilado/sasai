<?php get_header() ?>

<div id="donate-page" class="container-fluid page-banner" style="background-image:url(<?php echo get_field('background_img')['sizes']['large']; ?>); ">
    <p class="text-center"><?= get_the_title()?></p>
</div>

<div class="container pad-container">
    <h1 class="theme-color text-center">Ways to Give</h1>
    <p class="text-center pb-3 donate-sub-heading"><?php the_field('ways_to_give_sub_text'); ?></p>
    <h2 class="theme-color"><?php the_field('sub_heading_1'); ?></h2>
    <p><?php the_field('sub_text_1'); ?></p>
    <h2 class="theme-color"><?php the_field('sub_heading_2'); ?></h2>
    <p><?php the_field('sub_text_2'); ?></p>
    <h2 class="theme-color"><?php the_field('sub_heading_3'); ?></h2>
    <p><?php the_field('sub_text_3'); ?></p>
</div>

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
      <div class="text-center pt-3">
        <a href="<?php the_field('donate_button_url','option');?>" type="button" class="btn btn-donate" role="button">Donate</a>
      </div>
    </div>
  </section>


<?php get_footer() ?>