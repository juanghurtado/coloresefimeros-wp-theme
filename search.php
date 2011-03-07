<?php
/**
 * @package WordPress
 * @subpackage ColoresEfimeros_Theme
 */

get_header(); ?>

	<?php if (have_posts()) : ?>
		
		<h2>Resultados de la búsqueda para el término &laquo;<?php the_search_query(); ?>&raquo;</h2>
		
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class("articulo") ?> id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente al artículo &laquo;<?php the_title(); ?>&raquo;"><?php the_title(); ?></a></h3>

				<p>Escrito el <?php the_time('j \d\e F \d\e Y') ?></p>

				<?php the_excerpt(); ?>

				<ul>
					<li>Categorías <?php the_category(', ') ?></li>
					<li><?php comments_popup_link('No hay comentarios', '1 comentario', '% comentarios'); ?></li>
				</ul>
			</div>

		<?php endwhile; ?>

		<?php if ((next_posts_link() != "") || (previous_posts_link() != "")) { ?>
			<hr class="separador" />

			<p>Navegación entre artículos:</p>
			<ul class="paginador">
				<?php if (next_posts_link() != "") { ?>
				<li>
					<?php next_posts_link('Anteriores') ?>
				</li>
				<?php } ?>
				<?php if (previous_posts_link() != "") { ?>
				<li>
					<?php previous_posts_link('Recientes') ?>
				</li>
				<?php } ?>
			</ul>
		<?php } ?>

	<?php else : ?>

		<h2>No encontrado</h2>
		<p>Lo siento, pero no se ha encontrado lo que andabas buscando. Si quieres puedes ir a la <a href="<?php echo get_option('home'); ?>" title="Página principal del blog Colores Efímeros">página principal</a>, quizá encuentres algo que te guste.</p>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
