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
                alt="sub-privacypolicy-mv"
              />
            </picture>
          </div>
          <h2 class="sub-mv__title">Privacy Policy</h2>
        </div>
      </section>

      <?php get_template_part('parts/breadcrumb') ?>


      <section class="page-privacypolicy layout-page-privacypolicy">
        <div class="page-privacypolicy__inner">
          <h2 class="page-privacypolicy__title">プライバシーポリシー</h2>
          <div class="page-privacypolicy__content">
            <p>以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。</p>
            <ol>
              <li>概要 当社は、お客様の個人情報を大切に扱い、個人情報保護に努めています。本プライバシーポリシーには、当社がどのように個人情報を収集し、使用するかについて説明しています。</li>
              <li>収集する情報 当社は、お客様が当社のサービスを利用する際に、お名前、住所、電話番号、メールアドレスなどの個人情報を収集する場合があります。</li>
            </ol>
            <p>また、当社のサイトを閲覧する際に、IPアドレス、ブラウザの種類、言語設定、アクセス日時などの情報も収集する場合があります。</p>
            <ol>
              <li>情報の使用 当社は、お客様から収集した個人情報を、以下の目的で使用することがあります。</li>
            </ol>
            <p>・お客様からのお問い合わせやサポートの提供 ・当社のサービスや製品の提供 ・当社のサイトの改善や新しいサービスの開発 ・法律や規制に基づく義務の履行</p>
            <ol>
              <li>情報の共有 当社は、お客様から収集した個人情報を、以下の場合に限り第三者に提供することがあります。</li>
            </ol>
            <p>・お客様の同意がある場合 ・法律や規制に基づく場合 ・当社が信頼できると判断した業務委託先に必要な範囲で提供する場合</p>
            <ol>
              <li>セキュリティ 当社は、お客様の個人情報を適切に保護するために、適切な安全対策を講じます。個人情報への不正アクセス、紛失、改ざん、漏洩等を防止するための措置を講じます。</li>
              <li>Cookieの使用 当社は、お客様により良いサイトの利用体験を提供するために、Cookieを使用する場合があります。Cookieは、お客様が当社のサイトを訪れた際に、お客様のブラウザに保存される小さなデータファイルです。Cookieには個人情報は含まれません。</li>
              <li>お問い合わせ先 当社のプライバシーポリシーに関するご質問やご意見は、以下の連絡先までお問い合わせください。 [会社名] [住所] [電話番号] [メールアドレス]</li>
              <li>プライバシーポリシーの変更 当社は、必要に応じて本プライバシーポリシーを変更することがあります。変更後のプライバシーポリシーは、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。</li>
            </ol>
            <p>以上が、当社のプライバシーポリシーの概要です。お客様の個人情報保護のために、常に努めてまいります。</p>
          </div>


        </div>
      </section>
    </main>
<?php get_footer(); ?>
