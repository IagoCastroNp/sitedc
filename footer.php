	</main>
	<footer>
		<!-- footer menu -->
		<div class="container">
			<ul class="link-footer">
				<?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
			</ul>
		</div>
		<hr>
		<div class="container">		
			<div class="social-footer">
				<!-- footer links de redes sociais -->
				<ul>
					<li class=" wow pulse" data-wow-duration=".8s" data-wow-delay=".5s">
						<a href="#">
							<i class="fa fa-facebook"></i>
							<span>Facebook</span>
						</a>
					</li>
					<li class=" wow pulse" data-wow-duration=".8s" data-wow-delay="1s">
						<a href="#">
							<i class="fa fa-youtube"></i>
							<span>YouTube</span>
						</a>
					</li>
				</ul>
				<!-- footer texto agradecimento -->
				<p class=" wow fadeIn" data-wow-duration="1.8s" data-wow-delay=".8s"">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus consectetur, non quis neque ab est cupiditate. Sapiente id ea hic doloremque, blanditiis optio accusamus a, tenetur, quod et aspernatur officiis.</p>
			</div>
		</div>
		<hr>
		<div class="container">
			<ul class="contato-footer">
				<!-- footer email -->
				<li>
					<ul>
						<li><strong>Email</strong></li>
						<li>contato@dcstudios.com.br</li>
					</ul>
				</li>
				<!-- footer telefone ou whatsapp -->
				<li>
					<ul>
						<li><strong>Telefone / Whatsapp</strong></li>
						<li>(83) 98794-0537</li>
						<li>(83) 98794-0537</li>
						<li>(83) 98794-0537</li>
					</ul>
				</li>
				<!-- footer cadastro email dicas -->
				<li>
					<ul class="cadastraremail">
						<li><strong>Receba dicas de design <i class="fa fa-level-down"></i></strong></li>
						<li>
							<input type="email" placeholder="Cadastrar email" />
							<button><i class="fa fa-arrow-right"></i></button>
						</li>
					</ul>
				</li>

			</ul>
		</div>
		<div class="container">
			<p class="copyr">DC Studios &copy Todos os direitos reservados.</p>
		</div>
	</footer>

	<script src="<?= bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	<script src="<?= bloginfo('template_url'); ?>/js/jquery.validate.min.js"></script>
	<script src="<?= bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script src="<?= bloginfo('template_url'); ?>/js/lightbox.min.js"></script>
	<script src="<?= bloginfo('template_url'); ?>/js/wow.min.js"></script>
	<script src="<?= bloginfo('template_url'); ?>/js/jquery.steps.js"></script>
	<?php include('js/funcoes.js.php'); ?>
	
</body>
</html>