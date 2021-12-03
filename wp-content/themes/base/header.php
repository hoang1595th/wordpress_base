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
			<div class="section p-y-10">
				<nav class="nav-container flex width-100">
					<div class="logo flex flex--align-center">
						<!-- Brand/logo -->
						<a class="navbar-brand" href="#">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/luffy.jpg'; ?>" alt="logo" style="width:40px;">
						</a>
					</div>
					<div class="nav-main flex--1">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-8 flex--1">
								<!-- Search Bar -->
								<?php get_template_part( 'templates/header/search/search_v0' ); ?>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 flex flex--end">
								sign in
							</div>
						</div>
						<!-- Menu -->
						<?php get_template_part( 'templates/header/menu/menu_v0' ); ?>
					</div>
				</nav>
			</div>
		</section>
	</header>