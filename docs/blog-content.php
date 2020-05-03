<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>fujioka-office | blog-content</title>
    <meta name="description" content="藤岡行政書士事務所のブログ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/blog-content/blog-content.min.css">
    <!-- jQuery Core 3.4.1 -->
    <script  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- iSroll jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <script src="js/common.js"></script>
  </head>

  <body class="drawer drawer--right">
    <div class="home">
      <?php include("inc/header.php"); ?>
    </div>

    <article class="blogcontent">
      <section class="blogcontent-top">
        <time>2019/11/09</time>
        <h1>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h1>
        <figure>
          <img src="img/christopher-gower-291246@2x.jpg" alt="ブログ">
          <figcaption>
            テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。
          </figcaption>
        </figure>
      </section>

      <section class="blogcontent-middlecolumn">
        <h2>タイトル中見出し</h2>
        <p>
          テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。
        </p>
        <p>
          テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。
        </p>
      </section>

      <section class="blogcontent-shortcolumn">
        <h2>タイトル小見出し</h2>
        <p>
          テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。テキストですダミーテキストです。
        </p>
      </section>

      <figure class="blogcontent-insert">
        <img src="img/christopher-gower-291246@2x.jpg" alt="ブログ">
      </figure>

      <div class="blogcontent-share">
        <figure>
          <img src="img/christopher-gower-291246@2x.jpg" alt="ブログ">
        </figure>

        <div class="blogcontent-share-btn">
          <a id="facebook">Facebookでシェアする</a>
          <a id="twitter">Twitterでこの記事をつぶやく</a>
        </div>
      </div>
    </article>

    <aside class="wrapper asidepage">
      <h2>最近の記事</h2>

      <ul class="asidepage-list">
      <?php include("inc/blogli.php"); ?>
    </aside>

    <?php include("inc/contact.php"); ?>

    <?php include("inc/footer.php"); ?>

    <script>
      // sns
      var currenturl = location.href;
      var fbtarget = document.getElementById("facebook");
      var twtarget = document.getElementById("twitter");

      fbtarget.href = `http://www.facebook.com/share.php?u=${currenturl}`;
      twtarget.href = `https://twiter.com/share?url=${currenturl}`;
    </script>
  </body>
</html>