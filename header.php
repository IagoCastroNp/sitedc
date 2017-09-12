<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title><?= bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/css/<?= $estilo; ?>.css" />
	<link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/css/geral.css" />
	<link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/css/lightbox.min.css">
	<link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/css/animate.css">
	<link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/css/plugins.css" />
</head>
<body id="start" <?php body_class(); ?>>
	<!-- container modal -->
	<?php include("includes/utilities/modal.php"); ?>
	
	<!-- menu responsivo page portfolio & projeto -->
	<?php include("includes/complements/menu-responsivo.php"); ?>
	
	<?php $url = get_permalink(); $pagina = explode('/', $url);	$estilo_proj = (!in_array('projeto', $pagina) ? false : true); ?>
	<style>
		<?php if(get_the_post_thumbnail() && $estilo_proj != true): ?>
			header{
				background-image: url('<?php the_post_thumbnail_url('small'); ?>');
			}
		<?php else: ?>
			header{
				background-image: url('<?php bloginfo('template_url'); ?>/images/dc-studios-bg.png');
			}
		<?php endif; ?>
	</style>
	<header>
		<div class="container">
			<!-- scrollTop -->
			<div class="scrollSuave scrollTop">
				<a href="#start">
					<i class="fa fa-arrow-circle-up"></i>
				</a>
			</div>

			<!-- logo do topo dc studios -->
			<div class="logo wow slideInLeft" data-wow-duration=".7s" data-wow-delay=".1s">
				<a href="<?= bloginfo('url'); ?>">
					<img src="<?= bloginfo('template_url'); ?>/images/logo-topo.png" alt="Logo Topo DC Studios" />
				</a>
			</div>

			<div class="links-topo">
				<!-- menu desktop portfolio & projeto -->
				<?php include("includes/complements/menu.php"); ?>

				<!-- botão toggle ativar menu responsivo -->
				<a class="toggle" href="javascript:;">
					<i class="fa fa-bars"></i>
				</a>

				<!-- redes sociais topo -->
				<ul class="social wow slideInRight" data-wow-duration=".5s" data-wow-delay=".2s">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>

			<div class="slider wow pulse" data-wow-duration=".4s" data-wow-delay=".3s">
				<?php if($estilo == 'home'): ?>
					<img src="<?= bloginfo('template_url');?>/images/slider.png" alt="Slider" />
				<?php elseif($estilo_proj == true): ?>
					<?php $proj_cat = get_cat_name(get_field('tipo_projeto')); $proj_cat = explode('-', $proj_cat); ?>
					<h1><?php the_title(); ?> - <?= $proj_cat[1] ?></h1>

				<?php else: ?>
					<h1><?php the_title(); ?></h1>
				<?php endif; ?>
			</div>


		</div>
	</header>
	<main>