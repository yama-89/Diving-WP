<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <section id="mv" class="mv">
    <div class="mv__inner">
      <div class="mv__slider swiper js-mv-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-mv1.jpg" media="(min-width: 1024px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-mv1.jpg" alt="mv1" />
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-mv2.jpg" media="(min-width: 1024px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-mv2.jpg" alt="mv2" />
            </picture>
          </div>
          <div class="swiper-slide mv__slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-mv3.jpg" media="(min-width: 1024px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-mv3.jpg" alt="mv3" />
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-mv4.jpg" media="(min-width: 1024px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-mv4.jpg" alt="mv4" />
            </picture>
          </div>
        </div>
      </div>
      <div class="mv__title-wrap">
        <h2 class="mv__title">DIVING</h2>
        <p class="mv__sub-title">into the ocean</p>
      </div>
    </div>
  </section>

  <!-- campaign -->
  <section id="campaign" class="campaign top-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__title section-title">
        <span>campaign</span>
        <h2 class="section-title__main">キャンペーン</h2>
      </div>
      <div class="campaign__slider swiper js-campaign-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide campaign__card">
            <div class="card-campaign">
              <div class="card-campaign__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg" alt="魚が泳いでいる様子" />
              </div>
              <div class="card-campaign__body">
                <div class="card-campaign__title-wrap">
                  <span class="card-campaign__tag">ライセンス講習</span>
                  <p class="card-campaign__title">ライセンス取得</p>
                </div>
                <div class="card-campaign__price-wrap">
                  <p class="card-campaign__price-title">
                    全部コミコミ(お一人様)
                  </p>
                  <div class="card-campaign__price-box">
                    <p class="card-campaign__price-text">¥56,000</p>
                    <p class="card-campaign__price-subtext">¥46,000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide campaign__card">
            <div class="card-campaign">
              <div class="card-campaign__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg" alt="海の上に船が浮かんでいる様子" />
              </div>
              <div class="card-campaign__body">
                <div class="card-campaign__title-wrap">
                  <span class="card-campaign__tag">体験ダイビング</span>
                  <p class="card-campaign__title">貸切体験ダイビング</p>
                </div>
                <div class="card-campaign__price-wrap">
                  <p class="card-campaign__price-title">
                    全部コミコミ(お一人様)
                  </p>
                  <div class="card-campaign__price-box">
                    <p class="card-campaign__price-text">¥24,000</p>
                    <p class="card-campaign__price-subtext">¥18,000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide campaign__card">
            <div class="card-campaign">
              <div class="card-campaign__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.jpg" alt="クラゲが泳いでいる様子" />
              </div>
              <div class="card-campaign__body">
                <div class="card-campaign__title-wrap">
                  <span class="card-campaign__tag">体験ダイビング</span>
                  <p class="card-campaign__title">ナイトダイビング</p>
                </div>
                <div class="card-campaign__price-wrap">
                  <p class="card-campaign__price-title">
                    全部コミコミ(お一人様)
                  </p>
                  <div class="card-campaign__price-box">
                    <p class="card-campaign__price-text">¥10,000</p>
                    <p class="card-campaign__price-subtext">¥8,000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-campaign">
              <div class="card-campaign__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign4.jpg" alt="ダイバーが海面で話している様子" />
              </div>
              <div class="card-campaign__body">
                <div class="card-campaign__title-wrap">
                  <span class="card-campaign__tag">ファンダイビング</span>
                  <p class="card-campaign__title">貸切ファンダイビング</p>
                </div>
                <div class="card-campaign__price-wrap">
                  <p class="card-campaign__price-title">
                    全部コミコミ(お一人様)
                  </p>
                  <div class="card-campaign__price-box">
                    <p class="card-campaign__price-text">¥20,000</p>
                    <p class="card-campaign__price-subtext">¥16,000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="campaign__btn">
        <a href="./archive-campaign.html" class="button">View more<span></span></a>
      </div>
    </div>
  </section>

  <!-- about us -->
  <section id="aboutus" class="aboutus top-aboutus">
    <div class="aboutus__inner inner">
      <div class="aboutus__title section-title section-title--aboutus">
        <span>About&nbsp;us</span>
        <h2 class="section-title__main">私たちについて</h2>
      </div>
      <div class="aboutus__container">
        <div class="aboutus__img-box">
          <div class="aboutus__left-img">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-aboutus1.jpg" media="(min-width: 1024px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-aboutus1.jpg" alt="屋根の上にシーサーが置いてある様子" />
            </picture>
          </div>
          <div class="aboutus__right-img">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-aboutus-right.jpg" media="(min-width: 1024px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-aboutus2.jpg" alt="２匹の黄色い魚が泳いでいる様子" />
            </picture>
          </div>
        </div>
        <div class="aboutus__text-container">
          <h2 class="aboutus__text-title">
            Dive&nbsp;into<br />the&nbsp;Ocean
          </h2>
          <div class="aboutus__text-box">
            <p class="aboutus__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
            <div class="aboutus__btn">
              <a href="./page-aboutus.html" class="button">View more<span></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="infomation" class="infomation top-infomation">
    <div class="infomation__inner inner">
      <div class="infomation__title section-title">
        <span>information</span>
        <h2 class="section-title__main">ダイビング情報</h2>
      </div>
      <div class="infomation__container">
        <div class="infomation__img js-colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-infomation.jpg" alt="３匹のオレンジの魚が泳いでいる様子" />
        </div>
        <div class="infomation__box">
          <h3 class="infomation__sub-title">ライセンス講習</h3>
          <p class="infomation__text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="infomation__btn">
            <a href="./page-information.html" class="button">View more<span></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- blog -->
  <section id="blog" class="blog top-blog">
    <div class="blog__inner">
      <div class="blog__title section-title section-title--white">
        <span>blog</span>
        <h2 class="section-title__main">
          ブログ
        </h2>
      </div>
      <div class="blog__cards blog-cards">
        <a href="#" class="blog-cards__card card-blog">
          <div class="card-blog__container">
            <div class="card-blog__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/card-blog1.jpg" alt="サンゴの様子" />
            </div>
            <div class="card-blog__body">
              <time class="card-blog__date" datetime="2023-11-17">2023.11/17</time>
              <div class="card-blog__title">ライセンス取得</div>
              <div class="card-blog__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </div>
            </div>
          </div>
        </a>
        <a href="#" class="blog-cards__card card-blog">
          <div class="card-blog__container">
            <div class="card-blog__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/card-blog2.jpg" alt="ウミガメが泳いでいる様子" />
            </div>
            <div class="card-blog__body">
              <time class="card-blog__date" datetime="2023-11-17">2023.11/17</time>
              <div class="card-blog__title">ウミガメと泳ぐ</div>
              <div class="card-blog__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </div>
            </div>
          </div>
        </a>
        <a href="#" class="blog-cards__card card-blog">
          <div class="card-blog__container">
            <div class="card-blog__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/card-blog3.jpg" alt="カクレクマノミの画像" />
            </div>
            <div class="card-blog__body">
              <time class="card-blog__date" datetime="2023-11-17">2023.11/17</time>
              <div class="card-blog__title">カクレクマノミ</div>
              <div class="card-blog__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="blog__btn">
        <a href="./archive-blog.html" class="button">View more<span></span></a>
      </div>
    </div>
  </section>

  <!-- voice -->
  <section id="voice" class="voice top-voice">
    <div class="voice__inner inner">
      <div class="voice__title section-title">
        <span>voice</span>
        <h2 class="section-title__main">お客様の声</h2>
      </div>
      <div class="voice__container">
        <div class="voice__cards voice-cards">
          <div class="voice-cards__card card-voice">
            <div class="card-voice__container">
              <div class="card-voice__title-box">
                <div class="card-voice__box">
                  <div class="card-voice__meta">
                    <p class="card-voice__age">20代(女性)</p>
                    <div class="card-voice__tag">ライセンス講習</div>
                  </div>
                  <p class="card-voice__title">
                    ここにタイトルが入ります。ここにタイトル
                  </p>
                </div>
                <div class="card-voice__img js-colorbox">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-card-voice1.jpg" alt="女性の画像" />
                </div>
              </div>
              <p class="card-voice__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </div>
          <div class="voice-cards__card card-voice">
            <div class="card-voice__container">
              <div class="card-voice__title-box">
                <div class="card-voice__box">
                  <div class="card-voice__meta">
                    <p class="card-voice__age">20代(男性)</p>
                    <div class="card-voice__tag">ファンダイビング</div>
                  </div>
                  <p class="card-voice__title">
                    ここにタイトルが入ります。ここにタイトル
                  </p>
                </div>
                <div class="card-voice__img js-colorbox">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/card-voice2.jpg" alt="男性の画像" />
                </div>
              </div>
              <p class="card-voice__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </div>
        </div>
        <div class="voice__btn">
          <a href="./archive-voice.html" class="button">View more<span></span></a>
        </div>
      </div>
    </div>
  </section>

  <section id="price" class="price top-price">
    <div class="price__inner inner">
      <div class="price__title section-title">
        <span>price</span>
        <h2 class="section-title__main">料金一覧</h2>
      </div>
      <div class="price__container">
        <div class="price__left-side">
          <h3 class="price__items-title">ライセンス講習</h3>
          <dl class="price__items price-item">
            <div class="price-item__text-box">
              <dt class="price-item__text">
                オープンウォーターダイバーコース
              </dt>
              <dd class="price-item__price">¥50,000</dd>
            </div>
            <div class="price-item__text-box">
              <dt class="price-item__text">
                アドバンスドオープンウォーターコース
              </dt>
              <dd class="price-item__price">¥60,000</dd>
            </div>
            <div class="price-item__text-box">
              <dt class="price-item__text">レスキュー＋EFRコース</dt>
              <dd class="price-item__price">¥70,000</dd>
            </div>
          </dl>
          <h3 class="price__items-title">体験ダイビング</h3>
          <dl class="price__items price-item">
            <div class="price-item__text-box">
              <dt class="price-item__text">ビーチ体験ダイビング(半日)</dt>
              <dd class="price-item__price">¥7,000</dd>
            </div>
            <div class="price-item__text-box">
              <dt class="price-item__text">ビーチ体験ダイビング(1日)</dt>
              <dd class="price-item__price">¥14,000</dd>
            </div>
            <div class="price-item__text-box">
              <dt class="price-item__text">ボート体験ダイビング(半日)</dt>
              <dd class="price-item__price">¥10,000</dd>
            </div>
            <div class="price-item__text-box">
              <dt class="price-item__text">ボート体験ダイビング(1日)</dt>
              <dd class="price-item__price">¥18,000</dd>
            </div>
          </dl>
          <h3 class="price__items-title">ファンダイビング</h3>
          <dl class="price__items price-item">
            <div class="price-item__text-box">
              <dt class="price-item__text">ビーチダイビング(2ダイブ)</dt>
              <dd class="price-item__price">¥14,000</dd>
            </div>
            <div class="price-item__text-box">
              <dt class="price-item__text">ボートダイビング(2ダイブ)</dt>
              <dd class="price-item__price">¥18,000</dd>
            </div>
            <div class="price-item__text-box">
              <dt class="price-item__text">スペシャルダイビング(2ダイブ)</dt>
              <dd class="price-item__price">¥24,000</dd>
            </div>
            <div class="price-item__text-box">
              <dt class="price-item__text">ナイトダイビング(1ダイブ)</dt>
              <dd class="price-item__price">¥10,000</dd>
            </div>
          </dl>
          <h3 class="price__items-title">スペシャルダイビング</h3>
          <dl class="price__items price-item">
            <div class="price-item__text-box">
              <dt class="price-item__text">貸切ダイビング(2ダイブ)</dt>
              <dd class="price-item__price">¥24,000</dd>
            </div>
            <div class="price-item__text-box">
              <dt class="price-item__text">1日ダイビング(3ダイブ)</dt>
              <dd class="price-item__price">¥32,000</dd>
            </div>
          </dl>
        </div>
        <div class="price__right-side">
          <div class="price__img js-colorbox">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-price.jpg" media="(min-width: 768px)" type="image/png" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-price.jpg" alt="”複数の赤い魚が泳いでいる様子”" />
            </picture>
          </div>
        </div>
      </div>
      <div class="price__btn">
        <a href="./page-price.html" class="button">View more<span></span></a>
      </div>
    </div>
  </section>

  <section id="contact" class="contact top-contact">
    <div class="contact__inner">
      <div class="contact__container">
        <div class="contact__left">
          <div class="contact__logo-wrap">
            <div class="contact__logo">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-contact-logo.png" alt="logo" />
            </div>
          </div>
          <div class="contact__box">
            <div class="contact__address">
              <p class="contact__list">沖縄県那覇市1-1</p>
              <p class="contact__list">TEL:0120-000-0000</p>
              <p class="contact__list">営業時間:8:30-19:00</p>
              <p class="contact__list">定休日:毎週火曜日</p>
            </div>
            <div class="contact__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4937.814505861781!2d127.67657959485639!3d26.2131729976841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bd6e046d289%3A0x345ffb669fadbd4f!2z6YKj6KaH5biC5b255omA!5e0!3m2!1sja!2sjp!4v1694611120782!5m2!1sja!2sjp" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="contact__right">
          <div class="contact__title section-title section-title--contact">
            <span>contact</span>
            <h2 class="section-title__main">
              お問い合わせ
            </h2>
          </div>
          <div class="contact__text">ご予約・お問い合わせはコチラ</div>
          <div class="contact__btn">
            <a href="./page-contact.html" class="button">Contact us<span></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>