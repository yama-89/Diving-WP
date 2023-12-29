<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <section id="sub-mv" class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-pc-sub-mv-img.jpg" media="(min-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-sp-sub-mv-img.jpg" alt="sub-aboutus-mv" />
        </picture>
      </div>
      <h2 class="sub-mv__title">About us</h2>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumb') ?>


  <section class="page-aboutus layout-page-aboutus">
    <div class="page-aboutus__inner inner">
      <div class="page-aboutus__img-box">
        <div class="page-aboutus__left-img">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-aboutus1.jpg" media="(min-width: 1024px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-aboutus1.jpg" alt="屋根の上にシーサーが置いてある様子" />
          </picture>
        </div>
        <div class="page-aboutus__right-img">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-aboutus-right.jpg" media="(min-width: 1024px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-aboutus2.jpg" alt="２匹の黄色い魚が泳いでいる様子" />
          </picture>
        </div>
      </div>
      <div class="page-aboutus__text-container">
        <h2 class="page-aboutus__text-title">
          Dive&nbsp;into<br />the&nbsp;Ocean
        </h2>
        <div class="page-aboutus__text-box">
          <p class="page-aboutus__text">
          深海へのダイブ。輝く海の底には未知の世界が広がり、美しい生態系が待っています。驚きと冒険の旅が、そこで始まります。
          </p>
        </div>
      </div>
    </div>
  </section>


  <?php $imgGroup = SCF::get_option_meta('gallery-options','gallery'); ?>

  <?php if ($imgGroup[0]["image1"]) : ?>
    <section class="gallery layout-gallery">
      <div class="gallery__inner inner">
        <div class="gallery__title section-title">
          <span>gallery</span>
          <h2 class="section-title__main">フォト</h2>
        </div>
        <div class="gallery__container">
          <?php
          foreach ($imgGroup as $fields) :
            $imgurl = wp_get_attachment_image_src($fields['image1'], 'large');

            // $imgurl が配列であり、かつ要素が存在することを確認する
            if (is_array($imgurl) && isset($imgurl[0])) :
          ?>
              <div class="gallery__img">
                <img src="<?php echo $imgurl[0]; ?>" alt="img1">
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
      <div id="grayDisplay" class="gallery__modal grayDisplay"></div>
    </section>
  <?php endif; ?>
  <?php get_footer(); ?>