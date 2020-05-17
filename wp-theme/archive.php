<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="藤岡行政書士事務所のブログ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blog/blog.min.css">
    <!-- jQuery Core 3.4.1 -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- iSroll jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

    <?php wp_head(); ?>
  </head>

  <body class="drawer drawer--right">
    <div class="home">
      <?php include("inc/header.php"); ?>

      <section class="home-title">
        <h1>Blog</h1>
      </section>
    </div>

    <div class="wrapper blog">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'category_name' => 'blog',
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