<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- header.phpを読み込む -->
	<?php get_header(); ?>
</head>

<body>
	<?php get_template_part("components/nav/header-nav") ?>
	<main>
		<h1 class="text-center text-5xl text-red-500">front-page</h1>
	</main>
	<!-- footer.phpを読み込む -->
</body>
<?php get_footer(); ?>

</html>