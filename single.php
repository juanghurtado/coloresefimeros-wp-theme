<?php
/**
 * @package WordPress
 * @subpackage ColoresEfimeros_Theme
 */

get_header();

?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part('post'); ?>

		<?php comments_template(); ?>

	<?php endwhile; else: ?>
		<section id="error-404">
			<h1>No encontrado</h1>
			<p>Lo siento, pero no se ha encontrado lo que andabas buscando. Si quieres puedes ir a la <a href="<?php echo get_option('home'); ?>" title="Página principal del blog Colores Efímeros">página principal</a>, quizá encuentres algo que te guste.</p>
		</section>

	<?php endif; ?>

<?php get_footer(); ?>
