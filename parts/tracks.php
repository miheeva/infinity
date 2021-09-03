<section class="tracks">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-header">Треки</h2>
            </div>
        </div>
        <div class="row">
            <?php
            $loop3 = new WP_Query( array(
                'post_type' => array('services_tax', 'tracks'),
                'posts_per_page' => 8)); ?>
            <?php if ($loop3->have_posts() ): ?>
                <?php while ($loop3->have_posts() ) : $loop3->the_post(); ?>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                        <a href="<?php the_permalink(); ?>" class="tracks__item">
                            <img class="tracks__item-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
                            <p class="tracks__item-name"><?php the_title() ?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif ?>
            <div class="mobile-none col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-end align-items-end">
                <a class="">
                    <img class="tracks__item-img" src="<?php echo get_template_directory_uri() ?>/assets/img/pattern.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>