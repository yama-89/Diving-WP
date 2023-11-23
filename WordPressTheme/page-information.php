<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <section id="sub-mv" class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-pc-sub-mv-img.jpg" media="(min-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-sp-sub-mv-img.jpg" alt="sub-information-mv" />
        </picture>
      </div>
      <h2 class="sub-mv__title">Information</h2>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumb') ?>


  <section class="page-information layout-page-information">
    <div class="page-information__inner inner">
      <div class="page-information__btn-wrap">
        <div id="#info-tab1" class="page-information__btn tab-button js-tab is-active">ライセンス<br class="u-mobile" />講習</div>
        <div id="#info-tab2" class="page-information__btn tab-button tab-button--center js-tab">ファン<br class="u-mobile" />ダイビング</div>
        <div id="#info-tab3" class="page-information__btn tab-button js-tab">体験<br class="u-mobile" />ダイビング</div>
      </div>
      <div class="page-information__container">
        <div class="page-information__content js-content is-active" id="info-tab1">
          <div class="page-information__content-wrap">
            <div class="page-information__box">
              <h3 class="page-information__sub-title">ライセンス講習</h3>
              <p class="page-information__text">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
              </p>
            </div>
            <div class="page-information__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-page-information1.jpg" alt="３匹のオレンジの魚が泳いでいる様子" />
            </div>
          </div>
        </div>
        <div class="page-information__content js-content" id="info-tab2">
          <div class="page-information__content-wrap">
            <div class="page-information__box">
              <h3 class="page-information__sub-title">ファンダイビング</h3>
              <p class="page-information__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="page-information__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-page-information2.jpg" alt="３匹のオレンジの魚が泳いでいる様子" />
            </div>
          </div>
        </div>
        <div class="page-information__content js-content" id="info-tab3">
          <div class="page-information__content-wrap">
            <div class="page-information__box">
              <h3 class="page-information__sub-title">体験ダイビング</h3>
              <p class="page-information__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="page-information__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-page-information3.jpg" alt="３匹のオレンジの魚が泳いでいる様子" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>