<?php
	// Verificar se o menu esta na página home
if($estilo != 'home'): ?>
<nav class="menu-responsivo">
	<ul>
		<li><a href="index.php" class="scrollSuave">Home</a></li>
		<li><a href="portfolio.php">Portfolio</a></li>
	</ul>
</nav>
<?php else: ?>
<!-- menu responsivo page home -->
<nav class="menu-responsivo">
	<ul>
		<li><a href="#start" class="scrollSuave">Home</a></li>
		<li><a href="#identidade" class="scrollSuave">Logo</a></li>
		<li><a href="#producaov" class="scrollSuave">Vídeo</a></li>
		<li><a href="#ilustracao" class="scrollSuave">Ilustração</a></li>
		<li><a href="portfolio.php">Portfolio</a></li>
		<li><a href="#contato" class="scrollSuave">Contato</a></li>
	</ul>
</nav>
<?php endif; ?>