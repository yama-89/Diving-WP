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

<?php if (!is_page('contact') && !is_404()) : ?>
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
                        <h2 class="section-title__main">お問い合わせ</h2>
                    </div>
                    <div class="contact__text">ご予約・お問い合わせはコチラ</div>
                    <div class="contact__btn">
                        <a href="<?php echo $contact; ?>" class="button">Contact us<span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<div id="page-top" class="page-top js-page-top">
    <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-pagetop.png" media="(min-width: 768px)" type="image/png" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-pagetop.png" alt="トップへ戻るボタン" />
    </picture>
</div>
<footer class="footer top-footer">
    <div class="footer__inner inner">
        <div class="footer__nav nav">
            <div class="nav__container">
                <div class="nav__logos">
                    <div class="nav__logo">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer-logo.png" alt="logo" />
                    </div>
                    <div class="nav__icon">
                        <a href="#" class="nav__facebook"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook-icon.png" alt="facebook-icon" /></a>
                        <a href="#" class="nav__instagram"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram-icon.png" alt="instagram-icon" /></a>
                    </div>
                </div>
                <div class="nav__lists">
                    <div class="nav__left">
                        <div class="nav__box">
                            <ul class="nav-items">
                                <li class="nav-items__title">
                                    <a href="<?php echo $campaign; ?>">キャンペーン</a>
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
        <small class="footer__copyright">
        Copyright&copy;2021&nbsp;-&nbsp;2023&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.</small>
    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>