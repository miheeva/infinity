<?php
/**
 * Шаблон сайдбара (sidebar.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<?php if (is_active_sidebar( 'sidebar' )) { // если в сайдбаре есть что выводить ?>

    <aside class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="row">
            <div class="sidebar">
                <?php dynamic_sidebar('sidebar'); // выводим сайдбар, имя определено в functions.php ?>
            </div>
        </div>

    </aside>

<?php } ?>