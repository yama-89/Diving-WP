<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <section id="sub-mv" class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc-sub-mv-img.jpg" media="(min-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp-sub-mv-img.jpg" alt="sub-price-mv" />
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
          <h3 class="page-price-item__title" id="license">ライセンス講習</h3>
        </div>
        <?php
        $free_item = SCF::get('price-page');
        foreach ($free_item as $fields) {
          if ($fields['title1'] !== "" and $fields['price1'] !== "") {
        ?>
        <div class="page-price-item__item page-price-item__item--left">
        <?php echo nl2br($fields['title1']); ?>
          <!-- オープンウォーター<br class="u-mobile" />ダイバーコース -->
        </div>
        <div class="page-price-item__item page-price-item__item--right">
        <?php echo $fields['price1']; ?>
        </div>
      <?php
          }
        }
        ?>
      </div>


      <div class="page-price__content page-price-item">
        <div class="page-price-item__item page-price-item__header page-price-item__header--4row">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-tab-button1.svg" alt="" />
          <h3 class="page-price-item__title" id="experience">体験ダイビング</h3>
        </div>
        <?php
        $free_item = SCF::get('price-page2');
        foreach ($free_item as $fields) {
          if ($fields['title2'] !== "" and $fields['price2'] !== "") {
        ?>
        <div class="page-price-item__item page-price-item__item--left">
        <?php echo nl2br($fields['title2']); ?>
          <!-- オープンウォーター<br class="u-mobile" />ダイバーコース -->
        </div>
        <div class="page-price-item__item page-price-item__item--right">
        <?php echo $fields['price2']; ?>
        </div>
      <?php
          }
        }
        ?>
      </div>
      <div class="page-price__content page-price-item">
        <div class="page-price-item__item page-price-item__header page-price-item__header--4row">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-tab-button1.svg" alt="" />
          <h3 class="page-price-item__title" id="fun">ファンダイビング</h3>
        </div>
        <?php
        $free_item = SCF::get('price-page3');
        foreach ($free_item as $fields) {
          if ($fields['title3'] !== "" and $fields['price3'] !== "") {
        ?>
        <div class="page-price-item__item page-price-item__item--left">
        <?php echo nl2br($fields['title3']); ?>
          <!-- オープンウォーター<br class="u-mobile" />ダイバーコース -->
        </div>
        <div class="page-price-item__item page-price-item__item--right">
        <?php echo $fields['price3']; ?>
        </div>
      <?php
          }
        }
        ?>
      </div>
      <div class="page-price__content page-price-item">
        <div class="page-price-item__item page-price-item__header">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-tab-button1.svg" alt="" />
          <h3 class="page-price-item__title" id="special">スペシャルダイビング</h3>
        </div>
        <?php
        $free_item = SCF::get('price-page4');
        foreach ($free_item as $fields) {
          if ($fields['title4'] !== "" and $fields['price4'] !== "") {
        ?>
        <div class="page-price-item__item page-price-item__item--left">
        <?php echo nl2br($fields['title4']); ?>
          <!-- オープンウォーター<br class="u-mobile" />ダイバーコース -->
        </div>
        <div class="page-price-item__item page-price-item__item--right">
        <?php echo $fields['price4']; ?>
        </div>
      <?php
          }
        }
        ?>
      </div>
    </div>
  </section>


</main>

<?php get_footer(); ?>