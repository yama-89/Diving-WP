<?php get_header(); ?>

<body>
  <!-- ヘッダー -->
  <div class="wrap">
    <main>
      <!-- 下層ページのメインビュー -->
      <section id="sub-mv" class="sub-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__img">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-pc-sub-mv-img.jpg" media="(min-width: 768px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-sp-sub-mv-img.jpg" alt="sub-contact-mv" />
            </picture>
          </div>
          <h2 class="sub-mv__title">Contact</h2>
        </div>
      </section>

      <?php get_template_part('parts/breadcrumb') ?>


      <section class="page-thanks layout-page-thanks">
        <div class="page-thanks__inner inner">
          <div class="page-thanks__container">
            <div class="page-thanks__title">
              お問い合わせ内容を送信完了しました。
            </div>
            <div class="page-thanks__text">このたびは、お問い合わせ頂き<br class="u-mobile">
              誠にありがとうございます。<br>
              お送り頂きました内容を確認の上、<br class="u-mobile">
              3営業日以内に折り返しご連絡させて頂きます。<br>
              また、ご記入頂いたメールアドレスへ、<br class="u-mobile">
              自動返信の確認メールをお送りしております。</div>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>


<?php get_footer(); ?>