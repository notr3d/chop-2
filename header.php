<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=cyrillic-ext" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/featherlight.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/featherlight.gallery.css">

<link rel="icon" content-type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>

<meta name="google-site-verification" content="tbbVNlMcbdWbGAsPEjphvUFbGslSQJ1PSIRd8RYUfUU" />
<meta name="yandex-verification" content="fef53294090caae9" />
<meta name='wmail-verification' content='2ea10c18c778323da24a6623cffb5ee5' />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site">
	<div class="top-panel">
		<div class="top-panel__wrapper">
			<div class="top-panel__item">
				<a href="<?php echo get_permalink(get_page_by_title('главная')->ID)?>" class="site-logo">
					<div class="site-logo__title">Тулрегионохрана</div>
					<div class="site-logo__subtitle">Частная охранная организация</div>
				</a>
			</div>
			<div class="top-panel__item">
				<div class="top-links">
					<span class="top-links__item header-form__open--form">Написать письмо</span>
					<span class="top-links__item header-form__open--callback">Заказать звонок</span>
				</div>
			</div>
			<div class="top-panel__item">
				<div class="top-address">
					<a href="tel:84872524451" class="top-address__tel">8 (4872) 52-44-51</a>
					<div class="top-address__note">Пн-пт с 9.00 до 18.00</div>
				</div>
			</div>
		</div>
	</div>
	<section class="header-form header-form--form">
		<div class="header-form__form">
			<div class="header-form__header">Написать письмо</div>
			<?php echo do_shortcode( '[contact-form-7 title="header form"]' ); ?>
			<!--<div class="header-form__item">
				<input type="text" placeholder="Имя*">
			</div>
			<div class="header-form__item">
				<input type="email" placeholder="E-mail*">
			</div>			
			<div class="header-form__item">
				<input type="tel" placeholder="Телефон">
			</div>
			<div class="header-form__item">
				<textarea placeholder="Сообщение..."></textarea>
			</div>
			<div class="header-form__item header-form__item--file">
				<label><span>Прикрепить файл</span><input type="file"></label>
			</div>			
			<div class="header-form__item">
				<input type="submit">
			</div>-->
			<div class="header-form__close">×</div>
		</div>
	</section>
	<section class="header-form header-form--callback">
		<div class="header-form__form">
			<div class="header-form__header">Заказать звонок</div>
			<?php echo do_shortcode( '[contact-form-7 title="header callback"]' ); ?>
			<!--<div class="header-form__item">
				<input type="text" placeholder="Имя*">
			</div>
			<div class="header-form__item">
				<input type="tel" placeholder="Телефон*">
			</div>
			<div class="header-form__item">
				<input type="submit">
			</div>-->
			<div class="header-form__close">×</div>
		</div>
	</section>
	<?php if (is_page($page = "home")): ?>
	<header class="site-header site-header--home">		
		<section class="main-slider">
			<div class="main-slider__item main-slider__item--1">
				<div class="main-slider__title">Региональная охрана</div>
				<div class="main-slider__subtitle">В Тульской, Рязанской, Орловской и Липецкой областях</div>
			</div>
			<div class="main-slider__item main-slider__item--2">
				<div class="main-slider__title">Охрана мероприятий</div>
				<div class="main-slider__subtitle">Обеспечение порядка в местах проведения массовых мероприятий (концерты, городские праздники, народные гуляния)</div>			
		</section>
	</header>
	<?php endif; ?>
	<?php if (is_page($page = "services")): ?>
		<header class="page-heading page-heading--services"></header>
	<?php endif; ?>
	<?php if (is_page($page = "event")): ?>
		<header class="page-heading page-heading--event"></header>
	<?php endif; ?>
	<?php if (is_page($page = "estate")): ?>
		<header class="page-heading page-heading--estate"></header>
	<?php endif; ?>
	<?php if (is_page($page = "institution")): ?>
		<header class="page-heading page-heading--institution"></header>
	<?php endif; ?>
	<?php if (is_page($page = "legal")): ?>
		<header class="page-heading page-heading--legal"></header>
	<?php endif; ?>
	<?php if (is_page($page = "property")): ?>
		<header class="page-heading page-heading--property"></header>
	<?php endif; ?>
	<?php if (is_page($page = "systems")): ?>
		<header class="page-heading page-heading--systems"></header>
	<?php endif; ?>
	<?php if (is_page($page = "about")): ?>
		<header class="page-heading page-heading--about"></header>
	<?php endif; ?>
	<?php if (is_page($page = "regions")): ?>
		<header class="page-heading page-heading--regions"></header>
	<?php endif; ?>
	
	<div class="site-content">
	<?php wp_nav_menu(array(
		'theme_location' => 'header-nav',
		'container_class' => 'header-nav',
		'menu_class' => 'header-nav__wrapper',
	)); ?>