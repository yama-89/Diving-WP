<?php get_header(); ?>
<main>
      <!-- 下層ページのメインビュー -->
      <section id="sub-mv" class="sub-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__img">
            <picture>
              <source
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-pc-sub-mv-img.jpg"
                media="(min-width: 768px)"
              />
              <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-sp-sub-mv-img.jpg"
                alt="sub-contact-mv"
              />
            </picture>
          </div>
          <h2 class="sub-mv__title">Contact</h2>
        </div>
      </section>

      <?php get_template_part('parts/breadcrumb') ?>


      <div class="page-contact layout-page-contact">
        <div class="page-contact__inner inner">
          <div class="page-contact__form form">
            <form action="" method="post" id="">
              <dl class="form__name">
                <dt>
                  お名前<span>必須</span>
                </dt>
                <dd>
                  <input type="text" name="company" value="" />
                </dd>
              </dl>
              <dl>
                <dt>
                  メールアドレス<span>必須</span>
                </dt>
                <dd>
                  <input type="email" name="mail_address" value="" class="validate[]" />
                </dd>
              </dl>
              <dl>
                <dt>
                  電話番号<span>必須</span>
                </dt>
                <dd>
                  <input type="tel" name="tel_number" value="" class="validate[]" />
                </dd>
              </dl>
              <dl>
                <dt class="">
                  お問合せ項目<span>必須</span>
                </dt>
                <dd class="">
                  <label><input type="checkbox" name="hoge" value="チェックボックス1" checked/><span>ダイビング講習について</span></label>
                  <label><input type="checkbox" name="hogehoge" value="チェックボックス2"/><span>ファンデイビングについて</span></label>
                  <label><input type="checkbox" name="hogehoge" value="チェックボックス2"/><span>体験ダイビングについて</span></label>
                </dd>
              </dl>
              <dl>
                <dt>
                  キャンペーン
                </dt>
                <dd class="">
                  <select name="hoge" class="">
                    <option value="">キャンペーン内容を選択</option>
                    <option value="セレクト1">セレクト1</option>
                    <option value="セレクト2">セレクト2</option>
                  </select>
                </dd>
              </dl>
              <dl>
                <dt>
                  お問合せ内容<span>必須</span>
                </dt>
                <dd>
                  <textarea name="contents"></textarea>
                </dd>
              </dl>
            </form>
            <div class="page-contact__check-box">
              <p class="">個人情報の取り扱いについて同意のうえ送信します。</p>
              <div class="page-contact__button">
                <a href="#" class="button">Send<span></span></a>

              </div>
            </div>
        </div>
        </div>
      </div>

    </main>
<?php get_footer(); ?>
