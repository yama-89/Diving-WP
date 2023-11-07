<?php get_header(); ?>

<main>
    <!-- 下層ページのメインビュー -->
    <section id="sub-mv" class="sub-mv">
        <div class="sub-mv__inner">
            <div class="sub-mv__img">
                <picture>
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-pc-sub-mv-img.jpg" media="(min-width: 768px)" />
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-sp-sub-mv-img.jpg" alt="sub-blog-mv" />
                </picture>
            </div>
            <h2 class="sub-mv__title">Blog</h2>
        </div>
    </section>

    <?php get_template_part('parts/breadcrumb') ?>

    <section class="block-2col layout-block-2col">
        <div class="block-2col__inner inner">
            <div class="block-2col__main archive-blog">
                <div class="archive-blog__cards blog-cards blog-cards--archive">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="blog-cards__card card-blog">
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
                                        <?php echo wp_trim_words( get_the_content(), 80 ); ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>記事が投稿されていません</p>
                    <?php endif; ?>
                </div>
                <div class="archive-blog__pagenav pagenav">
                    <?php wp_pagenavi(); ?>
                </div>
            </div>
            <?php get_template_part('parts/sidebar') ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>