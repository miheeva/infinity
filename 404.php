<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // Подключаем header.php ?>
<main class="blueMain">
	<div class="container">
		<div class="row">
			<div class="info404">
				<h1>Ой, это 404!</h1>
				<p>Такой страницы не существует</p>
			</div>
            <div class="search404">
                <div class="widgets">
                    <p>Воспользуйтесь поиском: </p>
                    <?php
                        if (!dynamic_sidebar("not-found-page") ):
                    ?>
                            <p>Не расстраивайтесь</p>

                    <?php
                        endif;
                    ?>

                </div>

                <p>Или вернитесь на <a href="/">Главную страницу</a></p>
            </div>
		</div>
	</div>
</main>

<?php get_footer();?>