<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <section id="sub-mv" class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-pc-sub-mv-img.jpg" media="(min-width: 768px)" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-sp-sub-mv-img.jpg" alt="sub-contact-mv" />
        </picture>
      </div>
      <h2 class="sub-mv__title">Contact</h2>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumb') ?>


  <p class="contact__text">入力内容をご確認ください。</p>

  <div class="page-contact layout-page-contact">
    <div class="page-contact__inner inner">
      <?php echo do_shortcode('[contact-form-7 id="cefd48d" title="お問い合わせ"]'); ?>
    </div>
  </div>

</main>
<?php get_footer(); ?>