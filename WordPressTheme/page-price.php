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

      <?php
      $free_item = SCF::get('price-page');
      // カスタムフィールドが空であるかどうかのフラグ
      $isEmpty = true;
      foreach ($free_item as $fields) {
        if (!empty($fields['title1']) || !empty($fields['price1'])) {
          // カスタムフィールドが空でない場合はフラグを立てる
          $isEmpty = false;
          break;
        }
      }
      // カスタムフィールドが空でない場合に表示
      if (!$isEmpty) :
      ?>
        <div class="page-price__content page-price-item">
          <div class="page-price-item__item page-price-item__header">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-tab-button1.svg" alt="" />
            <h3 class="page-price-item__title" id="license">ライセンス講習</h3>
          </div>
          <?php foreach ($free_item as $fields) : ?>
            <?php if (!empty($fields['title1']) || !empty($fields['price1'])) : ?>
              <div class="page-price-item__item page-price-item__item--left">
                <?php echo nl2br($fields['title1']); ?>
              </div>
              <div class="page-price-item__item page-price-item__item--right">
                <?php echo $fields['price1']; ?>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>


      <?php
      $free_item = SCF::get('price-page2');
      // カスタムフィールドが空であるかどうかのフラグ
      $isEmpty = true;
      foreach ($free_item as $fields) {
        if (!empty($fields['title2']) || !empty($fields['price2'])) {
          // カスタムフィールドが空でない場合はフラグを立てる
          $isEmpty = false;
          break;
        }
      }
      // カスタムフィールドが空でない場合に表示
      if (!$isEmpty) :
      ?>
        <div class="page-price__content page-price-item">
          <div class="page-price-item__item page-price-item__header">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-tab-button1.svg" alt="" />
            <h3 class="page-price-item__title" id="experience">体験ダイビング</h3>
          </div>
          <?php foreach ($free_item as $fields) : ?>
            <?php if (!empty($fields['title2']) || !empty($fields['price2'])) : ?>
              <div class="page-price-item__item page-price-item__item--left">
                <?php echo nl2br($fields['title2']); ?>
              </div>
              <div class="page-price-item__item page-price-item__item--right">
                <?php echo $fields['price2']; ?>
              </div>
          <?php endif;
          endforeach; ?>
        </div>
      <?php endif; ?>

      <?php
      $free_item = SCF::get('price-page3');
      // カスタムフィールドが空であるかどうかのフラグ
      $isEmpty = true;
      foreach ($free_item as $fields) {
        if (!empty($fields['title3']) || !empty($fields['price3'])) {
          // カスタムフィールドが空でない場合はフラグを立てる
          $isEmpty = false;
          break;
        }
      }
      // カスタムフィールドが空でない場合に表示
      if (!$isEmpty) :
      ?>
        <div class="page-price__content page-price-item">
          <div class="page-price-item__item page-price-item__header">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-tab-button1.svg" alt="" />
            <h3 class="page-price-item__title" id="fun">ファンダイビング</h3>
          </div>
          <?php foreach ($free_item as $fields) : ?>
            <?php if (!empty($fields['title3']) || !empty($fields['price3'])) : ?>
              <div class="page-price-item__item page-price-item__item--left">
                <?php echo nl2br($fields['title3']); ?>
              </div>
              <div class="page-price-item__item page-price-item__item--right">
                <?php echo $fields['price3']; ?>
              </div>
          <?php endif;
          endforeach; ?>
        </div>
      <?php endif; ?>

      <?php
      $free_item = SCF::get('price-page4');
      // カスタムフィールドが空であるかどうかのフラグ
      $isEmpty = true;
      foreach ($free_item as $fields) {
        if (!empty($fields['title4']) || !empty($fields['price4'])) {
          // カスタムフィールドが空でない場合はフラグを立てる
          $isEmpty = false;
          break;
        }
      }
      // カスタムフィールドが空でない場合に表示
      if (!$isEmpty) :
      ?>
        <div class="page-price__content page-price-item">
          <div class="page-price-item__item page-price-item__header">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-tab-button1.svg" alt="" />
            <h3 class="page-price-item__title" id="special">スペシャルダイビング</h3>
          </div>
          <?php foreach ($free_item as $fields) : ?>
            <?php if (!empty($fields['title4']) || !empty($fields['price4'])) : ?>
              <div class="page-price-item__item page-price-item__item--left">
                <?php echo nl2br($fields['title4']); ?>
              </div>
              <div class="page-price-item__item page-price-item__item--right">
                <?php echo $fields['price4']; ?>
              </div>
          <?php endif;
          endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>