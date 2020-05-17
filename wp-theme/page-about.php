<?php
/**
 * Template Name: About
 * Description: 概要ぺージのテンプレート
 */
?>

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

        <aside class="wrapper asidepage">
          <h2>
            Support your<br>
            web service
          </h2>
          <strong>
            webを通して人々の心や生活が豊かになるよう、法律の面からサポートいたします。
          </strong>
        </aside>

        <article class="wrapper point">
          <h2>Point</h2>

          <section class="point-content">
            <h3>制作会社での経歴を活かしたご提案ができます</h3>

            <div class="point-content-detail">
              <p>
              私はこれまでにIT系企業においてweb制作、新規webサービスの立ち上げ、ファンクラブビジネスを経験し「webが持つ可能性」を信じるようになりました。<br>
              「webが持つ可能性」とはwebを通して人々の心や生活がもっと豊かになっていくことです。<br>
              <br>
              当事務所ではIT法務（契約書作成や各種許認可手続きなど）を中心に、海外技術者のビザ手続き、そしてwebを介した新たなビジネスモデルとして評判の民泊（登録手続き）など、広くwebに関する手続きのサポートを行ってまいります。
              </p>
              <p>
                書類作成など法律面からあなたのwebサービスのサポートをします。<br>
                新たなwebサービスが生まれ、そのサービスを利用することで多くの人々の心や生活が豊かになる。<br>
                そしていつか日本が世界のIT分野をリードする日がくることを願っています。
              </p>
            </div>
          </section>
        </article>

        <article class="officedata">
          <figure class="officedata-content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/krystian-krzewinski-SZ9y9PGVQbY-unsplash@2x.jpg" alt="藤岡さん">
            <figcaption>
              <h2>Office data</h2>
              <dl>
                <dt>名称</dt>
                <dd>藤岡行政書士事務所</dd>
                <dt>代表</dt>
                <dd>藤岡雅也</dd>
                <dt>行政書士番号</dt>
                <dd>0000000000000</dd>
                <dt>取り扱い案件</dt>
                <dd>労務、民泊、Visa</dd>
                <dt>電話番号</dt>
                <dd>06-5555-5555</dd>
                <dt>FAX</dt>
                <dd>06-5555-5555</dd>
                <dt>住所</dt>
                <dd>京都府</dd>
              </dl>
            </figcaption>
          </figure>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>

    <div id="map" class="map"></div>

    <?php include("inc/contact.php"); ?>

    <footer>
    </footer>

    <script>
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
          icon: 'img/group_473.png'
        }

        var marker = new google.maps.Marker(markerOptions);
      }
    </script>

    <?php wp_footer(); ?>
  </body>
</html>