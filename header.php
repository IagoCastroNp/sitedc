<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title><?= bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/css/<?= $estilo; ?>.css" />
	<link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/css/geral.css" />
	<link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/css/animate.css">
	<link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/css/plugins.css" />
</head>
<body id="start">
	<!-- container modal -->
	<!-- Modal para escolhe da forma de pagamento -->
	<div class="modal fade" id="modoPagamento" tabindex="-1" role="dialog" aria-labelledby="modoPagamento" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Painel de opções de pagamento</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">Fechar</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- pgt -->
					<form action="#" id="etapa-pagamento">
						<div id="bar">
							<div class="progress-bar"><div class="current-bar"></div><div class="done-bar"></div></div>
						</div>
						<div class="content">
							<span class="icon-titulo"><i class="fa fa-pencil-square-o"></i></span>
							<section>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, qui ut! Deserunt laboriosam ipsam ullam, repellat quae dolore accusantium, doloribus, provident voluptas eaque minus et quo rem aliquam ipsa officia!Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br ><br>Quos, qui ut! Deserunt laboriosam ipsam ullam, repellat quae dolore accusantium, doloribus, provident voluptas eaque minus et quo rem aliquam ipsa officia!</p>
								<div class="regrasPagto">
									<label for="confirmRules">
										<input id="confirmRules" name="confirmRules" type="checkbox" class="required">
										<span>Eu li, e concordo!</span>
									</label>
								</div>
							</section>
							<span><i class="fa fa-credit-card"></i></span>
							<section class="modoPagamento">
								<ul>
									<li>
										<label for="modoPagseguro">
											<input id="modoPagseguro" type="radio" name="modoPagto" value="pagseguro" class="required modoPagto" checked>
											<img src="<?= bloginfo('template_url'); ?>/images/modal/pagseguro.png" alt="Icone de pagamento para pagseguro">
											<span>desconto -5,7% (boleto)</span>
										</label>
									</li>
									<li>
										<label for="modoBB">
											<input id="modoBB" type="radio" name="modoPagto" value="bancodobrasil" class="required modoPagto">
											<img src="<?= bloginfo('template_url'); ?>/images/modal/bancodobrasil.png" alt="Icone de pagamento para Banco do Brasil">
											<span>desconto -10%</span>
										</label>
									</li>
									<li>
										<label for="modoWorkana">
											<input id="modoWorkana" type="radio" name="modoPagto" value="workana" class="required modoPagto">
											<img src="<?= bloginfo('template_url'); ?>/images/modal/Workana.png" alt="Icone de pagamento para workana">
											<span>Aumento de +/- 15%</span>
										</label>
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam cupiditate, suscipit quisquam. Amet ipsa, iure ad eligendi veritatis maiores, obcaecati!</p>
							</section>
							<span><i class="fa fa-check"></i></span>
							<section class="modoConfirmacao">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis amet aliquam reprehenderit cumque error atque, repellendus id nulla, pariatur vero obcaecati cum accusamus distinctio reiciendis aspernatur deserunt eius. Fugiat, ipsum.</p>
								<ul>
									<li class="imgConfirm">
										<ul>
											<li><img src="<?= bloginfo('template_url'); ?>/images/modal/pagseguro.png" alt="Pagamento confirmado para pagseguro" class="confirmModo"></li>
											<li><span class="confirmModo">desconto -5,7% (boleto)</span></li>
										</ul>
									</li>
									<li>
										<ul class="formConfirm">
											<li><strong>Forma de pagamento:</strong> <span data-modo="tt">Pagseguro</span></li>
											<li><strong>Bônus:</strong> <span data-modo="descvalor">5,7% com pagamento pelo boleto</span></li>
											<li><strong>Valor do serviço:</strong> <input id="price" type="text" name="price" disabled></li>
											<li class="confirmModo"><strong>Nome:</strong> <input type="text" name="clienteName" class="required"></li>
											<li class="confirmModo"><strong>Email:</strong> <input type="email" name="clienteEmail" class="required"></li>
											<li class="confirmModo"><strong>Tel:</strong><input type="text" name="clienteTel" class="required"></li>
										</ul>
									</li>
									<li>
										<ul class="cadeado">
											<li><i class="fa fa-lock"></i></li>
										</ul>
									</li>
								</ul>
							</section>
							<span><i class="fa fa-thumbs-o-up"></i></span>
							<section class="modoEnvio">
								<i class="fa fa-send"></i>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio fugit molestiae cumque asperiores tempora quibusdam at labore nobis, perspiciatis sunt repellat iusto illum est magnam numquam qui, facere quasi, odit, id consequatur dolores adipisci cupiditate.</p>
								<p id="textajax"></p>
							</section>
						</div>
					</form>
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
	
	<!-- menu responsivo page portfolio & projeto -->
	<?php include("includes/complements/menu-responsivo.php"); ?>

	<header>
		<div class="container">
			<!-- scrollTop -->
			<a href="#start" class="scrollSuave scrollTop">
				<i class="fa fa-arrow-circle-up"></i>
			</a>

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
				<?php else: $chamada; endif; ?>
			</div>


		</div>
	</header>
	<main>