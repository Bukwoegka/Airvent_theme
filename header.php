<!DOCTYPE html>
<html <?php language_attributes(); ?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" lang="ru" content="Официальный сайт Торгового Дома ОВК - лучшей компании из специализирующихся на вентиляции и кондиционировании">
	<meta name="keywords" lang="ru" content="Вентиляция, кондиционеры, оборудование, вентиляционной оборудование, купить кондиционеры">
	<meta name="robots" content="index, follow">
	<link rel="icon" type="image/png" href="<?php bloginfo("template_directory");?>/favicon.ico">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Playfair+Display|Roboto:300,400,500&amp;subset=cyrillic"
	    rel="stylesheet">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-2 col-xs-offset-10 posa">
				<div class="hidden_form">
					<form class="image-link" method="POST" id="top_form">
						<h3>Заказать звонок</h3>
						<input required type="text" name="name" placeholder="Ваше имя"><br>
						<input required type="text" name="phone" placeholder="Ваш номер"> <br>
						<button class="call-button">Перезвоните мне!</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="bg_popup"></div>
	<header class="header">
		<div class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-3">
						<div class="header__logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo("template_directory");?>/img/logo.png" alt="Логотип"></a>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-1 ">
						<div class="header__form">
							<form method="get" action="<?php bloginfo( 'url' ); ?>" class="header__search">
								<input value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>" name="s" placeholder="поиск на сайте" type="search" required>
								<button type="submit" class="search_btn"></button>
							</form>
						</div>
					</div>

					<div class="col-xs-3 col-sm-3 col-md-2 timesheet">
						<p class="header__adress-title">Мы работаем:</p>
						<p class="workday"><?php echo get_post_meta( 151, 'time1', true); ?></p>
						<p class="workday"><?php echo get_post_meta( 151, 'time2', true); ?></p>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-2">
						<p class="header__tel"><?php echo get_post_meta( 151, 'telephone1', true); ?></p>
						<p class="header__tel"><?php echo get_post_meta( 151, 'telephone2', true); ?></p>
						<button class="call-button-head">Заказать звонок</button>
					</div>
				</div>
			</div>
		</div>

		<div class="header__offer">
			<div class="container">
				<div class="row">
					<div class="header__offer_title">
						<h1><?php bloginfo('description');?></h1>
					</div>
					<div class="header__item"><img src="<?php bloginfo("template_directory");?>/img/hex.svg" alt="Маркер спика. Поставка оборудования">
						<div class="hex-title"><span>поставка</span> <br><span> оборудования</span></div>
					</div>
					<div class="header__item"><img src="<?php bloginfo("template_directory");?>/img/hex.svg" alt="Маркер спика. проектирование"><span>проектирование</span></div>
					<div class="header__item"><img src="<?php bloginfo("template_directory");?>/img/hex.svg" alt="Маркер спика. шеф-монтаж"><span>шеф-монтаж</span></div>
					<button class="offer-button">получить предложение</button>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-2 form_hid_block">
					<div class="hidden_form_order">
						<form class="image-link" id="bottom_form">
							<h3>Узнать стоимость и сроки</h3>
							<p><?php echo get_post_meta( 156, 'Text_in_big_form', true); ?></p>
							<textarea name="comment" cols="40" rows="4" placeholder="Пример: нужна вентиляция и кондиционирование для торгового центра общей площадью 25000 м2"></textarea><br>
							<input required class="form_email" type="text" name="name2" placeholder="Email, куда отправить ответ"><br>
							<input required class="form_phone" type="text" name="phone2" placeholder="Телефон для быстрой связи"><br>
							<p><input required type="checkbox"><span><?php echo get_post_meta( 156, 'acсept_in_form', true); ?></span></p>
							<button class="call-button"><?php echo get_post_meta( 156, 'name_of_button_big_form', true); ?></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="nav__wrap">
			<div class="menu_icon">
				<svg enable-background="new 0 0 34 24" height="24px" id="Layer_1" version="1.1" viewBox="0 0 34 24" width="34px" xml:space="preserve"
						    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<g>
						<rect fill="#fff" height="4" width="34" />
						<rect fill="#fff" height="4" width="34" y="9" />
						<rect fill="#fff" height="4 " width="34" y="18" />
					</g>
				</svg>
			</div>
			<div class="container">
				<nav class="header__nav">
			<?php wp_nav_menu(array('theme_location'=>'Header menu', 'container' => 'ul', 'menu_class'=>'header__nav-list') );?>
				</nav>
			</div>
		</div>	
	</header>

