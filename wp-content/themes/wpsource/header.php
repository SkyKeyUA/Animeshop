<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
	<title>Главная</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="format-detection" content="telephone=no">
	<!-- <style>body{opacity: 0;}</style> -->

	<?php wp_head();?>
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<button type="button" class="menu__icon icon-menu"><span></span></button>
				<!-- <?php the_custom_logo(); ?> -->
				<a href="https://4b.o-trend.com/" class="header__logo"><span>Anime-Shop</span></a>
				<div class="header__menu menu">
					<nav class="menu__body">
						<ul class="menu__list">
							<li class="menu__item"><a href="https://4b.o-trend.com/" class="menu__link">Головна</a></li>
							<li class="menu__item"><a href="https://4b.o-trend.com/index.php/delivery/" class="menu__link">Оплата та доставка</a></li>
							<li class="menu__item"><a href="https://4b.o-trend.com/catalog/" class="menu__link">Каталог</a></li>
							<li class="menu__item"><a href="https://4b.o-trend.com/reviews/" class="menu__link">Відгуки</a></li>
						</ul>
					</nav>
				</div>
				<a href="" class="header__cart-icon _icon-cart"></a>
			</div>
		</header>