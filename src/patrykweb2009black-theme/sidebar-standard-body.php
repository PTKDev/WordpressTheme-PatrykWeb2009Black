<body>
<div id="container">
	<div id="header">
		<div id="logo">
		</div>
		<div id="social">
			<a class="fb_hover" href="#"> </a>
			<a class="tw_hover" href="#"> </a>
			<a class="rss_hover" href="#"> </a>
		</div>
	</div>
	<div id="devmenu">
		<div class="margin_menu_title">Menu</div>
		<div class="margin_menu">Home</div>
		<div class="margin_menu">Forum</div>
		<div class="margin_menu">Aggiornamenti</div><br />
		
		<div class="margin_menu">~ Test1:</div>
		<div class="margin_menu">Test2</div>
		<div class="margin_menu">Test2</div>
		<div class="margin_menu">Test2</div>
	</div>
	<div id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<div class="clear">
				 <a class="title_post" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</div>
		<?php endwhile; else: ?>
			<div class="clear">
			<?php if($_SERVER['REQUEST_URI'] == "/sitemap.html"){ ?>
				<div class="menu_arrow_sx"></div><div class="back_menu_dx"> <a href="/sitemap.html">SiteMap</a> </div>
			<?php }else{ ?>
				<div class="menu_arrow_sx"></div><div class="back_menu_dx"> <a href="#">Error 404</a> </div>
			<?php } ?>
			</div><br />
			<div class="content_txt">
				<?php if($_SERVER['REQUEST_URI'] == "/sitemap.html"){ 
					  /*
					  $filename = "./sitemap.xml";
					  $handle = fopen($filename, "r");
					  $var = fread($handle, filesize($filename));
					  preg_match_all("/(<loc>)(.*)(<\/loc>)/", $var, $matches);

					  for ($i=0; $i < count($matches[0]); $i++){
					  $array[$i] = $matches[2][$i];}
					  for( $i=0; $i < count($array); ++$i)
					  {
					  echo('<a href="');
					  echo($array[$i]);
					  echo('">'); 
					  $array[$i] = eregi_replace($_SERVER['SERVER_NAME'], "", $array[$i]);
					  $array[$i] = eregi_replace("http://", " ", $array[$i]);
					  $array[$i] = eregi_replace("cat/", " ", $array[$i]);
					  $array[$i] = eregi_replace("tag/", " ", $array[$i]);
					  $array[$i] = eregi_replace("/", " ", $array[$i]);
					  $array[$i] = eregi_replace("_", " ", $array[$i]);
					  $array[$i] = eregi_replace("-", " ", $array[$i]);
					  echo($array[$i]);
					  echo('</a><br /><br />');
					  } */
					}else{ ?>
						<br />
						Questa Pagina Non Esiste o E' Stata Rimossa...<br />
		<?php } endif; ?>	
	</div>
	<div class="clear"></div>
</div>


<div id="footer">
	<div id="footer-width">
		PatrykWeb 2009-2011 ~ Sitemap (xml)
	<?php wp_footer(); ?>
	</div>
</div>
</body>
</html>
