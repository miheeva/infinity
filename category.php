<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>

    <main class="main-second">

            <div class="container-fluid">
                <div class="row reverse">
                    <acide class="acide col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 <?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
                        <a class="link-return" href="/"><i class="icon arrow"></i>Вернуться на главную</a>
                        <?php get_sidebar('sidebar')?>
                    </acide>
                    <div class="main col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12" id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
                        <div class="row">
                            <div class="col-12">
                                <h1><?php single_cat_title(); // название категории ?></h1>
                            </div>
                        </div>
                        <div class="row">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
                                <?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
                            <?php endwhile; // конец цикла
                            else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
                            <?php pagination(); // пагинация, функция нах-ся в function.php ?>

                        </div>
                </div>
            </div>


    </main>

<?php get_footer(); // подключаем footer.php ?>