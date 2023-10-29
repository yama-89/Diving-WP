<div class="breadcrumb layout-breadcrumb
 <?php if (is_404('404')) : {
            echo 'layout-breadcrumb--404';
        } ?>
<?php endif; ?>">
    <div class="breadcrumb__inner inner">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
</div>