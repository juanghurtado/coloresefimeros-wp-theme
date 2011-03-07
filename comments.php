<?php
/**
 * @package WordPress
 * @subpackage ColoresEfimeros_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p>This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<hr class="hide" />

<div id="comments-wrapper">

<?php if ( have_comments() ) : ?>
	<h3><?php comments_number('No se han escrito comentarios aún', 'Se ha escrito un sólo comentario', 'Se han escrito % comentarios' );?></h3>

	<ol id="comments">
		<?php foreach ($comments as $comment) : ?>
			<li class="comment <?= (1 == $comment->user_id)?'self-comment':''  ?>">
				<?php echo get_avatar( $comment, 50 ); ?>
				<div class="comment-content">
					<?php comment_text() ?>
				</div>
				
				<p class="comment-metadata">Escrito por <strong><?php comment_author_link() ?></strong> el <?php comment_date('j \d\e F \d\e Y') ?> a las <?php comment_time('H:i'); ?></p>
			</li>
		<?php endforeach; /* end for each comment */ ?>
	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( !comments_open() ) : ?>
		<!-- If comments are closed. -->
		<p>Los comentarios están cerrados para este artículo.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<h3><?php comment_form_title( 'Deja un comentario', 'Escribe un comentario para el artículo &laquo;%s&raquo;' ); ?></h3>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
	<p>Debes estar <a href="<?php echo wp_login_url( get_permalink() ); ?>">logado</a> para escribir un comentario.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment-form">
	<fieldset>
		<legend>Datos del comentario</legend>

		<?php if ( is_user_logged_in() ) : ?>
			<p>Autenticado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Salir">Salir &raquo;</a></p>
		<?php else : ?>

			<p>
				<label for="author">
					Nombre <?php if ($req) echo "<span class=\"required\">(*)</span>"; ?><br />
					<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
				</label>
			</p>
	
			<p>
				<label for="email">
					Dirección de correo electrónico <?php if ($req) echo "<span class=\"required\">(*)</span>"; ?><br />
					<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
				</label>
			</p>
	
			<p>
				<label for="url">
					Sitio Web <?php if ($req) echo "<span class=\"required\">(*)</span>"; ?><br />
					<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
				</label>
			</p>

		<?php endif; ?>

		<p>
			<label for="comment">
				Comentario<br />
				<textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea>
			</label>
		</p>

		<p>
			<input type="submit" id="submit" name="submit" value="Enviar" />
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
		</p>
		<?php do_action('comment_form', $post->ID); ?>
	</fieldset>
</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>

</div>