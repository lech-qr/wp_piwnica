<?php get_header(); ?>
  <section>
    <span class="after"></span>
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
  <footer class="d-md-none container">
    <p>Copyright &copy; <?php echo date("Y"); ?> piwnica-kata.pl - Wszystkie&nbsp;prawa&nbsp;zastrzeżone.</p>
    <p>Piwnica Kata prowadzona jest przez:</p>
    <ul>
        <li><a href="https://tourguidemg.pl/" target="_blank"></a></li>
        <li><a href="https://fabrykaturystyki.pl/" target="_blank"></a></li>
    </ul>
  </footer>   
</main>
<?php get_footer(); ?>