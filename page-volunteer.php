<?php get_header() ?>

<div id="volunteer" class="container-fluid page-banner" style="background-image:url(<?php echo get_field('background_img')['sizes']['large']; ?>); ">
    <p class="text-center"><?= get_the_title()?></p>
</div>

<div class="container py-5 text-center">
    <h1 class="theme-color py-4"><?php the_field('heading_text');?></h1>
    <p class="text-center"><?php the_field('sub_header_text');?></p>

    <div class="pt-4 pb-3">
      <a href="<?php the_field('contact_us_url');?>" type="button" class="btn btn-more-news" role="button">Contact Us</a>
    </div>
</div>

<?php get_footer() ?>