<?php get_header(); ?>

<?php 
$home =esc_url( home_url('/'));
$campaign =esc_url( home_url('/campaign/'));
$aboutus =esc_url( home_url('/about-us/'));
$information =esc_url( home_url('/information/'));
$blog =esc_url( home_url('/blog/'));
$voice =esc_url( home_url('/voice/'));
$price =esc_url( home_url('/price/'));
$faq =esc_url( home_url('/faq/'));
$contact =esc_url( home_url('/contact/'));
$privacypolicy =esc_url( home_url('/privacy-policy/'));
$termsofservice =esc_url( home_url('/terms-of-service/'));
$sitemap =esc_url( home_url('/sitemap/'));
 ?>

<main>
  <!-- 下層ページのメインビュー -->
  <section id="sub-mv" class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-pc-sub-mv-img.jpg" media="(min-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-sp-sub-mv-img.jpg" alt="sub-sitemap-mv" />
        </picture>
      </div>
      <h2 class="sub-mv__title">Site MAP</h2>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumb') ?>

  <div class="page-sitemap layout-page-sitemap">
    <div class="page-sitemap__inner inner">
      <div class="page-sitemap__nav nav">
        <div class="nav__container">
          <div class="nav__lists nav__lists--sitemap">
            <div class="nav__left">
              <div class="nav__box">
                <ul class="nav-items">
                  <li class="nav-items__title nav-items__title--sitemap">
                    <a href="<?php echo $campaign; ?>">キャンペーン</a>
                    <ul class="nav-items__list nav-subitem">
                      <li class="nav-subitem__list">
                        <a href="<?php echo esc_url(home_url("/campaign_category/tag1")) ?>">ライセンス講習</a>
                      </li>
                      <li class="nav-subitem__list">
                        <a href="<?php echo esc_url(home_url("/campaign_category/tag3")) ?>">体験ダイビング</a>
                      </li>
                      <li class="nav-subitem__list">
                        <a href="<?php echo esc_url(home_url("/campaign_category/tag2")) ?>">ファンダイビング</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-items__title nav-items__title--sitemap">
                    <a href="<?php echo $aboutus; ?>">私たちについて</a>
                  </li>
                </ul>
              </div>
              <div class="nav__box">
                <ul class="nav-items">
                  <li class="nav-items__title nav-items__title--sitemap">
                    <a href="<?php echo $information; ?>">ダイビング情報</a>
                    <ul class="nav-items__list nav-subitem">
                      <li class="nav-subitem__list">
                        <a href="<?php echo esc_url(home_url("information#info-tab2")) ?>">ライセンス取得</a>
                      </li>
                      <li class="nav-subitem__list">
                        <a href="<?php echo esc_url(home_url("information#info-tab2")) ?>">ファンダイビング</a>
                      </li>
                      <li class="nav-subitem__list">
                        <a href="<?php echo esc_url(home_url("information#info-tab3")) ?>">体験ダイビング</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-items__title nav-items__title--sitemap">
                    <a href="<?php echo $blog; ?>">ブログ</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="nav__right">
              <div class="nav__box">
                <ul class="nav-items">
                  <li class="nav-items__title nav-items__title--sitemap">
                    <a href="<?php echo $voice; ?>">お客様の声</a>
                  </li>
                  <li class="nav-items__title nav-items__title--sitemap">
                    <a href="<?php echo $price; ?>">料金一覧</a>
                    <ul class="nav-items__list nav-subitem">
                      <li class="nav-subitem__list">
                        <a href="<?php echo $price; ?>#license">ライセンス取得</a>
                      </li>
                      <li class="nav-subitem__list">
                        <a href="<?php echo $price; ?>#experience">体験ダイビング</a>
                      </li>
                      <li class="nav-subitem__list">
                        <a href="<?php echo $price; ?>#fun">ファンダイビング</a>
                      </li>
                      <li class="nav-subitem__list">
                        <a href="<?php echo $price; ?>#special">スペシャルダイビング</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="nav__box">
                <ul class="nav-items">
                  <li class="nav-items__title nav-items__title--sitemap">
                    <a href="<?php echo $faq; ?>">よくある質問</a>
                  </li>
                  <li class="nav-items__title nav-items__title--sitemap">
                    <a href="<?php echo $privacypolicy; ?>">プライバシー<br class="u-mobile" />ポリシー</a>
                  </li>
                  <li class="nav-items__title nav-items__title--sitemap">
                    <a href="<?php echo $termsofservice; ?>">利用規約</a>
                  </li>
                  <li class="nav-items__title nav-items__title--sitemap">
                    <a href="<?php echo $contact; ?>">お問い合わせ</a>
                  </li>
                  <li class="nav-items__title nav-items__title--sitemap">
                    <a href="<?php echo $sitemap; ?>">サイトマップ</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>