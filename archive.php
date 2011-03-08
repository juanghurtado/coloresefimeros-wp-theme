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
	
		<div class="hfeed">
		<?php while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="article hentry">
				<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente al artículo &laquo;<?php the_title(); ?>&raquo;"><?php the_title(); ?></a></h2>

				<p class="date">
					<abbr class="published" title="<?php the_time('Y-m-d\TH:i:s\Z') ?>">
						<span class="day"><?php the_time('j') ?></span>
						<span class="month"><?php the_time('F') ?></span>
						<span class="year"><?php the_time('Y') ?></span>
					</abbr>
				</p>
				
				<div class="entry-content">
					<?php the_content('Leer el resto del artículo&hellip;'); ?>
				</div>

				<ul class="metadata">
					<li class="categories">Categorías <?php the_category(', ') ?></li>
					<li class="comments"><?php comments_popup_link('No hay comentarios', '1 comentario', '% comentarios'); ?></li>
				</ul>
			</div>
		<?php endwhile; ?>
		</div>

		<?php if ($wp_query->max_num_pages > 1) { ?>
			<hr class="hide" />
			
			<div class="pager">
				<div class="prev"><?php next_posts_link('&larr; Más antiguos') ?></div>
				<div class="next"><?php previous_posts_link('Más recientes &rarr;') ?></div>
			</div>
		<?php } ?>
	<?php else : ?>
		<h2>No encontrado</h2>
		<p>Lo siento, pero no se ha encontrado lo que andabas buscando. Si quieres puedes ir a la <a href="<?php echo get_option('home'); ?>" title="Página principal del blog Colores Efímeros">página principal</a>, quizá encuentres algo que te guste.</p>
	<?php endif; ?>

<?php get_footer(); ?>
