<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>

<main class="main-second">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
        <div class="container">
            <div class="row reverse">
                <acide class="acide col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <a class="link-return" href="/"><i class="icon arrow"></i>Вернуться на главную</a>
                    <?php get_sidebar()?>
                </acide>
                <div class="main col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 <?php post_class(); ?>" id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
                    <div class="row">
                        <div class="col-12">
                            <h1><?php the_title(); // заголовок поста ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="text">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-5" alt="#" style="width: 100%; height: auto;">
                                <?php the_content(); // контент ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;?>

</main>



<?php get_footer(); // подключаем footer.php ?>
