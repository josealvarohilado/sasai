<?php get_header() ?>

<div class="container pad-container">
    <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
            // Display post content
            the_content();
        endwhile; 
    endif; 
    ?>
</div>

<?php get_footer() ?>