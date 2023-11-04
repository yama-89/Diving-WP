<aside class="block-2col__side side-menu">
    <div class="side-menu__content">
        <div class="side-menu__blog">
            <div class="side-menu__title archive-sub-title">
                <p class="archive-sub-title__title">人気記事</p>
            </div>
            <?php
            $args = array(
                "post_type" => "post",
                "posts_per_page" => 3,
                "orderby" => "date",
                "order" => "DESC",
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <div class="side-menu__blog-cards side-menu-blog-cards">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="side-menu-blog-cards__card card-blog-mini">
                            <div class="card-blog-mini__container">
                                <div class="card-blog-mini__img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="NoImage画像" />
                                    <?php endif; ?>
                                </div>
                                <div class="card-blog-mini__body">
                                    <time class="card-blog-mini__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                                    <div class="card-blog-mini__title">
                                        <?php the_title(); ?>
                                    </div>
                                </div>
                            </div>
                        </a>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p>記事が投稿されていません</p>
                <?php endif; ?>
                </div>
        </div>
        <div class="side-menu__voice">
            <div class="side-menu__title archive-sub-title">
                <p class="archive-sub-title__title">口コミ</p>
            </div>
            <?php
            $args = array(
                "post_type" => "voice",
                "posts_per_page" => 1,
                "orderby" => "date",
                "order" => "DESC",
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="side-menu__voice-card card-voice-mini">
                        <div class="card-voice-mini__container">
                            <div class="card-voice-mini__img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', array('class' => 'card-campaign__img')); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="NoImage画像" />
                                <?php endif; ?>
                            </div>
                            <p class="card-voice-mini__age"><?php the_field("voice-age"); ?></p>
                            <p class="card-voice-mini__title">
                                <?php the_title(); ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>記事が投稿されていません</p>
            <?php endif; ?>
            <div class="side-menu__voice-button">
                <a href="<?php echo esc_url(home_url("/voice")) ?>" class="button">View more<span></span></a>
            </div>
        </div>
        <div class="side-menu__campaign">
            <div class="side-menu__title archive-sub-title">
                <p class="archive-sub-title__title">キャンペーン</p>
            </div>
            <?php
            $args = array(
                "post_type" => "campaign",
                "posts_per_page" => 3
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <div class="side-menu__campaign-cards">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="side-menu__campaign-card card-campaign-mini">
                            <div class="card-campaign-mini__img">
                            <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="NoImage画像" />
                                    <?php endif; ?>
                            </div>
                            <div class="card-campaign-mini__body">
                                <div class="card-campaign-mini__title-wrap">
                                    <p class="card-campaign-mini__title">
                                        <?php the_title(); ?>
                                    </p>
                                </div>
                                <div class="card-campaign-mini__price-wrap">
                                    <p class="card-campaign-mini__price-title">
                                        全部コミコミ(お一人様)
                                    </p>
                                    <div class="card-campaign-mini__price-box">
                                        <p class="card-campaign-mini__price-text">
                                            ¥<?php the_field("campaign-price1"); ?>
                                        </p>
                                        <p class="card-campaign-mini__price-subtext">
                                            ¥<?php the_field("campaign-price2"); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p>記事が投稿されていません</p>
                <?php endif; ?>
                </div>
                <div class="side-menu__campaign-button">
                    <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="button">View more<span></span></a>
                </div>
        </div>

        <div class="side-menu__archive">
            <div class="side-menu__title archive-sub-title">
                <p class="archive-sub-title__title">アーカイブ</p>
            </div>
            <ul class="side-menu__archive-lists archive-lists">
                <?php
                // 年ごとのアーカイブループを開始
                $year = date('Y'); // 表示する最初の年
                $end_year = 2010; // 表示する最後の年

                while ($year >= $end_year) {
                    // 月ごとのアーカイブを取得
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1, // すべての記事を取得
                        'ignore_sticky_posts' => 1,
                        'year' => $year,
                    );
                    $months = new WP_Query($args);

                    if ($months->have_posts()) {
                        echo '<li class="archive-lists__year js-year">' . $year . '<ul class="archive-lists__list js-month">';

                        $months_array = array();

                        while ($months->have_posts()) {
                            $months->the_post();
                            $month = get_the_time('n');
                            $months_array[$month] = get_the_time('F');
                        }

                        // 月のアーカイブを表示
                        for ($i = 12; $i >= 1; $i--) {
                            if (isset($months_array[$i])) {
                                echo '<li class="archive-lists__month">';
                                echo '<a href="' . get_month_link($year, $i) . '">' . esc_html($months_array[$i]) . '</a>';
                                echo '</li>';
                            }
                        }

                        echo '</ul></li>';
                    }

                    wp_reset_postdata();

                    $year--; // 前の年に移動
                }
                ?>
            </ul>
        </div>
    </div>
</aside>