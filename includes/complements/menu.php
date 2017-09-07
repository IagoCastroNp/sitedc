<?php
if($estilo != 'home'): ?>
<nav class="wow slideInDown" data-wow-duration=".5s" data-wow-delay=".2s">
	<ul>
		<li><a href="index.php" class="scrollSuave ativo">Home</a></li>
		<li><a href="portfolio.php">Portfolio</a></li>
	</ul>
</nav>
<?php else: ?>
<!-- menu desktop -->
<nav class="wow slideInDown" data-wow-duration=".5s" data-wow-delay=".2s">
	<ul>
		<li><a href="#home" class="scrollSuave ativo">Home</a></li>
		<li><a href="#identidade" class="scrollSuave">Logo</a></li>
		<li><a href="#producaov" class="scrollSuave">Vídeo</a></li>
		<li><a href="#ilustracao" class="scrollSuave">Ilustração</a></li>
		<li><a href="portfolio.php">Portfolio</a></li>
		<li><a href="#contato" class="scrollSuave">Contato</a></li>
	</ul>
</nav>
<?php endif; ?>