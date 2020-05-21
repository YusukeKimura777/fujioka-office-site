      <?php include("inc/header.php"); ?>
    </div>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="blogcontent">
          <section class="blogcontent-top">
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </section>

          <div class="blogcontent-share">
            <figure>
              <?php the_post_thumbnail('full'); ?>
            </figure>

            <div class="blogcontent-share-btn">
              <a href="//www.facebook.com/sharer.php?src=bm&u=<?php echo get_permalink(); ?>&t=<?php echo get_the_title(); ?>" title="Facebookでシェア" onclick="return sns_window(this, 800, 600);">
                Facebookでシェアする
              </a>
              <a href="//twitter.com/share?text=<?php echo get_the_title() ?>&url=<?php echo get_permalink(); ?>&via=fujioka" title="Twitterでシェア" onclick="return sns_window(this, 800, 600);">
                Twitterでこの記事をつぶやく
              </a>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>

    <aside class="wrapper asidepage">
      <h2>最近の記事</h2>

      <?php
      $args = array(
        'post_type' => 'blog',
        'posts_per_page' => 3,
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
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </aside>

    <?php include("inc/contact.php"); ?>

    <?php include("inc/footer.php"); ?>

    <script>
      // sns
      function sns_window( item, height, width ){
        var size = 'menubar=no, toolbar=no, resizable=yes, scrollbars=yes, height='+height+', width='+width;
        window.open( item.href, '_blank', size );
        return false;
      }
    </script>

    <?php wp_footer(); ?>
  </body>
</html>