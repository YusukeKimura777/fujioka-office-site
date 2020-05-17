<?php
/**
 * Template Name: Contact
 * Description: 問い合わせぺージのテンプレート
 */
?>

      <?php include("inc/header.php"); ?>
    </div>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <section class="home-title">
          <h1><?php the_title(); ?></h1>
        </section>

        <article class="wrapper contact">
          <?php the_content(); ?>
        </article>

      <?php endwhile; ?>
    <?php endif; ?>

    <footer>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>