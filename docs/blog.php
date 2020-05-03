<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>fujioka-office | blog</title>
    <meta name="description" content="藤岡行政書士事務所のブログ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/blog/blog.min.css">
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

      <section class="home-title">
        <h1>Blog</h1>
      </section>
    </div>

    <div class="wrapper blog">
      <ul class="blog-list">
        <?php include("inc/blogli.php"); ?>
        <?php include("inc/blogli.php"); ?>
        <?php include("inc/blogli.php"); ?>
        <?php include("inc/blogli.php"); ?>
      </ul>
      </ul>
    </div>

    <nav class="order">
      <ol>
        <li class="order-list"><a href="">1</a></li>
        <li class="order-list"><a href="">2</a></li>
        <li class="order-list"><a href="">3</a></li>
        <li class="order-list"><a href="">4</a></li>
        <li class="order-list"><a href="">5</a></li>
        <li class="order-list"><a href=""><div class="order-list-next"></div></a></li>
      </ol>
    </nav>

    <?php include("inc/footer.php"); ?>
  </body>
</html>