<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=cyrillic-ext" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/featherlight.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/featherlight.gallery.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site">
	<div class="top-panel">
		<div class="top-panel__wrapper">
			<div class="top-panel__item">
				<a href="home" class="site-logo">
					<div class="site-logo__title">Тулрегионохрана</div>
					<div class="site-logo__subtitle">Частная охранная организация</div>
				</a>
			</div>
			<div class="top-panel__item">
				<div class="top-links">
					<a href="" class="top-links__item">Узнать стоимость</a>
					<a href="" class="top-links__item">Заказать звонок</a>
				</div>
			</div>
			<div class="top-panel__item">
				<div class="top-address">
					<a href="tel:84872524451" class="top-address__tel">8 (487) 252-44-51</a>
					<div class="top-address__note">Пн-пт с 9.00 до 18.00</div>
				</div>
			</div>
		</div>
	</div>
	<?php if (is_page($page = "home")): ?>
	<header class="site-header site-header--home">		
		<section class="main-slider">
			<div class="main-slider__item main-slider__item--1">
				<div class="main-slider__title">Региональная охрана</div>
				<div class="main-slider__subtitle">В тульской, Рязанской, Орловской и Липецкой областях</div>
			</div>
			<div class="main-slider__item main-slider__item--2">
				<div class="main-slider__title">Охрана мероприятий</div>
				<div class="main-slider__subtitle">Обеспечение порядка в местах проведения массовых мероприятий (концерты, городские праздники, народные гуляния)</div>			
		</section>
	</header>
	<?php endif; ?>
	<?php if (is_page($page = "event")): ?>
		<header class="page-heading page-heading--event"></header>
	<?php endif; ?>
	<?php if (is_page($page = "services")): ?>
		<header class="page-heading page-heading--services"></header>
	<?php endif; ?>
	
	<div class="site-content">
	<?php wp_nav_menu(array(
		'theme_location' => 'header-nav',
		'menu_class' => 'header-nav',
		'depth' => 1
	)); ?>