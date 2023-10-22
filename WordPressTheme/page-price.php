<?php get_header(); ?>
<main>
      <!-- 下層ページのメインビュー -->
      <section id="sub-mv" class="sub-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__img">
            <picture>
              <source
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc-sub-mv-img.jpg"
                media="(min-width: 768px)"
              />
              <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp-sub-mv-img.jpg"
                alt="sub-price-mv"
              />
            </picture>
          </div>
          <h2 class="sub-mv__title">Price</h2>
        </div>
      </section>

      <?php get_template_part('parts/breadcrumb') ?>


      <section class="page-price layout-page-price">
        <div class="page-price__inner inner">
          <div class="page-price__content page-price-item">
            <div class="page-price-item__item page-price-item__header">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-tab-button1.svg" alt="" />
              <h3 class="page-price-item__title">ライセンス講習</h3>
            </div>
            <div class="page-price-item__item page-price-item__item--left">
              オープンウォーター<br class="u-mobile" />ダイバーコース
            </div>
            <div class="page-price-item__item page-price-item__item--right">
              ¥50,000
            </div>
            <div class="page-price-item__item page-price-item__item--left">
              アドバンスド<br class="u-mobile" />オープンウォーターコース
            </div>
            <div class="page-price-item__item page-price-item__item--right">
              ¥60,000
            </div>
            <div class="page-price-item__item page-price-item__item--left">
              レスキュー＋EFRコース
            </div>
            <div class="page-price-item__item page-price-item__item--right">
              ¥70,000
            </div>
          </div>
          <div class="page-price__content page-price-item">
            <div
              class="page-price-item__item page-price-item__header page-price-item__header--4row"
            >
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-tab-button1.svg" alt="" />
              <h3 class="page-price-item__title">体験ダイビング</h3>
            </div>
            <div class="page-price-item__item page-price-item__item--left">
              ビーチ体験ダイビング<br class="u-mobile" />(半日)
            </div>
            <div class="page-price-item__item page-price-item__item--right">
              ¥7,000
            </div>
            <div class="page-price-item__item page-price-item__item--left">
              ビーチ体験ダイビング<br class="u-mobile" />(1日)
            </div>
            <div class="page-price-item__item page-price-item__item--right">
              ¥14,000
            </div>
            <div class="page-price-item__item page-price-item__item--left">
              ボート体験ダイビング<br class="u-mobile" />(半日)
            </div>
            <div class="page-price-item__item page-price-item__item--right">
              ¥10,000
            </div>
            <div class="page-price-item__item page-price-item__item--left">
              ボート体験ダイビング<br class="u-mobile" />(1日)
            </div>
            <div class="page-price-item__item page-price-item__item--right">
              ¥18,000
            </div>
          </div>
          <div class="page-price__content page-price-item">
            <div
              class="page-price-item__item page-price-item__header page-price-item__header--4row"
            >
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-tab-button1.svg" alt="" />
              <h3 class="page-price-item__title">ファンダイビング</h3>
            </div>
            <div class="page-price-item__item page-price-item__item--left">
              ビーチダイビング<br class="u-mobile" />(2ダイブ)
            </div>
            <div class="page-price-item__item page-price-item__item--right">
              ¥14,000
            </div>
            <div class="page-price-item__item page-price-item__item--left">
              ボートダイビング<br class="u-mobile" />(2ダイブ)
            </div>
            <div class="page-price-item__item page-price-item__item--right">
              ¥18,000
            </div>
            <div class="page-price-item__item page-price-item__item--left">
              スペシャルダイビング<br class="u-mobile" />(2ダイブ)
            </div>
            <div class="page-price-item__item page-price-item__item--right">
              ¥24,000
            </div>
            <div class="page-price-item__item page-price-item__item--left">
              ナイトダイビング<br class="u-mobile" />(1ダイブ)
            </div>
            <div class="page-price-item__item page-price-item__item--right">
              ¥10,000
            </div>
          </div>
          <div class="page-price__content page-price-item">
            <div class="page-price-item__item page-price-item__header">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-tab-button1.svg" alt="" />
              <h3 class="page-price-item__title">スペシャルダイビング</h3>
            </div>
            <div class="page-price-item__item page-price-item__item--left">
              貸切ダイビング<br class="u-mobile" />(2ダイブ)
            </div>
            <div class="page-price-item__item page-price-item__item--right">
              ¥50,000
            </div>
            <div class="page-price-item__item page-price-item__item--left">
              1日ダイビング<br class="u-mobile" />(3ダイブ)
            </div>
            <div class="page-price-item__item page-price-item__item--right">
              ¥60,000
            </div>
            <div class="page-price-item__item page-price-item__item--left">
              ナイトダイビング<br class="u-mobile" />(2ダイブ)
            </div>
            <div class="page-price-item__item page-price-item__item--right">
              ¥70,000
            </div>
          </div>
        </div>
      

    </main>

<?php get_footer(); ?>
