<?php
if($estilo == 'home'): ?>
<nav class="wow slideInDown" data-wow-duration=".5s" data-wow-delay=".2s">
	<?php wp_nav_menu(array('theme_location' => 'header-menu-home')); ?>
</nav>
<?php else: ?>
<!-- menu desktop -->
<nav class="wow slideInDown" data-wow-duration=".5s" data-wow-delay=".2s">
	<?php wp_nav_menu(array('theme_location' => 'header-menu-portfolio')); ?>
</nav>
<?php endif; ?>