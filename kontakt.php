<?php
/*
Template Name: Kontakt
*/
?>

<?php get_header(); ?>
  <section>
    <span class="after"></span>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="col-10 align-self-center">
        <?php the_content(); ?>
      </article>
      <object class="map" data="https://www.openstreetmap.org/export/embed.html?bbox=22.565702050924305%2C51.24649259869737%2C22.567108869552616%2C51.24755538432005&amp;layer=hot&amp;marker=51.24702399457874%2C22.566405460238457" border="0" width="100%"></object>
    <?php endwhile; else : ?>
      <article>
        <p>Sorry, no page content was found!</p>
      </article>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>