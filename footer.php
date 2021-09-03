<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>

<footer>
    <div class="container">
        <nav class="navbar navbar-light">
            <div class="container main-menu">
                <a href="/" class="navbar-brand">
                    <img class="img-npo" src="<?php echo get_template_directory_uri() ?>/assets/img/npo-bw.svg" alt="">
                    <img class="img-120" src="<?php echo get_template_directory_uri() ?>/assets/img/120-bw.svg" alt="">
                </a>
                <?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
                    'theme_location' => 'header', // идентификатор меню, определен в register_nav_menus() в functions.php
                    'container'=> 'ul', // обертка списка, тут не нужна
                    'container_id'=>'navbarNav',
                    'menu_class' => 'navbar-nav', // класс для ul, первые 2 обязательны
                    'walker' => new T5_Nav_Menu_Walker_Simple()
                );
                wp_nav_menu($args); // выводим верхнее меню

                ?>
            </div>
        </nav>
        <div class="copyright">
        <span class="years">
            © 2021
        </span>
            <span class="copyright__text">
            Все права защищены. При использовании материалов ссылка на сайт infinity.school120spb.ru обязательна
        </span>
            <span class="dev">
            разработка сайта: <a href="">miheeva-spb</a>
        </span>
        </div>
    </div>

</footer>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
<?php wp_footer() ?>
</body>
</html>