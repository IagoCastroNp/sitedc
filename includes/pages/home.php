
<!-- sessão identidade visual -->
<section id="identidade">
	<div class="container">
		<h1 class="titulop wow fadeIn" data-wow-duration=".8s" data-wow-delay=".5s">Identidade Visual</h1>

		<!-- video identidade visual -->
		<div class="video-identidade wow rubberBand" data-wow-duration=".8s" data-wow-delay=".5s">
			<img src="<?= bloginfo('template_url'); ?>/images/video-identidade.png" alt="Vídeo Serviços Identidade Visual">
		</div>
		<!-- texto descrição idetidade visual -->
		<p class="descricao-identidade wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis voluptate itaque pariatur laudantium dolorum, perferendis et temporibus architecto maxime rerum, id accusamus cum autem quibusdam animi nesciunt, eligendi ipsum nostrum?
		</p>
		<!-- preços identidade visual -->
		<div class="tabela-identidade-preco">
			<?php
			$args_planos = array (
				'post_type' => 'planos',
				'posts_per_page' => '4',
				'meta_key' => 'plano_4_iv',
				'orderby'	=> 'meta_value_num',
				'order'		=> 'ASC'
				);
			// Custom query.
			$planos = new WP_Query($args_planos);
			// Check that we have query results.
			if($planos->have_posts()){ 
				echo '<ul>';
				while($planos->have_posts()): $planos->the_post();
				if(have_rows('plano_4_iv')){
					while(have_rows('plano_4_iv')) : the_row(); 
					$row += 1;
					?>
					<li>
						<ul class="plano-row<?= $row;?> wow rubberBand" data-wow-duration="1s" data-wow-delay=".<?= $row;?>s">
							<li><strong><?php the_sub_field('titulo_plano'); ?></strong></li>
							<?php 
							if(have_rows('conteudo_plano')){ 
								while(have_rows('conteudo_plano')) : the_row(); 
								?>
								<li><?php the_sub_field('item_plano'); ?>&nbsp;&nbsp;<i class="fa <?php the_sub_field('icone_plano'); ?>"></i></li>
								<?php 
								endwhile;
							}else{
								echo '<p class="bg-danger">Não tem Itens na lista!</p>';
							}
							if(get_sub_field('parc_plano') == 'Sim'){
								$num_parc 		= get_sub_field('qtd_plano');
								$resultado_parc = (get_sub_field('price_plano') / $num_parc);
								$price_parc 	= number_format($resultado_parc, 2, ',', '.');
								?>
								<li>Apenas 3x de</li>
								<li class="dif">R$ <strong class="preco"><?= $price_parc; ?></strong></li>
								<li class="dif">ou</li>
								<?php
							}
							if(get_sub_field('plano_sem_preco') == 'Não'){
								?>
								<li>R$ <?php the_sub_field('price_plano'); ?> à vista</li>
								<?php
							}
							?>
							<li>
								<button type="button" class="botao full btnPagto" data-toggle="modal" data-target="#modoPagamento" value="<?php the_sub_field('price_plano'); ?>"><?php the_sub_field('botao_plano'); ?></button>
							</li>
						</ul>
					</li>
					<?php
					endwhile;
				}else{
					echo '<p class="bg-danger">O plano especifico não foi cadastrado ainda!</p>';
				}
				endwhile;
				echo '</ul>';
			} else{
				echo '<p class="bg-danger">Não existe planos em sua tabela!</p>';
			}
			wp_reset_postdata();
			?>
		</div>
		<!-- tabela informação planos identidade visual -->
		<table class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">
			<thead>
				<tr>
					<th>Pacotes prontos &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></th>
					<th>Básico</th>
					<th>Profissional</th>
					<th>Business</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Revisões ilimitadas</td>
					<td><i class="fa fa-check-circle verde"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
				</tr>
				<tr class="dif">
					<td>Entrega em 7 dias úteis</td>
					<td><i class="fa fa-check-circle verde"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
					<td><i class="fa fa-times-circle vermelho"></i></td>
				</tr>
				<tr>
					<td>Logo</td>
					<td><i class="fa fa-check-circle verde"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
				</tr>
				<tr class="dif">
					<td>Capa e perfil facebook</td>
					<td><i class="fa fa-check-circle verde"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
				</tr>
				<tr>
					<td>Capa e perfil youtube</td>
					<td><i class="fa fa-times-circle vermelho"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
				</tr>
				<tr class="dif">
					<td>Cartão de visita</td>
					<td><i class="fa fa-times-circle vermelho"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
				</tr>
				<tr>
					<td>Papel timbrado</td>
					<td><i class="fa fa-times-circle vermelho"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
				</tr>
				<tr class="dif">
					<td>Pasta bolsa</td>
					<td><i class="fa fa-times-circle vermelho"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
				</tr>
				<tr>
					<td>Mascote 2D (1 posição)</td>
					<td><i class="fa fa-times-circle vermelho"></i></td>
					<td><i class="fa fa-times-circle vermelho"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
				</tr>
				<tr class="dif">
					<td>Crachá</td>
					<td><i class="fa fa-times-circle vermelho"></i></td>
					<td><i class="fa fa-times-circle vermelho"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
				</tr>
				<tr>
					<td>Artes adicionais</td>
					<td><i class="fa fa-times-circle vermelho"></i></td>
					<td><i class="fa fa-times-circle vermelho"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
				</tr>
				<tr class="dif">
					<td>Animação de 5s da logo</td>
					<td><i class="fa fa-times-circle vermelho"></i></td>
					<td><i class="fa fa-times-circle vermelho"></i></td>
					<td><i class="fa fa-check-circle verde"></i></td>
				</tr>
			</tbody>
			<tfoot>
				<tr><td colspan="5">As cores do fundo são referência dos planos.</td></tr>
			</tfoot>
		</table>
	</div>
</section>
<!-- sessão produção de vídeos -->
<section id="producaov">
	<div class="container">
		<h1 class="titulop wow tada" data-wow-duration=".8s" data-wow-delay=".5s">Produção de Vídeos</h1>

		<!-- video produção de vídeos -->
		<div class="video-producaov wow rubberBand" data-wow-duration=".8s" data-wow-delay=".5s">
			<img src="<?= bloginfo('template_url'); ?>/images/video-producao.png" alt="Vídeo Serviços Produção de Vídeos">
		</div>
		<!-- descrição produção de vídeos -->
		<p class="descricao-producaov wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis voluptate itaque pariatur laudantium dolorum, perferendis et temporibus architecto maxime rerum, id accusamus cum autem quibusdam animi nesciunt, eligendi ipsum nostrum?
		</p>
		<!-- preços produção de vídeos -->
		<div class="tabela-producaov-preco">
			<?php
			$args_planos = array (
				'post_type' => 'planos',
				'posts_per_page' => '4',
				'meta_key' => 'plano_4_pv',
				'orderby'	=> 'meta_value_num',
				'order'		=> 'ASC'
				);
			// Custom query.
			$planos = new WP_Query($args_planos);
			// Check that we have query results.
			if($planos->have_posts()){ 
				echo '<ul>';
				while($planos->have_posts()): $planos->the_post();
				if(have_rows('plano_4_pv')){
					$row = 0;
					while(have_rows('plano_4_pv')) : the_row();
					$row += 1;
					?>
					<li>
						<ul class="plano-row<?= $row;?> wow rubberBand" data-wow-duration="1s" data-wow-delay=".<?= $row;?>s">
							<li><strong><?php the_sub_field('titulo_plano'); ?></strong></li>
							<?php 
							if(have_rows('conteudo_plano')){ 
								while(have_rows('conteudo_plano')) : the_row(); 
								?>
								<li><?php the_sub_field('item_plano'); ?>&nbsp;&nbsp;<i class="fa <?php the_sub_field('icone_plano'); ?>"></i></li>
								<?php 
								endwhile;
							}else{
								echo '<p class="bg-danger">Não tem Itens na lista!</p>';
							}
							if(get_sub_field('parc_plano') == 'Sim'){
								$num_parc 		= get_sub_field('qtd_plano');
								$resultado_parc = (get_sub_field('price_plano') / $num_parc);
								$price_parc 	= number_format($resultado_parc, 2, ',', '.');
								?>
								<li>Apenas 3x de</li>
								<li class="dif">R$ <strong class="preco"><?= $price_parc; ?></strong></li>
								<li class="dif">ou</li>
								<?php
							}
							if(get_sub_field('plano_sem_preco') == 'Não'){
								?>
								<li>R$ <?php the_sub_field('price_plano'); ?> à vista</li>
								<?php
							}
							?>
							<li>
								<button type="button" class="botao full btnPagto" data-toggle="modal" data-target="#modoPagamento" value="<?php the_sub_field('price_plano'); ?>"><?php the_sub_field('botao_plano'); ?></button>
							</li>
						</ul>
					</li>
					<?php
					endwhile;
				}else{
					echo '<p class="bg-danger">O plano especifico não foi cadastrado ainda!</p>';
				}
				endwhile;
				echo '</ul>';
			} else{
				echo '<p class="bg-danger">Não existe planos em sua tabela!</p>';
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
<!-- sessão ilustração 2d -->
<section id="ilustracao">
	<div class="container">
		<h1 class="titulop wow tada" data-wow-duration=".8s" data-wow-delay=".5s">Ilustração 2D</h1>

		<!-- ilustração criando mascote -->
		<div class="criar-mascote">
			<figure class=" wow fadeIn" data-wow-duration=".8s" data-wow-delay=".5s">
				<img src="<?= bloginfo('template_url'); ?>/images/ilustracao/chars-draw.png" alt="Criar Mascote">
			</figure>
			<ul class=" wow pulse" data-wow-duration=".8s" data-wow-delay=".5s">
				<li>Criamos primeiro o rascunho</li>
				<li>Após sua aprovação iremos vetorizar, colorir e detalhar!</li>
				<li>Dessa forma, garantimos que a ideia trabalhada em seu desenho chegue a uma conclusão mais rápida por etapas!</li>
				<li>
					<button type="button" class="botao acafrao full btnPagto" data-toggle="modal" data-target="#modoPagamento" value="94,30">Quero criar um mascote</button>
				</li>
				<li>por R$ <strong>94,30</strong> a vista ou 3x de R$ <strong>33,33</strong></li>
			</ul>
		</div>
		<hr />
		<!-- ilustração descrição sobre cores e vetores -->
		<p class="descricao-cor-vetorizar wow fadeIn" data-wow-duration=".8s" data-wow-delay=".5s">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis voluptate itaque pariatur laudantium dolorum, perferendis et temporibus architecto maxime rerum.
		</p>
		<!-- ilustração editando o mascote -->
		<div class="editar-mascote">
			<figure class=" wow fadeIn" data-wow-duration=".8s" data-wow-delay=".5s">
				<img src="<?= bloginfo('template_url'); ?>/images/ilustracao/chars-cor-vetor.png" alt="Cores e Vetores">
			</figure>
			<!-- valores de edições do mascote -->
			<ul>
				<li>
					<ul class="preco-cor-vetor wow rubberBand" data-wow-duration=".8s" data-wow-delay=".2s">
						<li>Editar cores com mascote em vetor. Você precisa nos enviar em (cdr, ai).</li>
						<li>R$ <strong>30,00</strong></li>
						<li>
							<button class="botao pastel-red medio">Escolher</button>
						</li>
					</ul>
				</li>
				<li>
					<ul class="preco-cor-png wow rubberBand" data-wow-duration=".8s" data-wow-delay=".5s">
						<li>Editar cores com mascote em imagem. Você precisa noas enviar em (png, jpeg).</li>
						<li>R$ <strong>60,00</strong></li>
						<li>
							<button class="botao azul-claro medio">Escolher</button>
						</li>
					</ul>
				</li>
				<li>
					<ul class="preco-vetorizar wow rubberBand" data-wow-duration=".8s" data-wow-delay=".8s">
						<li>Vetorizar imagem em (linhas). Você precisa nos enviar em (png, jpeg)</li>
						<li>R$ <strong>30,00</strong></li>
						<li>
							<button class="botao palha medio">Escolher</button>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<hr />
		<!-- ilustração editando as posições e face do mascote -->
		<div class="editar-posicoes">
			<figure class=" wow fadeIn" data-wow-duration=".8s" data-wow-delay="1.2s">
				<img src="<?= bloginfo('template_url'); ?>/images/ilustracao/chars-position.png" alt="Criar ou Editar Posições">
			</figure>
			<ul class="descricao-criar-mascote wow pulse" data-wow-duration=".8s" data-wow-delay=".5s">
				<li>Crie novas posições para seu mascote!</li>
				<li>Com varias posições você pode fazer animações, anúncios e muitos mais!</li>
				<li>Enviaremos um briefing para que seja preenchido, após as informações passadas iremos trabalhar nos ângulos e posições...</li>
				<li>
					<button class="botao-dashed acafrao-sbg full">Criar novas posições</button>
				</li>
				<li>por R$ <strong>47,15</strong> à vista ou 3x de R$ <strong>16,66</strong></li>
			</ul>
		</div>
	</div>
</section>
<!-- sessoa destaques -->
<section id="destaques">
	<div class="container">
		<!-- <h1 class="titulop wow tada" data-wow-duration=".8s" data-wow-delay=".5s">Projetos em Destaques</h1> -->

		<!-- itens em destaque no portfólio -->
		<ul>			
			<?php
			$args_portfolio = array (
				'post_type' => 'projeto',
				'posts_per_page' => '4',
				'category_name' => 'portfolio',
				'order'		=> 'ASC'
				);
			// Custom query.
			$projetos = new WP_Query($args_portfolio);
			// Check that we have query results.
			if($projetos->have_posts()){ 
				$row = 0;
				while($projetos->have_posts()): $projetos->the_post();
				$row += 2;
				?>
				<li class=" wow fadeIn" data-wow-duration=".8s" data-wow-delay=".<?= $row; ?>s">
					<figure class="imghvr-blur">
						<img src="<?php the_post_thumbnail_url('portfolio-thumb'); ?>" alt="TITULO PROJETO">
						<figcaption>
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3>
								<p><?php the_field('qualificacao_projeto'); ?></p>
							</a>
							<div class="sobrepor"></div>
						</figcaption>
					</figure>
				</li>
				<?php
				endwhile;
			}
			wp_reset_postdata();
			?>
		</ul>
	</div>
</section>
<!-- sessao workana -->
<section id="workana">
	<div class="container">
		<h1 class="titulop wow tada" data-wow-duration=".8s" data-wow-delay=".5s">Cliente no Workana</h1>

		<!-- descrevendo serviços pelo workana -->
		<p class="descricao-workana wow fadeIn" data-wow-duration=".8s" data-wow-delay=".5s">
			Nós também disponibilizamos como forma de pagamento o workana, ela é uma plataforma
			de desenvolvimento de projetos, onde ela faz a intermidiação dos dois lados, garantindo o trabalho
			feito pelo design e o pagamento feito pelo cliente.<br /><br />
			Abaixo confira os comentários recentes de clientes que realizaram projetos com a DC Studios.
		</p>
		<!-- comentários e qualificações enviadas pelo cliente -->
		<ul class="comentarios">
			<li>
				<ul>
					<li class=" wow pulse" data-wow-duration=".8s" data-wow-delay=".2s">
						<img class="img-circle" src="<?= bloginfo('template_url'); ?>/images/workana/foto.png" alt="Foto Iago">
					</li>
					<li class=" wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
						<p>
							"Mais um trabalho 100% da galera da DC, recomendo!"
						</p>
					</li>
					<li>Nome cliente</li>
					<li class=" wow fadeIn" data-wow-duration=".8s" data-wow-delay=".8s">
						<span>Qualidade: 
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</span>
					</li>
				</ul>
			</li>
			<li>
				<ul>
					<li class=" wow pulse" data-wow-duration=".8s" data-wow-delay=".5s">
						<img class="img-circle" src="<?= bloginfo('template_url'); ?>/images/workana/foto.png" alt="Foto Iago">
					</li>
					<li class=" wow fadeIn" data-wow-duration=".8s" data-wow-delay=".8s">
						<p>
							"Mais um trabalho 100% da galera da DC, recomendo!"
						</p>
					</li>
					<li>Nome cliente</li>
					<li class=" wow fadeIn" data-wow-duration=".8s" data-wow-delay="1.1s">
						<span>Qualidade: 
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</span>
					</li>
				</ul>
			</li>
			<li>
				<ul>
					<li class=" wow pulse" data-wow-duration=".8s" data-wow-delay=".8s">
						<img class="img-circle" src="<?= bloginfo('template_url'); ?>/images/workana/foto.png" alt="Foto Iago">
					</li>
					<li class=" wow fadeIn" data-wow-duration=".8s" data-wow-delay="1.1s">
						<p>
							"Mais um trabalho 100% da galera da DC, recomendo!"
						</p>
					</li>
					<li>Nome cliente</li>
					<li class=" wow fadeIn" data-wow-duration=".8s" data-wow-delay="1.4s">
						<span>Qualidade: 
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</span>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>
<!-- sessão contato -->
<section id="contato">
	<div class="container">
		<h1 class="titulop wow tada" data-wow-duration=".8s" data-wow-delay=".5s">Contato</h1>

		<!-- formulário de contato -->
		<form class=" wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".9s">
			<div class="cols">
				<div class="col">
					<div class="form-group">
						<input type="text" placeholder="Nome" required>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<input type="text" placeholder="E-mail" required>
					</div>
				</div>
			</div>
			<div class="cols">
				<div class="col">
					<div class="form-group">
						<input type="tel" name="tel" placeholder="Celular: preferência whatsapp!">
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<div class="icon-select">
							<select name="" id="">
								<option>Selecioine o serviço...</option>
								<option value="">Identidade Visual - 15%</option>
								<option value="">Produção de Vídeo - 15%</option>
								<option value="">Ilustração 2D - 15%</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<textarea placeholder="Quero fazer um orçamento personalizado e ganhar 15% de desconto!" required>Quero fazer um orçamento personalizado e ganhar 15% de desconto!</textarea>
			</div>
			<div class="form-group">
				<input class="botao pastel-red full" type="submit" value="Pedir Desconto">
			</div>

			<p class="bg-success">Obrigado por entrar em contato, iremos responder logo logo!</p>
			<p class="bg-danger">Algo deu errado, verifique todos os campos do formulário antes de enviar!</p>

		</form>
	</div>
	<!-- endereço no google maps -->
	<!-- <div class="mapa-google-escritorio  wow fadeIn" data-wow-duration="1s" data-wow-delay="1.2s">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3333.401755163445!2d-36.349511415053556!3d-6.508380805811629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1504242043040" width="100%" height="200" frameborder="0" allowfullscreen></iframe>
	</div> -->
</section>
