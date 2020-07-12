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
    <div class="container">
      <div class="text-overlay">
        <h1><?php the_field('banner_tag_line'); ?></h1>
      </div>
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
  
  <!-- Flexible Layout Section -->
  <?php get_template_part('template-parts/flexible-template');?> 
<?php
get_footer() ?>
