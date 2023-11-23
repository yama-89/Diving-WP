<?php get_header(); ?>

<main>
  <!-- 下層ページのメインビュー -->
  <section id="sub-mv" class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-pc-sub-mv-img.jpg" media="(min-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-sp-sub-mv-img.jpg" alt="sub-terms-of-service-mv" />
        </picture>
      </div>
      <h2 class="sub-mv__title">Terms of Service</h2>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumb') ?>

  <section class="page-terms-of-service layout-page-terms-of-service">
    <div class="page-terms-of-service__inner">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <h2 class="page-terms-of-service__title"><?php the_title(); ?></h2>
          <div class="page-terms-of-service__content">
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
          </div>
  </section>
</main>
<?php get_footer(); ?>