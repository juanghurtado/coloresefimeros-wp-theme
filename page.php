<?php
/**
 * @package WordPress
 * @subpackage ColoresEfimeros_Theme
 */

get_header();
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" class="article">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente al artículo &laquo;<?php the_title(); ?>&raquo;"><?php the_title(); ?></a></h2>
			
			<?php the_content('Leer el resto del artículo&hellip;'); ?>
		</div>
	<?php endwhile; else: ?>

		<h2>No encontrado</h2>
		<p>Lo siento, pero no se ha encontrado lo que andabas buscando. Si quieres puedes ir a la <a href="<?php echo get_option('home'); ?>" title="Página principal del blog Colores Efímeros">página principal</a>, quizá encuentres algo que te guste.</p>

	<?php endif; ?>

<?php get_footer(); ?>
