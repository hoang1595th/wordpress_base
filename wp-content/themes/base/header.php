<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php (wp_title('') || bloginfo()); ?></title>
</head>
<body>
	<?php wp_head(); ?>
	<header>
		<section id="header">
			<!-- Top -->
				<?php get_template_part( 'templates/header/top/top_v0' ); ?>
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
				<!-- Brand/logo -->
				<a class="navbar-brand" href="#">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/luffy.jpg'; ?>" alt="logo" style="width:40px;">
				</a>
				<!-- Menu -->
				<?php get_template_part( 'templates/header/menu/menu_v0' ); ?>
				<!-- Search Bar -->
				<?php get_template_part( 'templates/header/search/search_v0' ); ?>
			</nav>
		</section>
	</header>