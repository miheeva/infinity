<?php
 /*
  * шаблон страниц
  */
get_header(); ?>

<main class="main-second">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post();?>
        <div class="container">
            <div class="row reverse">
                <acide class="acide col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 <?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
                    <a class="link-return" href="/"><i class="icon arrow"></i>Вернуться на главную</a>
                    <?php get_sidebar('sidebar')?>
                </acide>
                <div class="main col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12" id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
                    <div class="row">
                        <div class="col-12">
                            <h1><?php the_title(); // заголовок поста ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="text">
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;?>

</main>
<?php get_footer(); ?>
