<section class="portfolio projeto">
	<div class="container">
		<div class="menu-portfolio">
			<div class="cols">
				<div class="col">
					<div class="inline">
						<h2 for="tipo-projeto">Projeto de <?= $proj_cat[1] ?></h2>
					</div>
				</div>
				<form action="" method="get" class="col">
					<div class="inline search">
						<input type="text" placeholder="Procure por um projeto aqui!">
						<button type="submite"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</div>
		</div>
		<div class="cols">
			<div class="col">
				<ul class="descricao-projeto">
					<li>
						<strong>Descrição do projeto:</strong>
						<?php the_field('descricao_projeto'); ?>
					</li>
					<li>
						<strong>Nome do cliente:</strong>
						<p><?php the_field('cliente_projeto'); ?></p>
					</li>
					<li>
						<strong>Data do início do projeto e finalização:</strong>
						<?php 
							$data_inicio 	= new DateTime(get_field('data_inicio_projeto'));
							$data_fim 		= new DateTime(get_field('data_fim_projeto'));
							$dif_data = $data_fim->diff($data_inicio);
						 ?>
						<p>Projeto iniciado em <strong><?= $data_inicio->format('d/m/Y'); ?></strong> e finalizado em <strong><?= $data_fim->format('d/m/Y'); ?></strong>.</p>
					</li>
					<li>
						<strong>Tempo útel gasto no projeto:</strong>
						<p>Este projeto levou <strong><?= $dif_data->days; ?> dias</strong> para ser concluído, <span>contando horas não trabalhadas em finais de semanas e feriados.</span></p>
					</li>
					<li class="dif">
						<span>Informações abaixo pegas no workana &nbsp;&nbsp;<i class="fa fa-level-down"></i></span>
					</li>
					<li>
						<strong>Considerações finais do cliente:</strong>
						<?php the_field('comentario_cliente_projeto'); ?>
					</li>
					<li>
						<strong>Avaliação do cliente pelo serviço prestado:</strong>
						<p>Qualificado com <strong><?php the_field('qualificacao_projeto'); ?> estrelas</strong> em qualidade. Verificar <a href="#">clique aqui</a>.</p>
					</li>
				</ul>
			</div>
			<div class="col">
				<ul class="lista">
					<?php $imagens = get_field('galeria_projeto'); ?>
					<?php if($imagens): ?>
						<?php foreach( $imagens as $img_proj ): ?>
							<?php $item_img += 0.2 ?>
							<li class=" wow fadeIn" data-wow-duration=".8s" data-wow-delay="<?= $item_img; ?>s">
								<figure class="imghvr-blur">
									<img src="<?= $img_proj['sizes']['thumbnail']; ?>" alt="<?= $img_proj['alt']; ?>">
									<figcaption>
										<a href="<?= $img_proj['url']; ?>" data-lightbox="roadtrip" data-title="<?php the_title(); ?>">
											<h3><?= $img_proj['title']; ?></h3>
										</a>
										<div class="sobrepor"></div>
									</figcaption>
								</figure>
							</li>
						<?php endforeach; ?>
					<?php else: ?>
						<li>
							<p class="bg-danger">Não há imagens!</p>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
		<?php echo do_shortcode('[fbcomments]'); ?>
	</div>
</section>