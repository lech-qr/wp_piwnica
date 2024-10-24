<?php get_header(); ?>

  <section>
  <?php
    // Custom query to sort posts from oldest to newest
    $args = array(
      'orderby' => 'date',
      'order'   => 'ASC',
    );
    $query = new WP_Query( $args );

    if ( $query->have_posts() ) :
      while ( $query->have_posts() ) : $query->the_post(); ?>
        <article>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </article>
      <?php endwhile;
    else : ?>
      <article>
        <p>Sorry, no posts were found!</p>
      </article>
    <?php endif;

    // Reset post data to avoid conflicts
    wp_reset_postdata();
  ?>

  </section>
<?php get_footer(); ?>
