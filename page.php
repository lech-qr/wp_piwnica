<?php get_header(); ?>
  <section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="col-10 align-self-center">
        <?php the_content(); ?>
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