<?php
/**
 * @package WordPress
 * @subpackage ColoresEfimeros_Theme
 */

// Cookies for "guanes"
$guanes = array(
	0 => array("text" => "soy un angelito", "file" => "guan-angel.png"),
	1 => array("text" => "soy una banana bailonga", "file" => "guan-banana.png"),
	2 => array("text" => "¡hay una serpiente en mi bota!", "file" => "guan-buddy.png"),
	3 => array("text" => "voy hasta el infinito, ¡y más allá!", "file" => "guan-buzzlightyear.png"),
	4 => array("text" => "me gusta la carne en su punto", "file" => "guan-canival.png"),
	5 => array("text" => "yo soy tu padre", "file" => "guan-darth-vader.png"),
	6 => array("text" => "estoy en pelotas", "file" => "guan-desnudo.png"),
	7 => array("text" => "estoy dormido", "file" => "guan-dormido.png"),
	8 => array("text" => "estoy de feria, ¡olé <em>miarma</em>!", "file" => "guan-flamenco.png"),
	9 => array("text" => " hoy soy Freddy Krugger", "file" => "guan-freddy-kruger.png"),
	10 => array("text" => "voy volando, volando… ¡Siempre arriba!", "file" => "guan-goku.png"),
	11 => array("text" => "lo hago todo por la patria", "file" => "guan-guardia-civil.png"),
	12 => array("text" => "hoy soy Hulk Hogan", "file" => "guan-hulk-hogan.png"),
	13 => array("text" => "estoy buscando a Bill", "file" => "guan-kill-bill.png"),
	14 => array("text" => "hoy soy Eduardo Manostijeras", "file" => "guan-manostijeras.png"),
	15 => array("text" => "estoy buscando a Shin-Chan", "file" => "guan-nevado.png"),
	16 => array("text" => "soy el autor de este blog", "file" => "guan-normal.png"),
	17 => array("text" => "hoy soy Piccolo", "file" => "guan-piccolo.png"),
	18 => array("text" => "me voy a la playa", "file" => "guan-playero.png"),
	19 => array("text" => "como voy a morir, te saludo", "file" => "guan-romano.png"),
	20 => array("text" => "pertenezco al clan Shirakawa", "file" => "guan-samurai.png"),
	21 => array("text" => "hoy soy Teen Wolf", "file" => "guan-teen-wolf.png"),
	22 => array("text" => "hoy soy torero", "file" => "guan-torero.png"),
	23 => array("text" => "estoy hecho un toro", "file" => "guan-toro.png"),
	24 => array("text" => "la fuerza conmigo está", "file" => "guan-yoda.png")
);

if ($_COOKIE['guan_date'] != date("Ymd")) {
	$i = rand(0,count($guanes) - 1);
	setcookie("guan_date", date("Ymd"));
	setcookie("guan_index", $i);
} else {
	$i = $_COOKIE['guan_index'];
}

$text = $guanes[$i]["text"];
$file = $guanes[$i]["file"];
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!--[if IE]><![endif]-->
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title><?php wp_title('–', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	
	<!-- Styles -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flaminwork/flaminwork.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.css" type="text/css" media="screen" />
	<!-- /Styles -->
	
	<!-- Scripts -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/flaminwork/jquery-1.5.1.min.js">\x3C/script>')</script>
	<script src="<?php bloginfo('template_directory'); ?>/flaminwork/flaminwork.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/main.js" type="text/javascript" charset="utf-8"></script>
	<!-- /Scripts -->
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<header>
	<h1>
		<a href="<?php echo get_option('home'); ?>" title="Página principal del blog <?php bloginfo('name'); ?>">
			<img src="<?php bloginfo('template_directory'); ?>/images/layout/logo-ce.png" alt="<?php bloginfo('name'); ?>" />
		</a>
	</h1>
	</header>
	
	<?php if (!is_404()) { ?>
	<section id="about">
		<h1 class="hide">Acerca del autor</h1>

		<p>Mi nombre es <strong>Juan G. Hurtado</strong>, y <?= $text ?></p>
		<img src="<?php bloginfo('template_directory'); ?>/images/content/<?= $file ?>" alt="Juan G. Hurtado, el autor de este blog" />
	</section>
	<?php } ?>

	<hr class="hide" />