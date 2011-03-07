<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<div class="group">
	<div class="col width-50">
		<img src="<?php bloginfo('template_directory'); ?>/images/content/banana.gif" alt="Juan G. Hurtado, autor de este blog, bailando disfrazado de plátano" />
	</div>
	
	<div class="col width-50">
		<h2>No encontrado</h2>
		<p>Lo siento, pero no se ha encontrado lo que andabas buscando. Si quieres puedes ir a la <a href="<?php echo get_option('home'); ?>" title="Página principal del blog Colores Efímeros">página principal</a>, quizá encuentres algo que te guste.</p>
		
		<p>Aunque a lo mejor prefieres quedarte aquí viéndome bailar disfrazado de plátano… En tus manos dejo la decisión…</p>
	</div>
</div>

<?php get_footer(); ?>