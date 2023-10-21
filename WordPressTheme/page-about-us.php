<?php get_header(); ?>
<main>
      <!-- 下層ページのメインビュー -->
      <section id="sub-mv" class="sub-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__img">
            <picture>
            <source
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-pc-sub-mv-img.jpg"
              media="(min-width: 768px)"
            />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-sp-sub-mv-img.jpg" alt="sub-aboutus-mv" />
          </picture>
        </div>
          <h2 class="sub-mv__title">About us</h2>
        </div>
      </section>

      <div class="breadcrumb layout-breadcrumb">
        <div class="breadcrumb__inner inner">top > キャンペーン</div>
      </div>

      <section class="page-aboutus layout-page-aboutus">
        <div class="page-aboutus__inner inner">
          <div class="page-aboutus__img-box">
            <div class="page-aboutus__left-img">
              <picture>
                <source
                  srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-aboutus1.jpg"
                  media="(min-width: 1024px)"
                />
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-aboutus1.jpg"
                  alt="屋根の上にシーサーが置いてある様子"
                />
              </picture>
            </div>
            <div class="page-aboutus__right-img">
              <picture>
                <source
                  srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-aboutus-right.jpg"
                  media="(min-width: 1024px)"
                />
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-aboutus2.jpg"
                  alt="２匹の黄色い魚が泳いでいる様子"
                />
              </picture>
            </div>
          </div>
          <div class="page-aboutus__text-container">
            <h2 class="page-aboutus__text-title">
              Dive&nbsp;into<br/>the&nbsp;Ocean
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
              <div class="gallery__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery1.jpg" alt="魚" />
              </div>
              <div class="gallery__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery2.jpg" alt="魚" />
              </div>
              <div class="gallery__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery3.jpg" alt="魚" />
              </div>
              <div class="gallery__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery4.jpg" alt="魚" />
              </div>
              <div class="gallery__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery5.jpg" alt="魚" />
              </div>
              <div class="gallery__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery6.jpg" alt="魚" />
              </div>
          </div>
        </div>
        <div id="grayDisplay" class="gallery__modal grayDisplay"></div>
      </section>
<?php get_footer(); ?>
