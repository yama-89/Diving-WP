<?php get_header(); ?>
<main>
      <!-- 下層ページのメインビュー -->
      <section id="sub-mv" class="sub-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__img">
            <picture>
              <source
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-pc-sub-mv-img.jpg"
                media="(min-width: 768px)"
              />
              <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-sp-sub-mv-img.jpg"
                alt="sub-faq-mv"
              />
            </picture>
          </div>
          <h2 class="sub-mv__title">FAQ</h2>
        </div>
      </section>

      <?php get_template_part('parts/breadcrumb') ?>


      <section class="page-faq layout-page-faq">
        <div class="page-faq__inner inner">
        <?php
        $free_item = SCF::get('FAQ');
        foreach ($free_item as $fields) :
          if ($fields['title'] !== "" and $fields['text'] !== "") :
        ?>
          <div class="page-faq__item faq-item">
            <div class="faq-item__title js-faq-item__title">
              <p class="faq-item__title-text ">
              <?php echo $fields['title']; ?>
              </p>
            </div>
            <div class="faq-item__content js-faq-item__content">
              <p class="faq-item__text">
              <?php echo nl2br($fields['text']); ?>
              </p>
            </div>
          </div>
          <?php endif; endforeach;?>


        </div>
      </section>
    </main>

<?php get_footer(); ?>
