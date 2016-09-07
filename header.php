<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=cyrillic-ext" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site">
	<header class="site-header">
		<div class="top-panel">
			<div class="top-panel__wrapper lcw">
				<div class="top-panel__item">
					<div class="site-logo">
						<div class="site-logo__title">Тулрегионохрана</div>
						<div class="site-logo__subtitle">Частная охранная организация</div>
					</div>
				</div>
				<div class="top-panel__item">
					<div class="top-links">
						<a href="" class="top-links__item">Узнать стоимость</a>
						<a href="" class="top-links__item">Заказать звонок</a>
					</div>
				</div>
				<div class="top-panel__item">
					<div class="top-address">
						<div class="top-address__tel">8 (487) 252-44-51</div>
						<div class="top-address__address">г. Тула, Веневское шоссе, д.4, корп. 5</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-nav">
			<div class="header-nav__wrapper lcw">
				<a href="<?php echo get_permalink( get_page_by_title('О компании')->ID ); ?>" class="header-nav__item">О компании</a>
				<a href="<?php echo get_permalink( get_page_by_title('Услуги')->ID ); ?>" class="header-nav__item">Услуги</a>
				<a href="<?php echo get_permalink( get_page_by_title('Документы')->ID ); ?>" class="header-nav__item">Документы</a>
				<a href="<?php echo get_permalink( get_page_by_title('Цены')->ID ); ?>" class="header-nav__item">Цены</a>
				<a href="<?php echo get_permalink( get_page_by_title('Клиенты')->ID ); ?>" class="header-nav__item">Клиенты</a>
				<a href="<?php echo get_permalink( get_page_by_title('Вопрос-ответ')->ID ); ?>" class="header-nav__item">Вопрос-ответ</a>
				<a href="<?php echo get_permalink( get_page_by_title('Контакты')->ID ); ?>" class="header-nav__item">Контакты</a>
			</div>
		</div>
	</header>
	<div class="site-content">
