<?php
/**
 * Страница архивов записей (archive.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
    <main class="pages">
        <?php get_template_part('/parts/pages/breadcrumbs');?>
        <div class="pageHeader">
            <div class="overlay"></div>
            <div class="pageImage" data-paroller-factor="-0.3" data-paroller-type="background"></div>
            <div class="container">
                <div class="pageInfo">
                    <div class="pageHead">
                        <h1><?php // заголовок архивов
                            if (is_day()) : printf('Архив записей за день: %s', get_the_date()); // если по дням
                            elseif (is_month()) : printf('Архив записей за месяц: %s', get_the_date('F Y')); // если по месяцам
                            elseif (is_year()) : printf('Архив записей за год: %s', get_the_date('Y')); // если по годам
                            else : 'Архив';
                            endif; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="pageBody">
            <div class="container">
                <div class="row">
                    <div class="col-9 col-xs-12">
                        <div class="row">
                            <div class="news" style="width: 100%">
                                <?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
                                    <?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
                                <?php endwhile; // конец цикла
                                else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
                                <?php pagination(); // пагинация, функция нах-ся в function.php ?>
                            </div>
                        </div>
                    </div>
                    <?php get_sidebar()?>
                </div>

            </div>
        </div>
        <div class="mt80px">
            <?php get_template_part('/parts/infoResources'); ?>
        </div>
    </main>
<?php get_footer(); // подключаем footer.php ?>