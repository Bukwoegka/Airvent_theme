<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'home' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

					<!-- <div class="hidden_form_order2 form_static2">
						<form class="image-link2" id="bottom_form2">
							<h3>Узнать стоимость и сроки</h3>
							<p><?php echo get_post_meta( 156, 'Text_in_big_form', true); ?></p>
							<textarea name="comment" cols="40" rows="4" placeholder="Пример: нужна вентиляция и кондиционирование для торгового центра общей площадью 25000 м2"></textarea><br>
							<input required class="form_email" type="text" name="name2" placeholder="Email, куда отправить ответ"><br>
							<input required class="form_phone" type="text" name="phone2" placeholder="Телефон для быстрой связи"><br>
							<p><input required type="checkbox"><span><?php echo get_post_meta( 156, 'acсept_in_form', true); ?></span></p>
							<button class="call-button2"><?php echo get_post_meta( 156, 'name_of_button_big_form', true); ?></button>
						</form>
					</div>-->

		</main>
	</div>

<?php
get_footer();