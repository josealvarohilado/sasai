<?php wp_footer(); ?>
<!-- FOOTER -->
<footer class="container-fluid">
  <div class="container py-5">
    <div class="row footer-text-align">
      <div class="col-md-3 col-lg-3">
        <h6>Ways to give</h6>
        <ul class="list-unstyled">
          <?php
          if(have_rows ('ways_to_give_repeater','option')):
            while(have_rows('ways_to_give_repeater','option')) : the_row();
            ?>
            <li><a href="<?php the_sub_field('link_url');?>"><?php the_sub_field('link_text');?></a></li>
            <?php
             endwhile;
          endif;
          ?>
        </ul>
      </div>
      <div class="col-md-3 col-lg-3">
        <h6>More from SASAI</h6>
        <ul class="list-unstyled">
          <?php
            if(have_rows ('more_from_sasai_repeater','option')):
              while(have_rows('more_from_sasai_repeater','option')) : the_row();
              ?>
              <li><a href="<?php the_sub_field('link_url');?>"><?php the_sub_field('link_text');?></a></li>
              <?php
              endwhile;
            endif;
          ?>
        </ul>
      </div>
      <div class="col-md-3 col-lg-3">
        <h6>Contact Us</h6>
        <ul class="list-unstyled">
          <li><?php the_field('phone_number','option')?></li>
          <li><?php the_field('address','option')?></li>
          <li><?php the_field('australia_charity_number','option')?></li>
          <li><?php the_field('copyright','option')?></li>
        </ul>
      </div>
      <div class="col-md-3 col-lg-3 text-center">
        <h6>Connect with us through</h6>
        <div>
          <a href="<?php the_field('facebook_url','option')?>" type="button" class="btn" role="button"><i class="fab fa-facebook-f"></i></a>
          <a href="<?php the_field('youtube_url','option')?>" type="button" class="btn" role="button"><i class="fab fa-youtube"></i></a>
          <a href="<?php the_field('twitter_url','option')?>" type="button" class="btn" role="button"><i class="fab fa-twitter"></i></a>
          <a href="<?php the_field('linked_in_url','option')?>" type="button" class="btn" role="button"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
</body>
</html>
