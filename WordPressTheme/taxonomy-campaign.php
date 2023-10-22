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

            <?php
            // タクソノミーのスラッグを指定
            $genre_slug = get_query_var('campaign-tag');
            $args = array(
                // カスタム投稿のスラッグを指定
                "post_type" => "campaign",
                'tax_query' => array(
                    array(
                        // タクソノミーのスラッグを指定
                        'taxonomy' => 'campaign-tag',
                        'field'    => 'slug',
                        'terms'    => $genre_slug,
                    ),
                ),
            );
            $the_query = new WP_Query($args);
            ?>
            <ul class="archive-campaign__tab tab-items">
                <?php
                $current_term_id = get_queried_object()->term_id;
                $terms = get_terms(array(
                    // 表示するタクソノミースラッグを記述
                    'taxonomy' => 'campaign-tag',
                    'orderby' => 'name',
                    'order'   => 'ASC',
                    // 表示するタームの数を指定
                    'number'  => 5
                ));

                // カスタム投稿一覧ページへのURL
                $home_class = (is_post_type_archive()) ? 'current' : '';
                $home_link = sprintf(
                    //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
                    '<a class="tab-items__item %s" href="%s" alt="%s">全て</a>',
                    $home_class,
                    // カスタム投稿一覧ページのスラッグを指定
                    esc_url(home_url('/campaign')),
                    esc_attr(__('View all posts', 'textdomain'))
                );
                echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

                // タームのリンク
                if ($terms) {
                    foreach ($terms as $term) {
                        // カレントクラスに付与するクラスを指定できる
                        $term_class = ($current_term_id === $term->term_id) ? 'current' : '';
                        $term_link = sprintf(
                            // 各タームに付与するクラスを指定できる
                            '<a class="tab-items__item %s" href="%s" alt="%s">%s</a>',
                            $term_class,
                            esc_url(get_term_link($term->term_id)),
                            esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
                            esc_html($term->name)
                        );
                        echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
                    }
                }
                ?>

                <li class="tab-items__item current"><a href="">ALL</a></li>
                <li class="tab-items__item"><a href="">ライセンス講習</a></li>
                <li class="tab-items__item"><a href="">ファンダイビング</a></li>
                <li class="tab-items__item"><a href="">体験ダイビング</a></li>
            </ul>
            <div class="archive-campaign__cards archive-campaign-cards">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="archive-campaign-cards__card card-campaign">
                            <div class="card-campaign__img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', array('class' => 'blog-content__img')); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="NoImage画像" />
                                <?php endif; ?>
                            </div>
                            <div class="card-campaign__body card-campaign__body--campaign">
                                <div class="card-campaign__title-wrap">
                                    <?php
                                    $taxonomy_terms = get_the_terms($post->ID, 'campaign-tag');
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
                                        <p class="card-campaign__price-text">¥56,000</p>
                                        <p class="card-campaign__price-subtext">¥46,000</p>
                                    </div>
                                </div>
                                <div class="card-campaign__text-box">
                                    <p class="card-campaign__text">
                                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                    </p>
                                    <time class="card-campaign__date" datetime="2023-06-01">
                                        2023/6/1-9/30
                                    </time>
                                    <p class="card-campaign__contact">
                                        ご予約・お問い合わせはコチラ
                                    </p>
                                    <div class="card-campaign__btn">
                                        <a href="./page-contact.html" class="button">Contact us<span></span></a>
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