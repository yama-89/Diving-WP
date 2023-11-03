<?php get_header(); ?>

<main>
    <!-- 下層ページのメインビュー -->
    <section id="sub-mv" class="sub-mv">
        <div class="sub-mv__inner">
            <div class="sub-mv__img">
                <picture>
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-pc-sub-mv-img.jpg" media="(min-width: 768px)" />
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-sp-sub-mv-img.jpg" alt="sub-campaign-mv" />
                </picture>
            </div>
            <h2 class="sub-mv__title">Campaign</h2>
        </div>
    </section>

    <?php get_template_part('parts/breadcrumb') ?>



    <section class="archive-campaign layout-archive-campaign">
        <div class="archive-campaign__inner inner">

            <div class="archive-campaign__tab tab-items">
            <?php
            $taxonomy = 'campaign_category'; // タクソノミースラッグを指定
            $terms = get_terms([
                'taxonomy' => $taxonomy,
                'hide_empty' => false,
            ]);
            $all_link = esc_url(get_post_type_archive_link('campaign'));
            echo '<span class=tab-items__item current><a href="' . $all_link . '" class="current-all">ALL</a></span>';
            foreach ($terms as $term) {
                $term_link = get_term_link($term, $taxonomy);
                echo '<span class=tab-items__item><a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a></span>';
            }
            ?>
            </div>
            <div class="archive-campaign__cards archive-campaign-cards">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="archive-campaign-cards__card card-campaign">
                            <div class="card-campaign__img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', array('class' => 'card-campaign__img')); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="NoImage画像" />
                                <?php endif; ?>
                            </div>
                            <div class="card-campaign__body card-campaign__body--campaign">
                                <div class="card-campaign__title-wrap">
                                    <?php
                                    $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                                    if (!empty($taxonomy_terms)) {
                                        foreach ($taxonomy_terms as $taxonomy_term) {
                                            echo '<span class="card-campaign__tag">' . esc_html($taxonomy_term->name) . '</span>';
                                        }
                                    }
                                    ?>
                                    <!-- <span class="card-campaign__tag">ライセンス講習</span> -->
                                    <p class="card-campaign__title card-campaign__title--campaign">
                                        <?php the_title(); ?>
                                    </p>
                                </div>
                                <div class="card-campaign__price-wrap">
                                    <p class="card-campaign__price-title">
                                        全部コミコミ(お一人様)
                                    </p>
                                    <div class="card-campaign__price-box card-campaign__price-box--campaign">
                                        <p class="card-campaign__price-text">¥<?php the_field("campaign-price1"); ?></p>
                                        <p class="card-campaign__price-subtext">¥<?php the_field("campaign-price2"); ?></p>
                                    </div>
                                </div>
                                <div class="card-campaign__text-box">
                                    <p class="card-campaign__text">
                                    <?php the_content(); ?>
                                    </p>
                                    <time class="card-campaign__date" datetime="2023-06-01">
                                        2023/6/1-9/30
                                    </time>
                                    <p class="card-campaign__contact">
                                        ご予約・お問い合わせはコチラ
                                    </p>
                                    <div class="card-campaign__btn">
                                        <a href="<?php echo esc_url(home_url("/contact")) ?>" class="button">Contact us<span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>記事が投稿されていません</p>
                <?php endif; ?>
            </div>
            <div class="archive-campaign__pagenav pagenav">
                <?php wp_pagenavi(); ?>
            </div>
        </div>
    </section>


</main>


<?php get_footer(); ?>