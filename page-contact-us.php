<?php get_header() ?>

<div id="about-us" class="container-fluid page-banner" style="background-image:url(<?php echo get_field('background_img')['sizes']['large']; ?>); ">
    <p class="text-center"><?= get_the_title()?></p>
</div>

<div class="container pad-container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="theme-color">We would love to hear from you</h3>
            <p>Please write or call us with your questions or comments</p>
            <p class="theme-color">Address</p>
            <p><?php the_field('address');?></p>
            <p class="theme-color">Contact</p>
            <p><span><i class="fas fa-phone pr-1 theme-color"></i></span><?php the_field('contact_number');?></p>
            <p><span><i class="fas fa-envelope pr-1 theme-color"></i></span><?php the_field('email');?></p>
        </div>
        <div class="col-md-6 contact-form">
        <h3 class="theme-color">Contact Us</h3>
        <?php echo do_shortcode('[contact-form-7 id="2229" title="Contact form"]')?>
        </div>
    </div>
</div>

<?php get_footer() ?>