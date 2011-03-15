<?php
/**
 * @package WordPress
 * @subpackage ColoresEfimeros_Theme
 */

get_header(); ?>

	<?php if (have_posts()) : ?>
		
		<section class="hfeed">
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
