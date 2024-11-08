<?php wp_body_open(); ?>
<!-- Navigation -->
<div id="scroll"></div>
<!-- 固定ヘッダー -->
<header id="header" class="">
	<div id="header_main">
		<h1>
			<a href="<?php esc_url(get_template_directory_uri()); ?>/">
				Logo
			</a>
		</h1>
		<nav>
			<ul id="nav_menu" class="flex">
				<li><a href="#" class="bg-black p-1 rounded-lg text-white">menu1</a></li>
				<li><a href="#" class="bg-black p-1 rounded-lg text-white">menu2</a></li>
				<li><a href="#" class="bg-black p-1 rounded-lg text-white">menu3</a></li>
				<li><a href="#" class="bg-black p-1 rounded-lg text-white">menu4</a></li>
			</ul>
		</nav>
		<div class="nav_icon">
			<i class="ri-menu-line" id="menu_icon"></i>
			<i class="ri-close-line" id="close_icon"></i>
		</div>
	</div>
</header>