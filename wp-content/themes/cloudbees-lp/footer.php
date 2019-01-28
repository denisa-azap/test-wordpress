
<footer>
  <div class="bg-footer">
    <div class="container">
      <div class="row">
        <span class="col-sm-8 copyright py-2 py-md-0">
            <p class="copyright float-left">©CloudBees, Inc 2010-2019
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        </span>

        <div class="col-sm-4 py-2 text-center">

          <?php

            // check if the repeater field has rows of data
            if( have_rows('social_media_links') ):

             	// loop through the rows of data
                while ( have_rows('social_media_links') ) : the_row();
                  ?>

                  <div class="col-xs-1 d-inline float-md-right pl-2 pl-sm-2">
                    <a href="<?php echo the_sub_field('social_media_url');?>" target="_blank">
                      <img src="<?php echo the_sub_field('social_media_logo'); ?>"/>
                    </a>
                  </div>
            <?php
                endwhile;

            endif;

            ?>
        </div>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>
