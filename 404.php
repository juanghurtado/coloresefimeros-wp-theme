<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<section id="error-404">
	<img class="left" src="<?php bloginfo('template_directory'); ?>/images/content/banana.gif" alt="Juan G. Hurtado, autor de este blog, bailando disfrazado de plátano" />
	
	<h1>No encontrado</h1>
	<p>Lo siento, pero no se ha encontrado lo que andabas buscando. Si quieres puedes ir a la <a href="<?php echo get_option('home'); ?>" title="Página principal del blog Colores Efímeros">página principal</a>, quizá encuentres algo que te guste.</p>
	
	<p>Aunque a lo mejor prefieres quedarte aquí viéndome bailar disfrazado de plátano… En tus manos dejo la decisión…</p>
</section>

<?php get_footer(); ?>