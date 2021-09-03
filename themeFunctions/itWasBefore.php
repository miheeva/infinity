<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage clean-wp-richbee
 */

add_theme_support('title-tag'); // теперь тайтл управляется самим вп

register_nav_menus(array( // Регистрируем много меню
    'header' => 'Верхнее меню',
));

add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
//set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150
add_image_size('big-thumb', 400, 400, true); // добавляем еще один размер картинкам 400x400 с обрезкой


register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
    'name' => 'Сайдбар', // Название в админке
    'id' => "sidebar", // идентификатор для вызова в шаблонах
    'description' => 'Обычная колонка в сайдбаре', // Описалово в админке
    'before_widget' => '<div id="%1$s" class="widget %2$s">', // разметка до вывода каждого виджета
    'after_widget' => "</div>\n", // разметка после вывода каждого виджета
    'before_title' => '<span class="widgettitle">', //  разметка до вывода заголовка виджета
    'after_title' => "</span>\n", //  разметка после вывода заголовка виджета
));
register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
    'name' => 'Сайдбар баннеры', // Название в админке
    'id' => "sidebar-banners", // идентификатор для вызова в шаблонах
    'description' => 'Обычная колонка в сайдбаре с баннерами', // Описалово в админке
    'before_widget' => '<div class="banner shadowBlock">', // разметка до вывода каждого виджета
    'after_widget' => "</div>\n", // разметка после вывода каждого виджета
    'before_title' => '<span class="widgettitle">', //  разметка до вывода заголовка виджета
    'after_title' => "</span>\n", //  разметка после вывода заголовка виджета
));



register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
    'name' => 'notFound', // Название в админке
    'id' => "not-found-page", // идентификатор для вызова в шаблонах
    'description' => 'Виджеты на 404-й странице', // Описалово в админке
    'before_widget' => '<div id="%1$s" class="widget %2$s">', // разметка до вывода каждого виджета
    'after_widget' => "</div>\n", // разметка после вывода каждого виджета
    'before_title' => '<span class="widgettitle">', //  разметка до вывода заголовка виджета
    'after_title' => "</span>\n", //  разметка после вывода заголовка виджета
));





if (!function_exists('pagination')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function pagination() { // функция вывода пагинации
        global $wp_query; // текущая выборка должна быть глобальной
        $big = 999999999; // число для замены
        $links = paginate_links(array( // вывод пагинации с опциями ниже
            'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))), // что заменяем в формате ниже
            'format' => '?paged=%#%', // формат, %#% будет заменено
            'current' => max(1, get_query_var('paged')), // текущая страница, 1, если $_GET['page'] не определено
            'type' => 'array', // нам надо получить массив
            'prev_text'    => 'Назад', // текст назад
            'next_text'    => 'Вперед', // текст вперед
            'total' => $wp_query->max_num_pages, // общие кол-во страниц в пагинации
            'show_all'     => false, // не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
            'end_size'     => 15, //  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
            'mid_size'     => 15, // сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
            'add_args'     => false, // массив GET параметров для добавления в ссылку страницы
            'add_fragment' => '',	// строка для добавления в конец ссылки на страницу
            'before_page_number' => '', // строка перед цифрой
            'after_page_number' => '' // строка после цифры
        ));
        if( is_array( $links ) ) { // если пагинация есть
            echo '<ul class="pagination">';
            foreach ( $links as $link ) {
                if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>"; // если это активная страница
                else echo "<li>$link</li>";
            }
            echo '</ul>';
        }
    }
}

add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
if (!function_exists('add_scripts')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function add_scripts() { // добавление скриптов
        if(is_admin()) return false; // если мы в админке - ничего не делаем
        wp_deregister_script('jquery'); // выключаем стандартный jquery
        wp_enqueue_script('modernizr',get_template_directory_uri().'/assets/js/vendor/modernizr-3.5.0.min.js','','',true);
        wp_enqueue_script('jquery',get_template_directory_uri().'/assets/js/vendor/jquery-3.2.1.min.js','','',true);
        wp_enqueue_script('popper', get_template_directory_uri().'/assets/popper/dist/umd/popper.js','','',true);
        wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js','','',true);
        wp_enqueue_script('plugins', get_template_directory_uri().'/assets/js/plugins.js','','',true);
        wp_enqueue_script('paroller', get_template_directory_uri().'/assets/js/jquery.paroller.min.js','','',true);
        wp_enqueue_script('fontawesome', get_template_directory_uri().'/assets/js/fontawesome.js','','',true);
        wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js','','',true);
    }
}

add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
if (!function_exists('add_styles')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function add_styles() { // добавление стилей
        if(is_admin()) return false; // если мы в админке - ничего не делаем
        wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/style.css' ); // основные стили шаблона
        wp_enqueue_style( 'clean', get_template_directory_uri().'/style.css' );
    }
}

if (!class_exists('bootstrap_menu')) {
    class bootstrap_menu extends Walker_Nav_Menu { // внутри вывод
        private $open_submenu_on_hover; // параметр который будет определять раскрывать субменю при наведении или оставить по клику как в стандартном бутстрапе

        function __construct($open_submenu_on_hover = true) { // в конструкторе
            $this->open_submenu_on_hover = $open_submenu_on_hover; // запишем параметр раскрывания субменю
        }

        function start_lvl(&$output, $depth = 0, $args = array()) { // старт вывода подменюшек
            $output .= "\n<ul class=\"dropdown-menu\">\n"; // ул с классом
        }
        function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) { // старт вывода элементов
            $item_html = ''; // то что будет добавлять
            parent::start_el($item_html, $item, $depth, $args); // вызываем стандартный метод родителя
            if ( $item->is_dropdown && $depth === 0 ) { // если элемент содержит подменю и это элемент первого уровня
                if (!$this->open_submenu_on_hover) $item_html = str_replace('<a', '<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"', $item_html); // если подменю не будет раскрывать при наведении надо добавить стандартные атрибуты бутстрапа для раскрытия по клику
                $item_html = str_replace('</a>', ' <b class="caret"></b></a>', $item_html); // ну это стрелочка вниз
            }
            $output .= $item_html; // приклеиваем теперь
        }
        function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) { // вывод элемента
            if ( $element->current ) $element->classes[] = 'active'; // если элемент активный надо добавить бутстрап класс для подсветки
            $element->is_dropdown = !empty( $children_elements[$element->ID] ); // если у элемента подменю
            if ( $element->is_dropdown ) { // если да
                if ( $depth === 0 ) { // если li содержит субменю 1 уровня
                    $element->classes[] = 'dropdown'; // то добавим этот класс
                    if ($this->open_submenu_on_hover) $element->classes[] = 'show-on-hover'; // если нужно показывать субменю по хуверу
                } elseif ( $depth === 1 ) { // если li содержит субменю 2 уровня
                    $element->classes[] = 'dropdown-submenu'; // то добавим этот класс, стандартный бутстрап не поддерживает подменю больше 2 уровня по этому эту ситуацию надо будет разрешать отдельно
                }
            }
            parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output); // вызываем стандартный метод родителя
        }
    }
}

if (!function_exists('content_class_by_sidebar')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function content_class_by_sidebar() { // функция для вывода класса в зависимости от существования виджетов в сайдбаре
        if (is_active_sidebar( 'sidebar' )) { // если есть
            echo 'col-sm-12'; // пишем класс на 80% ширины
        } else { // если нет
            echo 'col-sm-12'; // контент на всю ширину
        }
    }
}


// Чистим код
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );


remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
// если собираетесь выводить вставки из других сайтов на своем, то закомментируйте след. строку.
remove_action( 'wp_head',                'wp_oembed_add_host_js'                 );
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head','adjacent_posts_rel_link_wp_head');
remove_action('wp_head','feed_links_extra', 3);
?>