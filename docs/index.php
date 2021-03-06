<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>fujioka-office</title>
    <meta name="description" content="藤岡行政書士事務所のトップ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/index/index.min.css">
    <!-- jQuery Core 3.4.1 -->
    <script  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- bgswitcher jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.BgSwitcher/0.4.3/jquery.bgswitcher.min.js"></script>
    <!-- iSroll jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <script src="js/common.js"></script>
    <!-- google map API key -->
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDZ0V7M2XO6OFDdU0w7tp6C7zPwh-TeSf4&callback=initMap" async></script>
  </head>

  <body class="drawer drawer--right">
    <div class="home">
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
  
          <div class="asidepage-news-content">
            <time>2018/01/11</time>
            <p>ああああああああああああああああああああああああああああああああ</p>
          </div>
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

        <div class="asidepage-news-content">
          <time>2018/01/11</time>
          <p>ああああああああああああああああああああああああああああああああ</p>
        </div>
      </section>
    </aside>

    <article class="wrapper service">
      <h2>SERVICE</h2>

      <ul class="service-list">
        <li>
          <figure>
            <img src="img/christopher-gower-291246@2x.jpg" alt="IT法務">
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
            <img src="img/kelly-sikkema-209176@2x.jpg" alt="入管業務">
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
            <img src="img/patrick-perkins-340019@2x.jpg" alt="民泊申請">
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

      <a href="service.php">詳しく見る</a>
    </article>

    <article class="wrapper blog">
      <h2>BLOG</h2>

      <ul class="blog-list">
        <?php include("inc/blogli.php"); ?>
        <?php include("inc/blogli.php"); ?>
      </ul>

      <a class="blog-link" href="blog.php">一覧を見る</a>
    </article>

    <div id="map" class="map"></div>

    <?php include("inc/contact.php"); ?>

    <?php include("inc/footer.php"); ?>

    <script>
      // bgswitcher
      $(".home-back").bgswitcher({
        images: ["img/maskgroup_1@2x.jpg", "img/maskgroup_2@2x.jpg", "img/maskgroup_3@2x.jpg"]
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
          icon: 'img/group_473.png'
        }

        var marker = new google.maps.Marker(markerOptions);
      }
    </script>
  </body>

</html>