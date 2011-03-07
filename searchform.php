<h2>Buscar</h2>
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<fieldset>
		<legend>Datos de búsqueda</legend>
		<label for="s">Término<br />
			<input class="cajaTexto" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		</label>
		<input class="boton" type="submit" id="searchsubmit" value="Buscar" />
	</fieldset>
</form>