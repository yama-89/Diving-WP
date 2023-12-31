<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head() ?>
</head>

<?php
$home = esc_url(home_url('/'));
$campaign = esc_url(home_url('/campaign/'));
$aboutus = esc_url(home_url('/about-us/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$price = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$contact = esc_url(home_url('/contact/'));
$privacypolicy = esc_url(home_url('/privacy-policy/'));
$termsofservice = esc_url(home_url('/terms-of-service/'));
$sitemap = esc_url(home_url('/sitemap/'));
?>

<body>
  <!-- ヘッダー -->
  <header class="header js-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo $home; ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/header-logo.png" alt="CodeUps" /></a>
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
                      <a href="<?php echo $campaign; ?>">キャンペーン</a>
                      <ul class="nav-items__list nav-subitem">
                        <li class="nav-subitem__list">
                          <a href="<?php echo esc_url(home_url("/campaign_category/tag1")) ?>">ライセンス取得</a>
                        </li>
                        <li class="nav-subitem__list">
                          <a href="<?php echo esc_url(home_url("/campaign_category/tag3")) ?>">体験ダイビング</a>
                        </li>
                        <li class="nav-subitem__list">
                          <a href="<?php echo esc_url(home_url("/campaign_category/tag2")) ?>">ファンダイビング</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-items__title">
                      <a href="<?php echo $aboutus; ?>">私たちについて</a>
                    </li>
                  </ul>
                </div>
                <div class="nav__box">
                  <ul class="nav-items">
                    <li class="nav-items__title">
                      <a href="<?php echo $information; ?>">ダイビング情報</a>
                      <ul class="nav-items__list nav-subitem">
                        <li class="nav-subitem__list">
                          <a href="<?php echo esc_url(home_url("information#info-tab1")) ?>">ライセンス取得</a>
                        </li>
                        <li class="nav-subitem__list">
                          <a href="<?php echo esc_url(home_url("information#info-tab2")) ?>">ファンダイビング</a>
                        </li>
                        <li class="nav-subitem__list">
                          <a href="<?php echo esc_url(home_url("information#info-tab3")) ?>">体験ダイビング</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-items__title">
                      <a href="<?php echo $blog; ?>">ブログ</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="nav__right">
                <div class="nav__box">
                  <ul class="nav-items">
                    <li class="nav-items__title">
                      <a href="<?php echo $voice; ?>">お客様の声</a>
                    </li>
                    <li class="nav-items__title">
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
                    <li class="nav-items__title">
                      <a href="<?php echo $faq; ?>">よくある質問</a>
                    </li>
                    <li class="nav-items__title">
                      <a href="<?php echo $privacypolicy; ?>">プライバシー<br class="u-mobile" />ポリシー</a>
                    </li>
                    <li class="nav-items__title">
                      <a href="<?php echo $termsofservice; ?>">利用規約</a>
                    </li>
                    <li class="nav-items__title">
                      <a href="<?php echo $contact; ?>">お問い合わせ</a>
                    </li>
                    <li class="nav-items__title">
                      <a href="<?php echo $sitemap; ?>">サイトマップ</a>
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
            <a href="<?php echo $campaign; ?>">
              <p class="pc-nav__en">
                campaign<span class="pc-nav__ja">キャンペーン</span>
              </p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $aboutus; ?>">
              <p class="pc-nav__en">
                About us<span class="pc-nav__ja">私たちについて</span>
              </p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $information; ?>">
              <p class="pc-nav__en">
                Information<span class="pc-nav__ja">ダイビング情報</span>
              </p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $blog; ?>">
              <p class="pc-nav__en">
                Blog<span class="pc-nav__ja">ブログ</span>
              </p>
            </a>
          </li>

          <li class="pc-nav__item">
            <a href="<?php echo $voice; ?>">
              <p class="pc-nav__en">
                Voice<span class="pc-nav__ja">お客様の声</span>
              </p>
            </a>
          </li>

          <li class="pc-nav__item">
            <a href="<?php echo $price; ?>">
              <p class="pc-nav__en">
                Price<span class="pc-nav__ja">料金一覧</span>
              </p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $faq; ?>">
              <p class="pc-nav__en">
                FAQ<span class="pc-nav__ja">よくある質問</span>
              </p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $contact; ?>">
              <p class="pc-nav__en">
                Contact<span class="pc-nav__ja">お問い合わせ</span>
              </p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>