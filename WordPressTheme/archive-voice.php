<?php get_header(); ?>

<main>
      <!-- 下層ページのメインビュー -->
      <section id="sub-mv" class="sub-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__img">
            <picture>
              <source
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-pc-sub-mv-img.jpg"
                media="(min-width: 768px)"
              />
              <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-sp-sub-mv-img.jpg"
                alt="sub-voice-mv"
              />
            </picture>
          </div>
          <h2 class="sub-mv__title">Voice</h2>
        </div>
      </section>

    <?php get_template_part('parts/breadcrumb') ?>

      <section class="archive-voice layout-archive-voice">
        <div class="archive-voice__inner inner">
          <div class="archive-voice__tab tab-items">
          <?php
            $taxonomy = 'voice-tag'; // タクソノミースラッグを指定
            $terms = get_terms([
                'taxonomy' => $taxonomy,
                'hide_empty' => false,
            ]);
            $all_link = esc_url(get_post_type_archive_link('voice'));
            echo '<span class=tab-items__item current><a href="' . $all_link . '" class="current-all">ALL</a></span>';
            foreach ($terms as $term) {
                $term_link = get_term_link($term, $taxonomy);
                echo '<span class=tab-items__item><a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a></span>';
            }
            ?>
          </div>
          <div class="archive-voice__cards voice-cards">
            <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
            <div class="voice-cards__card card-voice">
              <div class="card-voice__container">
                <div class="card-voice__title-box">
                  <div class="card-voice__box">
                    <div class="card-voice__meta">
                      <p class="card-voice__age"><?php the_field("voice-age"); ?></p>
                      <div class="card-voice__tag">ライセンス講習</div>
                    </div>
                    <p class="card-voice__title">
                      ここにタイトルが入ります。ここにタイトル
                    </p>
                  </div>
                  <div class="card-voice__img js-colorbox">
                    <img
                      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/card-voice1.jpg"
                      alt="女性の画像"
                    />
                  </div>
                </div>
                <p class="card-voice__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                  ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </div>
            <?php endwhile; ?>
                <?php else : ?>
                    <p>記事が投稿されていません</p>
                <?php endif; ?>
          </div>
          <div class="archive-voice__pagenav pagenav">
          <?php wp_pagenavi(); ?>

          </div>
        </div>
      </section>

    </main>



<?php get_footer(); ?>