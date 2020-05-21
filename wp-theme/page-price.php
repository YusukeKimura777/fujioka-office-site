<?php
/**
 * Template Name: Price
 * Description: 価格ぺージのテンプレート
 */
?>

      <?php include("inc/header.php"); ?>
    </div>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <section class="home-title">
          <h1><?php the_title(); ?></h1>

          <nav class="home-title-nav">
            <ul>
              <li><a href="#it_legal_work">IT法務</a></li>
              <li><a href="#visa_application_work">ビザ申請業務</a></li>
              <li><a href="#house_accommodation_application">民泊申請</a></li>
            </ul>
          </nav>
        </section>
    
        <article class="price">
          <ul>
            <li id="it_legal_work" class="price-list">
              <h2 class="service-name">IT法務</h2>

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
              <h2 class="service-name">ビザ申請業務</h2>

              <div class="price-list-content">
                <p>IT法務顧問継続的にリーガルチェック、法務サポートを行います。</p>
                <table class="price-list-table table-visa">
                  <?php include("inc/table.php"); ?>
                </table>
              </div>
            </li>
            <li id="house_accommodation_application" class="price-list">
              <h2 class="service-name">民泊業務</h2>
              <strong>
                住宅宿泊事業届等の申請<br>
                色々なご提案ができます。直接当社までお問い合わせください直接お問い合わせください
              </strong>
            </li>
          </ul>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  
    <?php include("inc/contact.php"); ?>
  
    <?php include("inc/footer.php"); ?>

    <?php wp_footer(); ?>
  </body>
</html>