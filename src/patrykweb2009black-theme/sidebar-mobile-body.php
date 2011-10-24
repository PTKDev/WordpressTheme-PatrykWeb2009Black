<body>
<div id="container">
	<div id="logo"></div>

	<div class="menu">
		<b>
			<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">HOME</a> | 
			<a href="http://community.ptkweb.it/">FORUM</a> | 
			<a href="http://feeds.feedburner.com/ptkweb">RSS</a> | 
			<a href="http://twitter.com/ptkweb">TWITTER</a>
		</b>
	</div>
	<div id="body">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="post">
			<b><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></b><br />
			Scritto Il: <?php the_time('j M Y'); ?><br /><br />
			<?php the_content(); ?>
			Scritto Da: <a href="<?php the_author_url(); ?>"><?php the_author_nickname(); ?></a><br />
			Categorie: <?php the_category(', ') ?><br />
			Tags: <?php the_tags("",", "," "); ?><br />
		</div>
		<?php comments_template(); ?>
	<?php endwhile; else:  ?>
		<div class="post">
		<b>ERRORE 404</b><br />
			La pagina che cercavi non esiste... <br />
			<?php echo 'http://'.$_SERVER['SERVER_NAME'].'' ?><? echo $_SERVER['REQUEST_URI']; ?>
		</div>
	<?php endif; ?>
	</div>

	<?php if(!is_single()) { ?>
		<div class="align-select">
			<?php posts_nav_link(' | ','&laquo; Pagina Prec.','Pagina Succ. &raquo;'); ?> 
		</div>
	<?php }?>

	<div id="footer">
	<br /><br />
	PatrykWeb Mobile 0.1<br />
	Un idea di <a href="http://www.ptkdev.it">Patryk Rzucidlo</a>
	</div>
	<?php wp_footer(); ?>
</div>
</body>
</html>
