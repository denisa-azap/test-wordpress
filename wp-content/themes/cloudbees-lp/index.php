<?php get_header(); ?>

<section class="first-section">
  <div class="container py-sm-5">
    <div class="row mt-2">
      <div class="col-lg-7 px-3 text-not-quite-white mb-4 mb-lg-0">
          <h1 class="mb-3 mt-2 mt-md-0 text-left"><?php the_field('page_title'); ?></h1>
          <div class="pt-2"><?php the_field('first_paragraph'); ?></div>
        </div>

      <div class="col-lg-5 text-grey white-bg px-4">

          <div class="pt-4">
            <h2 class="headerform"><?php the_field('contact_form_header'); ?></h2>
            <?php the_field('contact_form'); ?>

          </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="second-section"><div class="container text-center py-5"><div class="row">
  </div></section> -->

<section class="second-section">
  <div class="container text-center py-5">
    <div class="row">
      <div class="col-sm-12 text-grey">
          <h2><?php the_field('second_title'); ?></h2>
          <?php the_field('second_paragraph'); ?>
          <a href="#" class="btn orange-btn orange-btn mt-2 mb-3"  role="button"><?php the_field('download_button'); ?></a>
      </div>
    </div>
  </div>
</section>

<section class="third-section">
  <div class="background-grey">
    <div class="container text-center text-grey py-5">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="pb-1"><?php the_field('third_title'); ?></h2>
          <p class="py-4 p-section"><?php the_field('third_paragraph'); ?></p>
          <div class="row mt-4 mb-text-blue">
            <div class="col-sm-4 px-5">
              <?php the_field('first_feature'); ?>
              <!-- <img src="images/icon1.png" alt="continuous delivery">
              <h3 class="mx-5 px-4 mb-5">Jenkins Open Source Continuous Delivery Engine</h3> -->
            </div>
            <div class="col-sm-4 px-4">
              <?php the_field('second_feature'); ?>
              <!-- <img src="images/icon3.png" alt="security">
              <h3 class="mx-4 mb-5">Advanced Enterprise Features for scalability, security, and manageability</h3> -->
            </div>
            <div class="col-sm-4 px-5 pt-xs-3">
              <?php the_field('third_feature'); ?>
              <!-- <img src="images/icon2.png" alt="tech support">
              <h3 class="mx-4">Expert Technical <br>Support</h3> -->
            </div>
          </div>
          <p class="mb-5 mt-4"><?php the_field('text_above_button'); ?></p>
          <a href="#" class="btn orange-btn orange-btn-thirdsection mb-1"  role="button"><?php the_field('free_trial_button'); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="fourth-section">
  <div class="container text-center text-grey py-5">
    <div class="row">
      <div class="col-sm-12">
          <h2 class="mt-1"><?php the_field('fourth_title'); ?></h2>
          <p class="my-5"><?php the_field('fourth_paragraph'); ?> </p>
          <a href="#" class="btn orange-btn orange-btn-fourthdsection mt-4 mb-2"  role="button"><?php the_field('webinar_button'); ?></a>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
