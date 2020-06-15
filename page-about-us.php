<?php get_header() ?>

<div id="about-us" class="container-fluid page-banner" style="background-image:url(<?php echo get_field('background_img')['sizes']['large']; ?>); ">
    <p class="text-center"><?= get_the_title()?></p>
</div>

<div class="container pad-container">
    <h1 class="theme-color pb-3">Vision</h1>
        <p><?php the_field('vision_text');?></p>
    <h1 class="theme-color pb-3">Mission</h1>
        <p><?php the_field('mission_text');?></p>  
    <h1 class="theme-color pb-3">Who we are</h1>
        <p><?php the_field('who_we_are_text');?></p>  
</div>

<?php get_footer() ?>