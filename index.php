<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
<?php dynamic_sidebar('absolute'); // выводим сайдбар, имя определено в functions.php ?>
<main>

<?php get_template_part('/parts/slider')?>
<?php get_template_part('/parts/about')?>
<?php get_template_part('/parts/tracks')?>
<?php get_template_part('/parts/news')?>
<?php get_template_part('/parts/contacts')?>

</main>

<?php get_footer(); // подключаем footer.php ?>