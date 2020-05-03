<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>fujioka-office | price</title>
    <meta name="description" content="藤岡行政書士事務所の利用金額">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/price/price.min.css">
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
        <h1>Price</h1>

        <nav class="home-title-nav">
          <ul>
            <li><a href="#it_legal_work">IT法務</a></li>
            <li><a href="#visa_application_work">ビザ申請業務</a></li>
            <li><a href="#house_accommodation_application">民泊申請</a></li>
          </ul>
        </nav>
      </section>
    </div>
    
    <article class="price">
      <ul>
        <li id="it_legal_work" class="price-list">
          <h2>IT法務</h2>

          <section class="price-list-content">
            <h3>IT法務顧問</h3>
            <p>IT法務顧問など継続的にリーガルチェック、法務サポートを行います。</p>
            <table class="price-list-table table-it">
              <?php include("inc/table.php"); ?>
            </table>
          </section>
          
          <aside class="price-aside">
            <h3>研修</h3>
            <p>企業研修を実施いたします。教育内容などご相談に応じます。</p>
          </aside>
        </li>
        <li id="visa_application_work" class="price-list">
          <h2>ビザ申請業務</h2>

          <div class="price-list-content">
            <p>IT法務顧問継続的にリーガルチェック、法務サポートを行います。</p>
            <table class="price-list-table table-visa">
              <?php include("inc/table.php"); ?>
            </table>
          </div>
        </li>
        <li id="house_accommodation_application" class="price-list">
          <h2>民泊業務</h2>
          <strong>
            住宅宿泊事業届等の申請<br>
            色々なご提案ができます。直接当社までお問い合わせください直接お問い合わせください
          </strong>
        </li>
      </ul>
    </article>
  
    <?php include("inc/contact.php"); ?>
  
    <?php include("inc/footer.php"); ?>
  </body>
</html>