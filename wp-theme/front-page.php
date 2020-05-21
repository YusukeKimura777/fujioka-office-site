      <?php include("inc/header.php"); ?>
      
      <div class="big-bg home-back">
        <section class="wrapper home-title">
          <h1>
            WEB INTEGRATION<br>
            & LEGAL AFFAIRS
          </h1>

          <div class="pc">
            <strong>
              IT専門の行政書士たちが、あなたのビジネスを守ります。
            </strong>
          </div>

          <div class="iphone">
            <strong>
              IT専門の行政書士たちが、<br>
              あなたのビジネスを守ります。
            </strong>
          </div>
        </section>
      </div>

      <div class="iphone">
        <section class="wrapper asidepage-news">
          <h2>NEWS</h2>

          <?php
          $arg = array(
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
            'category_name' => 'news'
          );
          $posts = get_posts( $arg );
          if( $posts ): 
          ?>
          <?php
          foreach ( $posts as $post ) :
          setup_postdata( $post );
          ?> 
          <div class="asidepage-news-content">
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
            <?php the_content(); ?>
          </div>
          <?php endforeach; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </section>
      </div>
    </div>

    <aside class="asidepage">
      <section class="asidepage-info">
        <h2>
          webを通して人々の心や生活が豊かになるよう、法律の面からサポートいたします。
        </h2>
        <p>
          当事務所ではIT法務（契約書作成や各種許認可手続きなど）を中心に、海外技術者のビザ手続き、そしてwebを介した新たなビジネスモデルとして評判の民泊（登録手続き）など、広くwebに関する手続きのサポートを行ってまいります。
        </p>
      </section>

      <section class="pc asidepage-news">
        <h2>NEWS</h2>

        <?php
        $arg = array(
          'posts_per_page' => 1,
          'orderby' => 'date',
          'order' => 'DESC',
          'category_name' => 'news'
        );
        $posts = get_posts( $arg );
        if( $posts ): 
        ?>
        <?php
        foreach ( $posts as $post ) :
        setup_postdata( $post );
        ?>
        <div class="asidepage-news-content">
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
          <?php the_content(); ?>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </section>
    </aside>

    <article class="wrapper service">
      <h2>SERVICE</h2>

      <ul class="service-list">
        <li>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/christopher-gower-291246@2x.jpg" alt="IT法務">
            <figcaption>
              <h3 class="service-list-title">
                <p>#01</p>
                <p>IT法務</p>
              </h3>
              <p>簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な</p>
            </figcaption>
          </figure>
        </li>
        <li>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/kelly-sikkema-209176@2x.jpg" alt="入管業務">
            <figcaption>
              <h3 class="service-list-title">
                <p>#02</p>
                <p>入管業務</p>
              </h3>
              <p>簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な</p>
            </figcaption>
          </figure>
        </li>
        <li>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/patrick-perkins-340019@2x.jpg" alt="民泊申請">
            <figcaption>
              <h3 class="service-list-title">
                <p>#03</p>
                <p>民泊申請</p>
              </h3>
              <p>簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な</p>
            </figcaption>
          </figure>
        </li>
      </ul>

      <a class="btn" href="<?php echo get_permalink(64); ?>">詳しく見る</a>
    </article>

    <article class="wrapper blog">
      <h2>BLOG</h2>

      <?php
      $args = array(
        'post_type' => 'blog',
        'posts_per_page' => 6,
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

      <a class="btn" href="<?php echo get_post_type_archive_link('blog'); ?>">一覧を見る</a>
    </article>

    <div id="map" class="map"></div>

    <?php include("inc/contact.php"); ?>

    <?php include("inc/footer.php"); ?>

    <script>
      // bgswitcher
      $(".home-back").bgswitcher({
        images: [
          "<?php echo get_template_directory_uri(); ?>/img/maskgroup_1@2x.jpg", 
          "<?php echo get_template_directory_uri(); ?>/img/maskgroup_2@2x.jpg", 
          "<?php echo get_template_directory_uri(); ?>/img/maskgroup_3@2x.jpg"
        ]
      });

      // google map
      function initMap() {
        var mapPosition = {lat: 35.017136, lng: 135.756428}
        var mapArea = document.getElementById('map');

        var mapOptions = {
          center: mapPosition,
          zoom: 18
        };

        var map = new google.maps.Map(mapArea, mapOptions);

        var markerOptions = {
          map: map,
          position: mapPosition,
          icon: '<?php echo get_template_directory_uri(); ?>/img/group_473.png'
        }

        var marker = new google.maps.Marker(markerOptions);
      }
    </script>

    <?php wp_footer(); ?>
  </body>

</html>