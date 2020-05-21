      <?php include("inc/header.php"); ?>

      <section class="home-title">
        <h1>Blog</h1>
      </section>
    </div>

    <div class="wrapper blog">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'blog',
        'posts_per_page' => 12,
        'paged' => $paged
      );
      $my_query = new WP_Query($args);
      ?>
      <?php if($my_query->have_posts()) : ?>
      <ul class="blog-list">
      <?php 
      while($my_query->have_posts()) : 
      $my_query->the_post(); 
      ?>
      <?php include("inc/blogli.php"); ?>
      <?php endwhile; ?>
      </ul>
      <nav class="order">
        <?php 
        echo paginate_links(array(
        'total' => $my_query->max_num_pages, 
        'current' => max( 1, $paged ),
        'prev_text' => '<',
        'next_text' => '>',
        'mid_size' => 3
        )); 
        ?>
      </nav>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>

    <?php include("inc/footer.php"); ?>

    <?php wp_footer(); ?>
  </body>
</html>