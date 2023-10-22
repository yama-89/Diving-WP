<body class="error">
  <!-- ヘッダー -->
  <div class="wrap">
    <?php get_header(); ?>

    <main>

    <?php get_template_part('parts/breadcrumb') ?>


      <section class="page-404 top-page-404">
        <div class="page-404__inner inner">
          <h2 class="page-404__title">404</h2>
          <p class="page-404__text">
            申し訳ありません。<br />お探しのページが見つかりません。
          </p>
        </div>
        <div class="page-404__btn">
          <a href="#" class="button button--reverse">Page TOP<span></span></a>
        </div>
      </section>

    </main>
    <?php get_footer(); ?>
  </div>
</body>