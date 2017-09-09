<?php
	// Verificar se o menu esta na página home
if($estilo == 'home'): ?>
<nav class="menu-responsivo">
	<?php wp_nav_menu(
		array('theme_location' => 'header-menu-home')
	); ?>
</nav>
<?php else: ?>
<!-- menu responsivo page home -->
<nav class="menu-responsivo">
	<?php wp_nav_menu(
		array('theme_location' => 'header-menu-portfolio')
	); ?>
</nav>
<?php endif; ?>