<?php get_header(); ?>

<main>
    <!-- 下層ページのメインビュー -->
    <section id="sub-mv" class="sub-mv">
        <div class="sub-mv__inner">
            <div class="sub-mv__img">
                <picture>
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-pc-sub-mv-img.jpg" media="(min-width: 768px)" />
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-sp-sub-mv-img.jpg" alt="sub-voice-mv" />
                </picture>
            </div>
            <h2 class="sub-mv__title">Voice</h2>
        </div>
    </section>

    <?php get_template_part('parts/breadcrumb') ?>

    <section class="archive-campaign layout-archive-campaign">
        <div class="archive-campaign__inner inner">
            <div class="archive-campaign__tab tab-items">

                <?php
                $taxonomy = 'voice_category'; // タクソノミースラッグを指定
                $terms = get_terms([
                    'taxonomy' => $taxonomy,
                    'hide_empty' => false,
                ]);
                echo '<span class=tab-items__item><a href="' . esc_url(get_post_type_archive_link('voice')) . '">ALL</a></span>';
                foreach ($terms as $term) {
                    $term_link = get_term_link($term, $taxonomy);
                    // タームが選択されているかどうかを判定
                    $current_term = get_queried_object();
                    $term_class = '';
                    if ($current_term && $term->term_id === $current_term->term_id) {
                        $term_class = 'current'; // 選択中のカテゴリーにクラスを付ける
                    }
                    // タームへのリンクとクラスを表示
                    echo '<span class="' . $term_class . ' tab-items__item"><a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a></span>';
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
                                    <div class="card-voice__img js-colorbox">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="img" class="card-voice__img" />
                                        <?php else : ?>
                                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="NoImage画像" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <p class="card-voice__text">
                                <?php the_field('voice'); ?>

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