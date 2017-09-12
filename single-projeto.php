<?php
/*
	template name: Projeto
 */
//'numberposts'=>1
	$url = get_permalink();
	$projid = url_to_postid($url);
	$args = array('post_type'=>'projeto', 'post_status' => 'publish', 'ID' => $projid);
	$projeto = get_posts($args);
	if( $projeto ):
		$estilo = 'portfolio';
		include("header.php");
		include("includes/pages/projeto.php");
		include("footer.php");
	endif; 
	wp_reset_postdata();