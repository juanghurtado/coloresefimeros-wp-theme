<article id="post-<?php the_ID(); ?>" class="article hentry">
	<header>
		<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente al artículo &laquo;<?php the_title(); ?>&raquo;"><?php the_title(); ?></a></h1>
	</header>

	<time class="date published" datetime="<?php the_time('Y-m-d\TH:i:s\Z') ?>">
		<span class="value-title" title="<?php the_time('Y-m-d\TH:i:s\Z') ?>"></span>
		
		<span class="day"><?php the_time('j') ?></span>
		<span class="month"><?php the_time('F') ?></span>
		<span class="year"><?php the_time('Y') ?></span>
	</time>
	
	<div class="entry-content">
		<?php the_content('Leer el resto del artículo&hellip;'); ?>
	</div>
	
	<footer>
		<ul class="metadata">
			<li class="categories">Categorías <?php the_category(', ') ?></li>
			<li class="comments"><?php comments_popup_link('No hay comentarios', '1 comentario', '% comentarios'); ?></li>
		</ul>
	</footer>
</article>