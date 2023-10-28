<?php get_header(); ?>

<main>
      <!-- 下層ページのメインビュー -->
      <section id="sub-mv" class="sub-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__img">
            <picture>
              <source
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-pc-sub-mv-img.jpg"
                media="(min-width: 768px)"
              />
              <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-sp-sub-mv-img.jpg"
                alt="sub-sitemap-mv"
              />
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
                        <a href="./archive-campaign.html">キャンペーン</a>
                        <ul class="nav-items__list nav-subitem">
                          <li class="nav-subitem__list">
                            <a href="#">ライセンス取得</a>
                          </li>
                          <li class="nav-subitem__list">
                            <a href="#">貸切体験ダイビング</a>
                          </li>
                          <li class="nav-subitem__list">
                            <a href="#">ナイトダイビング</a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-items__title nav-items__title--sitemap">
                        <a href="./page-aboutus.html">私たちについて</a>
                      </li>
                    </ul>
                  </div>
                  <div class="nav__box">
                    <ul class="nav-items">
                      <li class="nav-items__title nav-items__title--sitemap">
                        <a href="./page-information.html">ダイビング情報</a>
                        <ul class="nav-items__list nav-subitem">
                          <li class="nav-subitem__list">
                            <a href="#">ライセンス取得</a>
                          </li>
                          <li class="nav-subitem__list">
                            <a href="#">ファンダイビング</a>
                          </li>
                          <li class="nav-subitem__list">
                            <a href="#">体験ダイビング</a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-items__title nav-items__title--sitemap">
                       <a href="./archive-blog.html">ブログ</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="nav__right">
                  <div class="nav__box">
                    <ul class="nav-items">
                      <li class="nav-items__title nav-items__title--sitemap">
                        <a href="./archive-voice.html">お客様の声</a>
                      </li>
                      <li class="nav-items__title nav-items__title--sitemap">
                        <a href="./page-price.html">料金一覧</a>
                        <ul class="nav-items__list nav-subitem">
                          <li class="nav-subitem__list">
                            <a href="#">ライセンス取得</a>
                          </li>
                          <li class="nav-subitem__list">
                            <a href="#">体験ダイビング</a>
                          </li>
                          <li class="nav-subitem__list">
                            <a href="#">ファンダイビング</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="nav__box">
                    <ul class="nav-items">
                      <li class="nav-items__title nav-items__title--sitemap">
                        <a href="./page-faq.html">よくある質問</a>
                      </li>
                      <li class="nav-items__title nav-items__title--sitemap">
                        <a href="./page-privacypolicy.html"
                          >プライバシー<br class="u-mobile" />ポリシー</a
                        >
                      </li>
                      <li class="nav-items__title nav-items__title--sitemap">
                       <a href="./page-terms-of-service.html">利用規約</a>
                      </li>
                      <li class="nav-items__title nav-items__title--sitemap">
                        <a href="./page-contact.html">お問い合わせ</a>
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
