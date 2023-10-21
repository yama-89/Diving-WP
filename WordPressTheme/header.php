<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="noindex" />
    <?php wp_head() ?>
  </head>
  <body>
    <!-- ヘッダー -->
    <header class="header js-header">
      <div class="header__inner">
       <h1 class="header__logo">
          <a href="./index.html"
            ><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/header-logo.png" alt="CodeUps"
          /></a>
        </h1>
        <div class="header__hamburger hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="header__sp-nav inner sp-nav js-drawer-open">
          <div class="sp-nav__nav nav">
            <div class="nav__container nav__container--scroll">
              <div class="nav__lists nav__lists--sp-drawer">
                <div class="nav__left">
                  <div class="nav__box">
                    <ul class="nav-items">
                      <li class="nav-items__title">
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
                      <li class="nav-items__title">
                        <a href="./page-aboutus.html">私たちについて</a>
                      </li>
                    </ul>
                  </div>
                  <div class="nav__box">
                    <ul class="nav-items">
                      <li class="nav-items__title">
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
                      <li class="nav-items__title">
                       <a href="./archive-blog.html">ブログ</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="nav__right">
                  <div class="nav__box">
                    <ul class="nav-items">
                      <li class="nav-items__title">
                        <a href="./archive-voice.html">お客様の声</a>
                      </li>
                      <li class="nav-items__title">
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
                      <li class="nav-items__title">
                        <a href="./page-faq.html">よくある質問</a>
                      </li>
                      <li class="nav-items__title">
                        <a href="./page-privacypolicy.html"
                          >プライバシー<br class="u-mobile" />ポリシー</a
                        >
                      </li>
                      <li class="nav-items__title">
                       <a href="./page-terms-of-service.html">利用規約</a>
                      </li>
                      <li class="nav-items__title">
                        <a href="./page-contact.html">お問い合わせ</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header__pc-nav pc-nav">
          <ul class="pc-nav__items">
            <li class="pc-nav__item">
              <a href="./archive-campaign.html"
                ><p class="pc-nav__en">
                  campaign<span class="pc-nav__ja">キャンペーン</span>
                </p>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="./page-aboutus.html"
                ><p class="pc-nav__en">
                  About us<span class="pc-nav__ja">私たちについて</span>
                </p>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="./page-information.html"
                ><p class="pc-nav__en">
                  Information<span class="pc-nav__ja">ダイビング情報</span>
                </p>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="./archive-blog.html"
                ><p class="pc-nav__en">
                  Blog<span class="pc-nav__ja">ブログ</span>
                </p>
              </a>
            </li>

            <li class="pc-nav__item">
              <a href="./archive-voice.html"
                ><p class="pc-nav__en">
                  Voice<span class="pc-nav__ja">お客様の声</span>
                </p>
              </a>
            </li>

            <li class="pc-nav__item">
              <a href="./page-price.html"
                ><p class="pc-nav__en">
                  Price<span class="pc-nav__ja">料金一覧</span>
                </p>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="./page-faq.html"
                ><p class="pc-nav__en">
                  FAQ<span class="pc-nav__ja">よくある質問</span>
                </p>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="./page-contact.html"
                ><p class="pc-nav__en">
                  Contact<span class="pc-nav__ja">お問い合わせ</span>
                </p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header>