<?php get_header(); // подключаем header.php ?>   

	<div class="middle">
	<?php
		// циклы вывода записей
		// если записи найдены
		if ( have_posts() ){
			while ( have_posts() ){
				the_post();

				echo '<h4><a href="'. get_permalink() .'">'. get_the_title() .'</a></h4>';

				echo get_the_excerpt();
			}
		}
		// елси записей не найдено
		else{
			echo ' <p>Записей нет...</p>';
		}
		?>
	</div>

    <?php get_footer(); // подключаем footer.php ?>    

	<?php wp_footer(); ?>
</body>

</html>