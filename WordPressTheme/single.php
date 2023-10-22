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
      <div class="block-2col__main single-blog">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="single-blog__content blog-content">
              <time class="blog-content__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
              <h2><?php the_title(); ?></h2>
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array('class' => 'blog-content__img')); ?>
              <?php else : ?>
                <img class="blog-content__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="NoImage画像" />
              <?php endif; ?>
              <?php the_content(); ?>
            <?php endwhile; ?>
          <?php endif; ?>

            </div>
            <div class="single-blog__pagenav pagenav">
              <div class="wp-pagenavi">
                <?php
                // 前の記事へのリンク
                $prev_link = get_previous_post_link('%link', '＜');
                if (!empty($prev_link)) {
                  echo str_replace('<a href=', '<a class="dpreviouspostslink" href=', $prev_link);
                }
                // 次の記事へのリンク
                $next_link = get_next_post_link('%link', '＞');
                if (!empty($next_link)) {
                  echo str_replace('<a href=', '<a class="nextpostslink" href=', $next_link);
                }
                ?>
              </div>
            </div>
      </div>
      <?php get_template_part('parts/sidebar') ?>
    </div>
  </section>
</main>


<?php get_footer(); ?>