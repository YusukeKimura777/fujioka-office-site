<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>fujioka-office | about</title>
    <meta name="description" content="藤岡行政書士事務所の概要">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/about/about.min.css">
    <!-- jQuery Core 3.4.1 -->
    <script  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
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

      <section class="home-title">
        <h1>About</h1>
        <figure>
          <img src="img/maskgroup_5@2x.jpg" alt="オフィス風景">
        </figure>
      </section>
    </div>

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
        <img src="img/krystian-krzewinski-SZ9y9PGVQbY-unsplash@2x.jpg" alt="藤岡さん">
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
  </body>
</html>