<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>fujioka-office | service</title>
    <meta name="description" content="藤岡行政書士事務所のサービス">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/service/service.min.css">
    <!-- jQuery Core 3.4.1 -->
    <script  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- iSroll jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
  </head>

  <body class="drawer drawer--right">
    <div class="home">
      <?php include("inc/header.php"); ?>
      
      <section class="home-title">
        <h1>Service</h1>
        <figure>
          <img src="img/group_218@2x.jpg" alt="オフィス風景">
        </figure>
      </section>
    </div>

    <article class="service">
      <div class="wrapper">
        <ul>
          <li>
            <section class="service-list">
              <h2>IT法務</h2>
              <p>
                IT関連の契約書には紛争を予防するための「予防法務」としてとても大きな役割があり、サービスの内容をよく理解した上で作成をする必要があります。<br>
                また知的財産権の管理など一般的な契約書とは違った内容を盛り込むことも必要です。<br>
                <br>
                当事務所ではweb業界に8年間身を置き、webサイトの制作·会員管理システムの運用·新規webサービスの立ち上げに従事した経験を持つ行政書士が契約書のチェック·作成をお手伝いいたします。
              </p>
            </section>
            
            <aside class="service-aside">
              <h2>ご用意するサービス</h2>
              <ul>
                <li>IT法務顧問サービス（月5,000円～）</li>
                <li>契約書リスク診断</li>
                <li>契約書ドラフト作成</li>
                <li>IT法務研修など</li>
              </ul>
              <a href="price.php#it_legal_work">料金ページへ</a>
            </aside>
          </li>
          <li>
            <section class="service-list">
              <h2>ビザ申請業務</h2>
              <p>
                数多くの外国人IT技術者の在留資格申請業務に従事した経験を元に、<br>
                当事務所では在留資格、永住申請・定住申請・帰化申請などの手続きを行ってまいります。<br>
                優秀な外国人IT技術者を受け入れ、業界のサービス向上の一助ができるようサポートいたします。
              </p>
            </section>
  
            <aside class="service-aside">
              <h2>ご用意するサービス</h2>
              <ul>
                <li>ビザ取得・更新</li>
                <li>永住許可</li>
                <li>帰化申請</li>
                <li>国籍取得など</li>
              </ul>
              <a href="price.php#visa_application_work">料金ページへ</a>
            </aside>
          </li>
          <li>
            <section class="service-list">
              <h2>民泊申請</h2>
              <p>
                住宅宿泊事業法（いわゆる民泊新法）が2018年6月15日に施行されます。<br>
                年々増加する訪日外国人旅行者の宿泊の受け皿として、今後民泊は全国で解禁され、各地で営業が行われます。<br>
                2020年の東京オリンピック開催に向けてますます広がっていく民泊。<br>
                当事務所では最新のwebサービスでもある民泊の普及に注力します。<br>
                民泊登録の申請（住宅宿泊事業届等）をサポートし、民泊仲介サイトへの登録や情報提供などでお手伝いをいたします。
              </p>
            </section>
  
            <aside class="service-aside">
              <h2>
                色々なご提案ができます。<br>
                直接当社までお問い合わせください
              </h2>
              <a>お問い合わせ</a>
            </aside>
          </li>
        </ul>
      </div>
    </article>

    <?php include("inc/contact.php"); ?>

    <?php include("inc/footer.php"); ?>

    <script>
      // drawer
      $(document).ready(function() {
        $('.drawer').drawer();
      });
    </script>
  </body>
</html>