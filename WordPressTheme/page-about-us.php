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
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="gallery layout-gallery">
    <div class="gallery__inner inner">
      <div class="gallery__title section-title">
        <span>gallery</span>
        <h2 class="section-title__main">フォト</h2>
      </div>
      <div class="gallery__container">
        <?php
        $imgGroup = SCF::get('gallery');
        foreach ($imgGroup as $fields) :
          $imgurl = wp_get_attachment_image_src($fields['image1'], 'large');
        ?>
          <div class="gallery__img">
            <!-- 画像がない時はnoImg画像を表示 -->
            <?php if ($fields['image1'] === "") : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
              <!-- それ以外（画像がある時）画像を表示 -->
            <?php else : ?>
              <img src="<?php echo $imgurl[0]; ?>" alt="img1">
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div id="grayDisplay" class="gallery__modal grayDisplay"></div>
  </section>
  <?php get_footer(); ?>