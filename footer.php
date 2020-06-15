<?php wp_footer(); ?>
<!-- FOOTER -->
<footer class="container-fluid">
  <div class="container py-5">
    <div class="row footer-text-align">
      <div class="col-md-3 col-lg-3">
        <h6>Ways to give</h6>
        <ul class="list-unstyled">
          <li><a href="<?php the_field('link_url_1','option')?>"><?php the_field('link_text_1','option')?></a></li>
          <li><a href="<?php the_field('link_url_2','option')?>"><?php the_field('link_text_2','option')?></a></li>
          <li><a href="<?php the_field('link_url_3','option')?>"><?php the_field('link_text_3','option')?></a></li>
          <li><a href="<?php the_field('link_url_4','option')?>"><?php the_field('link_text_4','option')?></a></li>
        </ul>
      </div>
      <div class="col-md-3 col-lg-3">
        <h6>More from SASAI</h6>
        <ul class="list-unstyled">
          <li><a href="<?php the_field('link_url_5','option')?>"><?php the_field('link_text_5','option')?></a></li>
          <li><a href="<?php the_field('link_url_6','option')?>"><?php the_field('link_text_6','option')?></a></li>
          <li><a href="<?php the_field('link_url_7','option')?>"><?php the_field('link_text_7','option')?></a></li>
          <li><a href="<?php the_field('link_url_8','option')?>"><?php the_field('link_text_8','option')?></a></li>
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
