<?php
/**
 * @package WordPress
 * @subpackage ColoresEfimeros_Theme
 */
?>

	<?php if (!is_404()) { ?>
	<hr class="hide" />
	
	<footer role="contentinfo">
		<p id="footer">Publicando bajo <a href="http://www.wordpress.org/" title="Página principal del gestor de contenidos Wordpress">Wordpress</a>, con <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/es/" title="Página sobre la licencia Creative Commons a la que se acoje el blog Colores Efímeros: Reconocimiento-No comercial-Compartir bajo la misma licencia">Reconocimiento-No comercial-Compartir bajo la misma licencia</a></p>
	</footer>
	<?php } ?>
	
	<?php wp_footer(); ?>
	
	<?php if (!is_user_logged_in() ) { ?>
		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			try{ 
				var pageTracker = _gat._getTracker("UA-70117-3");
				pageTracker._trackPageview();
			} catch(err) {} 
		</script>
	<?php } ?>
</div>
</body>
</html>