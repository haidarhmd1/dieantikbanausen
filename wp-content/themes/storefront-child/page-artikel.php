<?php
/**
 * Template Name: Unsere Artikel
 */

get_header(); 

?>

  <main id="main">
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix" style="min-height:100vh; padding: 120px 0;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
              <?php
      $categories = get_terms( 'category', array(
        'orderby'    => 'count',
        'hide_empty' => true,
    ) );
        foreach ($categories as $ct) {
          ?>
          <li data-filter=".filter-<?php echo $ct->slug; ?>"><?php echo $ct->name; ?></li>
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
                  'posts_per_page' => -1, 
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
                <h4><a href="#"><?php echo get_the_title(); ?></a></h4>
                <p><?php echo get_the_content(); ?></p>
                <div>
                  <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox="portfolio" data-title="<?php echo get_the_title(); ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php
              endwhile;

              wp_reset_postdata(); 
        ?>

        </div>

      </div>
    </section><!-- #portfolio -->
  </main>

<?php
get_footer();
