<section class="slider">
    <div class="container-fluid">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php
                $loop1 = new WP_Query( array(
                    'post_type' => array('services_tax', 'slider'),
                    'posts_per_page' => 1)); ?>
                <?php if ($loop1->have_posts() ): ?>
                <?php while ($loop1->have_posts() ) : $loop1->the_post(); ?>
                <div class="carousel-item active">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="d-block w-100" alt="...">
                    <a href="<?php echo get_post_field('otherLink');?>" class="carousel-caption d-none d-md-block">
                        <h5><?php the_title() ?></h5>
                        <p><?php the_excerpt()?></p>
                    </a>
                </div>
                    <?php endwhile; ?>
                <?php endif ?>

                <?php
                $loop2 = new WP_Query( array(
                    'post_type' => array('services_tax', 'slider'),
                    'post_per_page' => -1,
                    'offset' => 1)); ?>
                <?php if ($loop2->have_posts() ): ?>
                    <?php while ($loop2->have_posts() ) : $loop2->the_post(); ?>

                        <div class="carousel-item">
                            <img src="<?php the_post_thumbnail_url(); ?>" class="d-block w-100" alt="...">
                            <a href="<?php echo get_post_field('otherLink');?>" class="carousel-caption d-none d-md-block">
                                <h5><?php the_title() ?></h5>
                                <p><?php the_content();?></p>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif ?>
            </div>


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
