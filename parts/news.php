<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-header">Новости</h2>
            </div>
        </div>
        <div class="row">
            <?php
            $horizontalNews = array(
                'posts_per_page' => 3,
            );
            $query = new WP_Query( $horizontalNews );

            if( $query->have_posts() ){
                while( $query->have_posts() ){ $query->the_post();
                    ?>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-5">

                        <a class="news__item" href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="#">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); // заголовок поста ?></h5>
                                <p class="card-text"><?php the_excerpt()?></p>
                            </div>
                        </a>

                    </div>
                    <?php
                }
                wp_reset_postdata(); // сбрасываем переменную $post
            }
            else echo 'Новостей пока нет.';
            ?>
        </div>
        <div class="row">
            <a class="news__link" href="/category/news/">больше новостей</a>
        </div>
    </div>
</section>
