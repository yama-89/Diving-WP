<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <div class="loader js-loader">
    <span class="loader__line js-loader-line"></span>
    <span class="loader__line js-loader-line"></span>
    <span class="loader__line js-loader-line"></span>
    <span class="loader__line js-loader-line"></span>
    <span class="loader__line js-loader-line"></span>
    <span class="loader__line js-loader-line"></span>
    <span class="loader__line js-loader-line"></span>
    <span class="loader__line js-loader-line"></span>
    <span class="loader__line js-loader-line"></span>
    <span class="loader__line js-loader-line"></span>
  </div>
  <section id="mv" class="mv">
    <div class="mv__inner">
      <div class="mv__slider swiper js-mv-swiper">
        <div class="swiper-wrapper">
          <?php
          $slides = SCF::get_option_meta('image-options', 'mv');; // SCFフィールド名に置き換える
          if ($slides) :
            foreach ($slides as $slide) :
              $desktop_image = wp_get_attachment_image_src($slide['pcmv'], 'large');
              $mobile_image = wp_get_attachment_image_src($slide['spmv'], 'large');
              // $slide_title = esc_html($slide['MVスライダー']); // タイトルフィールドの名前に置き換える

              if (!empty($desktop_image) && !empty($mobile_image)) :
          ?>
                <div class="swiper-slide">
                  <picture>
                    <source srcset="<?php echo esc_url($desktop_image[0]); ?>" media="(min-width: 1024px)" />
                    <img src="<?php echo esc_url($mobile_image[0]); ?>" alt="" />
                  </picture>
                </div>
          <?php endif;
            endforeach;
          endif;
          ?>
        </div>
      </div>
      <div class="mv__title-wrap">
        <h2 class="mv__title js-title">DIVING</h2>
        <p class="mv__sub-title js-title">into the ocean</p>
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
          <?php
          $args = array(
            'post_type' => 'campaign',
            'posts_per_page' => 8,
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
          ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

              <div class="swiper-slide campaign__card js-fadeIns">
                <div class="card-campaign js-fadeIns-child">
                  <div class="card-campaign__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php echo the_post_thumbnail_url(); ?>" alt="img" class="card-campaign__img" />
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="NoImage画像" />
                    <?php endif; ?>
                  </div>
                  <div class="card-campaign__body">
                    <div class="card-campaign__title-wrap">
                      <?php
                      $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                      if (!empty($taxonomy_terms)) {
                        foreach ($taxonomy_terms as $taxonomy_term) {
                          echo '<span class="card-campaign__tag">' . esc_html($taxonomy_term->name) . '</span>';
                        }
                      }
                      ?>
                      <p class="card-campaign__title">
                        <?php the_title(); ?>
                      </p>
                    </div>
                    <?php
                    $campaignPrice = get_field('campaign-price');
                    if ($campaignPrice) : ?>
                      <div class="card-campaign__price-wrap">
                        <p class="card-campaign__price-title">
                          <?php echo $campaignPrice["campaign-priceTitle"]; ?>
                        </p>
                        <div class="card-campaign__price-box">
                          <p class="card-campaign__price-text">
                            ¥<?php echo $campaignPrice["campaign-price1"]; ?>
                          </p>
                          <p class="card-campaign__price-subtext">
                            ¥<?php echo $campaignPrice["campaign-price2"]; ?>
                          </p>
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
          <?php endwhile;
            wp_reset_postdata();
          endif; ?>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="campaign__btn">
        <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="button">View more<span></span></a>
      </div>
    </div>
  </section>

  <!-- about us -->
  <section id="aboutus" class="aboutus top-aboutus js-aboutus">
    <div class="aboutus__inner inner">
      <div class="aboutus__title section-title section-title--aboutus">
        <span>About&nbsp;us</span>
        <h2 class="section-title__main">私たちについて</h2>
      </div>
      <div class="aboutus__container">
        <div class="aboutus__img-box">
          <div class="aboutus__left-img js-aboutus-leftImg">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-aboutus1.jpg" media="(min-width: 1024px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-aboutus1.jpg" alt="屋根の上にシーサーが置いてある様子" />
            </picture>
          </div>
          <div class="aboutus__right-img js-aboutus-rightImg">
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
              私たちは世界中の美しい海の底に潜り込み、驚くべき海底世界を探索することに情熱を燃やしています。<br />ダイビングは私たちの生活の一部であり、この素晴らしい冒険を共有することで、多くの人々に海の奥深さと美しさを伝えたいと考えています。
            </p>
            <div class="aboutus__btn">
              <a href="<?php echo esc_url(home_url("/about-us")) ?>" class="button">View more<span></span></a>
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
        <div class="infomation__img js-maskImg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-infomation.jpg" alt="３匹のオレンジの魚が泳いでいる様子" />
        </div>
        <div class="infomation__box">
          <h3 class="infomation__sub-title">ライセンス講習</h3>
          <p class="infomation__text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="infomation__btn">
            <a href="<?php echo esc_url(home_url("/information")) ?>" class="button">View more<span></span></a>
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
      <div class="blog__cards blog-cards js-fadeIns">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="blog-cards__card card-blog js-fadeIns-child">
              <div class="card-blog__container">
                <div class="card-blog__img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full'); ?>
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="NoImage画像" />
                  <?php endif; ?>
                </div>
                <div class="card-blog__body">
                  <time class="card-blog__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                  <div class="card-blog__title"><?php the_title(); ?></div>
                  <div class="card-blog__text">
                    <?php echo wp_trim_words(get_the_content(), 80); ?>
                  </div>
                </div>
              </div>
            </a>
        <?php endwhile;
          wp_reset_postdata();
        endif; ?>
      </div>

      <div class="blog__btn">
        <a href="<?php echo esc_url(home_url("/blog")) ?>" class="button">View more<span></span></a>
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
        <div class="voice__cards voice-cards js-fadeIns">
          <?php
          $args = array(
            'post_type' => 'voice',
            'posts_per_page' => 2,
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
          ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <div class="voice-cards__card card-voice js-fadeIns-child">
                <div class="card-voice__container">
                  <div class="card-voice__title-box">
                    <div class="card-voice__box">
                      <?php
                      $voiceAge = get_field('voice-age2');
                      if ($voiceAge) : ?>
                        <div class="card-voice__meta">
                          <p class="card-voice__age">
                            <?php echo $voiceAge["age"]; ?>代
                            （<?php echo $voiceAge["gender"]; ?>）
                          </p>
                          <?php
                          $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                          if (!empty($taxonomy_terms)) {
                            foreach ($taxonomy_terms as $taxonomy_term) {
                              echo '<span class="card-voice__tag">' . esc_html($taxonomy_term->name) . '</span>';
                            }
                          }
                          ?>
                        </div>
                      <?php endif; ?>
                      <p class="card-voice__title">
                        <?php the_title(); ?>
                      </p>
                    </div>
                    <div class="card-voice__img js-maskImg">
                      <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="img" class="card-voice__img" />
                      <?php else : ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="NoImage画像" />
                      <?php endif; ?>
                      <!-- <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-card-voice1.jpg" alt="女性の画像" /> -->
                    </div>
                  </div>
                  <p class="card-voice__text">
                    <?php the_field('voice'); ?>
                  </p>
                </div>
              </div>
          <?php endwhile;
            wp_reset_postdata();
          endif; ?>
        </div>
        <div class="voice__btn">
          <a href="<?php echo esc_url(home_url("/voice")) ?>" class="button">View more<span></span></a>
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
          <?php $free_item = SCF::get_option_meta('price-options', 'price-page1'); ?>
          <?php $text = SCF::get_option_meta('price-options', 'menu-title'); ?>
          <?php if ($free_item[0]["title1"]) : ?>
            <h3 class="price__items-title">
              <?php echo $text; ?>
            </h3>
            <dl class="price__items price-item">
              <?php
              // $free_items = SCF::get('price-page', 25); // 正しいフィールド名を使用
              foreach ($free_item as $fields) :
                if (!empty($fields['title1']) && !empty($fields['price1'])) :
              ?>
                  <div class="price-item__text-box">
                    <dt class="price-item__text">
                      <?php echo ($fields['title1']); ?>
                    </dt>
                    <dd class="price-item__price">
                      <?php echo $fields['price1']; ?>
                    </dd>
                  </div>
              <?php
                endif;
              endforeach;
              ?>
            <?php endif; ?>
            </dl>
            <?php $free_item = SCF::get_option_meta('price-options', 'price-page2'); ?>
            <?php $text = SCF::get_option_meta('price-options', 'menu-title2'); ?>
            <?php if ($free_item[0]["title2"]) : ?>
              <h3 class="price__items-title">
                <?php echo $text; ?>
              </h3>
              <dl class="price__items price-item">
                <?php
                // $free_items = SCF::get('price-page2', 25); // 正しいフィールド名を使用
                foreach ($free_item as $fields) :
                  if (!empty($fields['title2']) && !empty($fields['price2'])) :
                ?>
                    <div class="price-item__text-box">
                      <dt class="price-item__text">
                        <?php echo ($fields['title2']); ?>
                      </dt>
                      <dd class="price-item__price">
                        <?php echo $fields['price2']; ?>
                      </dd>
                    </div>

                <?php
                  endif;
                endforeach;
                ?>
              <?php endif; ?>
              </dl>

              <?php $free_item = SCF::get_option_meta('price-options', 'price-page3'); ?>
              <?php $text = SCF::get_option_meta('price-options', 'menu-title3'); ?>
              <?php if ($free_item[0]["title3"]) : ?>
                <h3 class="price__items-title">
                  <?php echo $text; ?>
                </h3>
                <dl class="price__items price-item">
                  <?php
                  // $free_items = SCF::get('price-page3', 25); // 正しいフィールド名を使用
                  foreach ($free_item as $fields) :
                    if (!empty($fields['title3']) && !empty($fields['price3'])) :
                  ?>
                      <div class="price-item__text-box">
                        <dt class="price-item__text">
                          <?php echo ($fields['title3']); ?>
                        </dt>
                        <dd class="price-item__price">
                          <?php echo $fields['price3']; ?>
                        </dd>
                      </div>
                  <?php
                    endif;
                  endforeach;
                  ?>
                <?php endif; ?>
                </dl>

                <?php $free_item = SCF::get_option_meta('price-options', 'price-page4'); ?>
                <?php $text = SCF::get_option_meta('price-options', 'menu-title3'); ?>
                <?php if ($free_item[0]["title4"]) : ?>
                  <h3 class="price__items-title"><?php echo $text; ?>スペシャルダイビング</h3>
                  <dl class="price__items price-item">
                    <?php
                    // $free_items = SCF::get('price-page4', 25); // 正しいフィールド名を使用
                    foreach ($free_item as $fields) :
                      if (!empty($fields['title4']) && !empty($fields['price4'])) :
                    ?>
                        <div class="price-item__text-box">
                          <dt class="price-item__text">
                            <?php echo ($fields['title4']); ?>
                          </dt>
                          <dd class="price-item__price">
                            <?php echo $fields['price4']; ?>
                          </dd>
                        </div>
                    <?php
                      endif;
                    endforeach;
                    ?>
                  <?php endif; ?>
                  </dl>
        </div>
        <div class="price__right-side">
          <div class="price__img js-maskImg">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pc-price.jpg" media="(min-width: 768px)" type="image/png" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sp-price.jpg" alt="”複数の赤い魚が泳いでいる様子”" />
            </picture>
          </div>
        </div>
      </div>
      <div class="price__btn">
        <a href="<?php echo esc_url(home_url("/price")) ?>" class="button">View more<span></span></a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>