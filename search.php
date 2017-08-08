



<?php get_header(); ?>

<div class="container">

	<div class="search__block">
		<h1 style="text-align: center; margin-top: 30px">Поиск по: "<?php echo $_GET['s'];?>"</h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<a href="<?php the_permalink();?>" style="border: 1px solid grey; display: inline-block;"><?php the_title(); ?></a>
		<?php the_content(''); ?>
		<?php endwhile; else: ?>
		<p>Поиск не дал результатов.</p>
		<?php endif;?>
	</div>
</div>



<?php get_footer(); ?>