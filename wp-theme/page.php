      <?php include("inc/header.php"); ?>
    </div>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <section class="home-title">
          <h1><?php the_title(); ?></h1>
          <figure>
            <?php the_post_thumbnail('full'); ?>
          </figure>
        </section>

        <article class="wrapper page">
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php include("inc/contact.php"); ?>

    <footer>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>