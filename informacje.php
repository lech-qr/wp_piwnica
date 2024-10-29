<?php
/*
Template Name: Informacje
*/
?>
<?php get_header(); ?>
  <section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="col-10 align-self-center">
        <?php the_content(); ?>
        <br>
        <!-- Wyświetlanie postów z kategorii o ID 1 w akordeonie -->
        <?php
          $category_query = new WP_Query(array(
            'cat' => 1, // ID kategorii
            'posts_per_page' => -1 // -1 wyświetla wszystkie posty
          ));

          if ($category_query->have_posts()) :
        ?>
          <div class="accordion accordion-flush" id="categoryAccordion">
            <?php
              $post_index = 0; // Zmienna do unikalnych identyfikatorów każdego elementu
              while ($category_query->have_posts()) : $category_query->the_post();
                $post_index++;
                $post_id = 'post-' . get_the_ID();
                $heading_id = 'heading' . $post_index;
                $collapse_id = 'collapse' . $post_index;
            ?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="<?php echo $heading_id; ?>">
                <!-- <?php echo $post_index > 1 ? 'collapsed' : ''; ?> -->
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $collapse_id; ?>" aria-expanded="false" aria-controls="<?php echo $collapse_id; ?>">
                    <?php the_title(); ?>
                  </button>
                </h2>
                <!-- <?php echo $post_index === 1 ? 'show' : ''; ?> -->
                <div id="<?php echo $collapse_id; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $heading_id; ?>" data-bs-parent="#categoryAccordion">
                  <div class="accordion-body">
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
        <?php else : ?>
          <p>Brak postów w tej kategorii.</p>
        <?php endif; ?>
        
      </article>
    <?php endwhile; else : ?>
      <article>
        <p>Sorry, no page content was found!</p>
      </article>      
    <?php endif; ?>    
  </section>
  <footer class="d-xl-none">
    <?php include("footer_content.php"); ?>
  </footer>
</main>
<?php get_footer(); ?>