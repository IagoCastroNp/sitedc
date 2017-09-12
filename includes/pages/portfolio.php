<section class="portfolio">
	<div class="container">
		<h1 class="titulop wow tada" data-wow-duration=".8s" data-wow-delay=".5s">Projetos - Produção de Vídeos</h1>
		<div class="menu-portfolio">
			<div class="cols">
				<form action="" class="col">
					<div class="inline">
						<label for="tipo-projeto">Selecione o tipo de projeto:</label>
						<div class="icon-select">
							<select name="categoria">
								<option value="">Escolher...</option>
								<option value="">Identidade Visual</option>
								<option value="">Produção de Vídeos</option>
								<option value="">Ilustração 2D</option>
								<option value="">Outros...</option>
							</select>
						</div>
					</div>
				</form>
				<form action="" class="col">
					<div class="inline search">
						<input type="text" placeholder="Procure por um projeto aqui!">
						<button><i class="fa fa-search"></i></button>
					</div>
				</form>
			</div>
		</div>
		<ul class="lista">
			<?php
			$args_portfolio = array (
				'post_type' => 'projeto',
				'posts_per_page' => '8',
				'category_name' => 'portfolio',
				// 'meta_key' => 'proj-iv',
				// 'orderby'	=> 'meta_value_num',
				'order'		=> 'ASC'
				);
			// Custom query.
			$projetos = new WP_Query($args_portfolio);
			// Check that we have query results.
			if($projetos->have_posts()){ 
				while($projetos->have_posts()): $projetos->the_post();
				?>
				<li class=" wow fadeIn" data-wow-duration=".8s" data-wow-delay=".2s">
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