<?php
/**
 * Шаблон шапки (header.php)
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<meta name="yandex-verification" content="fd564c63a82080ea" />
    <link rel="apple-touch-icon" href="icon.png">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<header class="index-header">
    <nav class="navbar navbar-light">
        <div class="container main-menu">
            <a href="/" class="navbar-brand">
                <img class="img-npo" src="<?php echo get_template_directory_uri() ?>/assets/img/Group%2053.svg" alt="">
                <img class="img-120" src="<?php echo get_template_directory_uri() ?>/assets/img/Group%2052.svg" alt="">
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
</header>

