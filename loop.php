<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */ 
?>

<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-5 news" id="post-<?php the_ID(); ?>">

    <a class="news__item" href="<?php the_permalink(); ?>">
        <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="#">
        <div class="card-body">
            <h5 class="card-title"><?php the_title(); // заголовок поста ?></h5>
            <p><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date( 'j F Y','', '' ); ?>    </p>
            <p class="card-text"><?php the_excerpt()?></p>
        </div>
    </a>


</div>

