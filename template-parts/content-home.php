<article class="main">
<div class="container">
<div class="col-lg-8 col-lg-offset-2 col-xs-12">
<section class="main__vent">
<div class="line">
<h2><?php echo get_the_title( 279 ); ?></h2>
</div>
<p><?php echo get_post( '279' , ARRAY_A) ['post_content']; ?></p>

</section><section class="main__ventprice">
<div class="line">
<h2><?php echo get_the_title( 288 ); ?></h2>
</div>
<?php echo get_post( '288' , ARRAY_A) ['post_content']; ?>
</section>

<section class="main__service">
<div class="line">
<h2>Услуги по вентиляции</h2>
</div>
<div class="service-list clearfix">
<?php
			$args = array(
				'posts_per_page' => 3,
				'orderby' => 'comment_count'
			);

			$query = new WP_Query( 'cat=19');

			// Цикл
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '<div class="service-list__item">
					<div class="service-list__image" style= " background-image: url('. get_field('Types_of') .')"></div>
					<div class="service-list__title">' . get_the_title() . '</div></div>'
				;}
			} else {
				// Постов не найдено
			}
			/* Возвращаем оригинальные данные поста. Сбрасываем $post. */
			wp_reset_postdata();
?>
</div>
</section>

<section class="main__function">
<div class="line">
<h2><?php echo get_the_title( 292 ); ?></h2>
</div>
<div class="func_box">
<div class="fun_text">

<?php echo get_post( '292' , ARRAY_A) ['post_content']; ?>

</div>
<div class="fun_img" style="background-image: url( <?php the_field('Types_of', 292); ?> );"></div>
</div>
</section>

<section class="main__typeof">
<div class="line">
<h2>ВидьI вентиляции</h2>
</div>
<div class="type-list">

<?php
			$args = array(
				'posts_per_page' => 3,
				'orderby' => 'comment_count'
			);

			$query = new WP_Query( 'cat=22');

			// Цикл
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '<div class="typeof-list__item_color"><div class="typeof-list__item" style= "background-image: url('. get_field('Types_of') .')"><div class="typeof-list__title">' . get_the_title() . '</div></div></div>'
				;}
			} else {
				// Постов не найдено
			}
			/* Возвращаем оригинальные данные поста. Сбрасываем $post. */
			wp_reset_postdata();
?>

</div>
</section>




<section class="main__prod">
<div class="line">
<h2><?php echo get_the_title( 306 ); ?></h2>
</div>
<?php echo get_post( '306' , ARRAY_A) ['post_content']; ?>
<div class="label_block">
<?php
			$args = array(
				'orderby' => 'comment_count'
			);

			$query = new WP_Query( 'cat=24');

			// Цикл
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '<div class="label_block__item" style= "background-image: url('. get_field('Types_of') .')"></div>'
				;}
			} else {
				// Постов не найдено
			}
			/* Возвращаем оригинальные данные поста. Сбрасываем $post. */
			wp_reset_postdata();
?>

</div>
</section>


<section class="main__info">
<div class="line">
<h2><?php echo get_the_title( 301 ); ?></h2>
</div>
<div class="info__list">
<?php echo get_post( '301' , ARRAY_A) ['post_content']; ?>
</div>
</section>
<section>
	<?php the_content(); ?>	
</section>
</div>
</div>
</article>

