<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<?php if (have_posts()) : ?>
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		
		<?php /* If this is a category archive */ if (is_category()) { ?>
			<p class="message">Artículos guardados en la categoría <strong><?php single_cat_title(); ?></strong></p>
		<?php } ?>
	
		<section class="hfeed" role="main">
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('post'); ?>
		<?php endwhile; ?>
		</section>

		<?php if ($wp_query->max_num_pages > 1) { ?>
			<hr class="hide" />
			
			<section class="pager">
				<div class="prev"><?php next_posts_link('&larr; Más antiguos') ?></div>
				<div class="next"><?php previous_posts_link('Más recientes &rarr;') ?></div>
			</section>
		<?php } ?>
	<?php else : ?>
		<section id="error-404">
			<h1>No encontrado</h1>
			<p>Lo siento, pero no se ha encontrado lo que andabas buscando. Si quieres puedes ir a la <a href="<?php echo get_option('home'); ?>" title="Página principal del blog Colores Efímeros">página principal</a>, quizá encuentres algo que te guste.</p>
		</section>
	<?php endif; ?>

<?php get_footer(); ?>
