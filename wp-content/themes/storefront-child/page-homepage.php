<?php

/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template Name: Homepage
 *
 * @package storefront
 */

get_header(); ?>


<!--==========================
    Intro Section
  ============================-->
<section id="intro" class="clearfix">
  <div class="container">

    <div class="intro-img">
      <img src="<?php echo get_field('banner_image'); ?>" alt="" class="img-fluid">
    </div>

    <div class="intro-info">
      <h2>Die<br><span>Antik - </span><br>Banausen</h2>
      <div>
        <p>
          <?php echo get_field('sub_title'); ?>
        </p>
      </div>
      <div>
        <a class="all-articles" href="<?php echo site_url() . '/unsere-artikel'; ?>">Alle Artikel</a>
      </div>
    </div>

  </div>
</section><!-- #intro -->

<main id="main">

  <!--==========================
      About Us Section
    ============================-->
  <section id="about">
    <div class="container">
      <header class="section-header">
        <h3>
          <?php echo get_field('wer_wir_sind'); ?>
        </h3>
        <p>
          <?php echo get_field('wer_wir_sind_text'); ?>
        </p>
      </header>
    </div>
  </section><!-- #about -->

  <!--==========================
      Services Section
    ============================-->
  <section id="services" class="section-bg">
    <div class="container">

      <header class="section-header">
        <h3>
          <?php echo get_field('kategorie_title'); ?>
        </h3>
        <p>
          <?php echo get_field('kategorie_text'); ?>
        </p>
      </header>

      <div class="row" style="justify-content: center;">
        <?php
      $categories = get_terms( 'category', array(
        'orderby'    => 'count',
        'hide_empty' => true,
    ) );
        foreach ($categories as $ct) {
          ?>
        <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s" style="cursor: pointer;">
          <div class="box">
            <h4 class="title">
              <?php echo $ct->name; ?>
            </h4>
            <p class="description">
              <?php echo $ct->description; ?>
            </p>
          </div>
        </div>
        <?php
        }
      ?>
      </div>

    </div>
  </section><!-- #services -->

  <!--==========================
      Portfolio Section
    ============================-->
  <section id="portfolio" class="clearfix">
    <div class="container">

      <header class="section-header">
        <h3 class="section-title">Unsere Artikel</h3>
      </header>

      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <?php
        foreach ($categories as $ct) {
          ?>
            <li data-filter=".filter-<?php echo $ct->slug; ?>">
              <?php echo $ct->name; ?>
            </li>
            <?php
        }
      ?>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
        <?php
              $args = array(  
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 8, 
                            'orderby' => 'title',
                            'order' => 'ASC',
                        );

              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                ?>

        <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo get_the_category(get_the_ID())[0]->slug; ?>">
          <div class="portfolio-wrap">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">
                  <?php echo get_the_title(); ?>
                </a></h4>
              <p>
                <?php echo get_the_content(); ?>
              </p>
              <div>
                <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox="portfolio"
                  data-title="<?php echo get_the_title(); ?>" class="link-preview" title="Preview"><i
                    class="ion ion-eye"></i></a>
              </div>
            </div>
          </div>
        </div>
        <?php
              endwhile;

              wp_reset_postdata(); 
        ?>

      </div>
      <div class="button-view-all-container">
        <a href="<?php echo site_url() . '/unsere-artikel'; ?>">Alle Artikel</a>
      </div>
    </div>
  </section><!-- #portfolio -->

  <!--==========================
      Team Section
    ============================-->
  <!-- <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Unsere Gesischter</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
  <!-- #team -->

  <!--==========================
      Contact Section
    ============================-->
  <section id="contact">
    <div class="container-fluid">

      <div class="section-header">
        <h3>Wo wir sind</h3>
        <p>
          <?php echo get_field('kontaktinformation'); ?>
        </p>
      </div>

      <div class="row wow fadeInUp">

        <div class="col-lg-6">
          <div class="map mb-4 mb-lg-0">

            <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                src="https://maps.google.com/maps?q=Pascalstr.%2016,%2010587%20Berlin&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
              <style>
                .mapouter {
                  position: relative;
                  text-align: right;
                  height: 500px;
                  width: 100%;
                }
              </style><a href="https://www.embedgooglemap.net">google maps embedded api</a>
              <style>
                .gmap_canvas {
                  overflow: hidden;
                  background: none !important;
                  height: 500px;
                  width: 100%;
                }
              </style>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="row">
            <div class="col-md-5 info">
              <i class="ion-ios-location-outline"></i>
              <p>Pascalstr. 16</p>
            </div>
            <div class="col-md-4 info">
              <i class="ion-ios-email-outline"></i>
              <p>info@example.com</p>
            </div>
            <div class="col-md-3 info">
              <i class="ion-ios-telephone-outline"></i>
              <p><a href="tel:0049 30 290 45 990">0049 30 290 45 990</a></p>
            </div>
          </div>

          <div class="form">
            <?php echo do_shortcode('[contact-form-7 id="66" title="Contact form 1"]'); ?>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #contact -->

</main>

<?php
get_footer();