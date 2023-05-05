<?php
/*
Template Name: home
*/
?>
		<?php get_header();?>
		<main class="page">
			<div class="animeshop">
				<div class="animeshop__container">
					<div class="animeshop__title"><?php the_field('title');?></div>
					<a href="https://4b.o-trend.com/catalog/" class="animeshop__btn btn"><span>Каталог</span></a>
					<div class="animeshop__image">
						<div class="animeshop__image_1">
							<a href="" class="animeshop__item_1 -ibg"><picture>
								<!-- <source srcset="<?php bloginfo('template_url'); ?>/assets/img/figures/01.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/figures/01.png" alt=""> -->
									<source srcset="<?php the_field('top-images-1webp');?>" type="image/webp"><img src="<?php the_field('top-images-1');?>" alt="">
								</picture></a>
						</div>
						<div class="animeshop__image_2">
							<a href="" class="animeshop__item_2 -ibg"><picture>
								<!-- <source srcset="<?php bloginfo('template_url'); ?>/assets/img/figures/02.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/figures/02.png" alt=""> -->
									<source srcset="<?php the_field('top-images-2webp');?>" type="image/webp"><img src="<?php the_field('top-images-2');?>" alt="">
								</picture></a>
						</div>
					</div>
				</div>
				<div class="animeshop__lineblue"></div>
			</div>
			<div class="lots">
				<div class="lots__container">
					<div class="lots__title title">Популярні фігурки</div>
					<div class="lots__slider slider-lots">
						<div class="slider-lots__slider swiper">
							<div class="slider-lots__control control-slider-lots">
								<div class="control-slider-lots__arrow control-slider-lots__arrow-prev"><span class="_icon-arrow-right"></span></div>
								<div class="control-slider-lots__arrow control-slider-lots__arrow-next"><span class="_icon-arrow-right"></span></div>
							</div>
							<div class="slider-lots__wrapper swiper-wrapper">
								<?php
									global $post;
									
									$myposts = get_posts([ 
										'numberposts' => -1,
										'category_name' => 'slider'
									]);
									
									if( $myposts ){
										foreach( $myposts as $post ){
											setup_postdata( $post );
											?>
											<div class="slider-lots__slide swiper-slide">
									<div class="lot">
										<div class="lot__body">
											<div class="lot__header"><a href="" class="lot__image -ibg"><picture>
												<!-- <source srcset="<?php bloginfo('template_url'); ?>/assets/img/figures/03.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/figures/03.jpg" alt=""> -->
													<?php the_post_thumbnail(
													array(331, 423),
													array(
														'class' => 'img')

												); ?>
												</picture></a></div>
												
											<a href="" class="lot__title"><?php the_title(); ?></a>
											<div class="lot__info">
												<div class="lot__value"><?php the_content(); ?></div>
												<div class="lot__cart"><span class="_icon-cart"></span></div>
												<div class="lot__block-btn">
													<a href="" class="lot__btn btn btn__small"><span>купити</span></a>
												</div>
												<div class="lot__favorite"><span class="_icon-favorite"></span></div>
											</div>
										</div>
									</div>
								</div>
		<?php } } wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
					<div class="lots__btn">
						<a href="https://4b.o-trend.com/catalog/" class="animeshop__btn btn btn__big"><span>Перейти до каталогу</span></a>
					</div>
				</div>
			</div>
			<div class="aboutus">
				<div class="aboutus__container">
					<div class="aboutus__title title">Про нас</div>
					<?php the_field('about-us');?>
					<div class="aboutus__link">
						<a href="" class="aboutus__btn btn btn__big"><span>Дізнатись більше про фігурки</span></a>
					</div>
				</div>
			</div>
			<div class="popular">
				<div class="popular__container">
					<div class="popular__title title">Популярні Тайтли</div>
					<div class="popular__body">
						<div class="popular__content content-popular">
							<div class="content-popular__image -ibg"><picture>
								<!-- <source srcset="<?php bloginfo('template_url'); ?>/assets/img/popular/01.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/popular/01.png" alt=""> -->
									<source srcset="<?php the_field('popular-image-1web');?>" type="image/webp"><img src="<?php the_field('popular-image-1'); ?>" alt="">
								</picture></div>
							<div class="content-popular__text"><?php the_field('popular-text-1');?></div>
						</div>
						<div class="popular__content content-popular">
							<div class="content-popular__image -ibg"><picture>
								<!-- <source srcset="<?php bloginfo('template_url'); ?>/assets/img/popular/02.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/popular/02.png" alt=""> -->
								<source srcset="<?php the_field('popular-image-2web');?>" type="image/webp"><img src="<?php the_field('popular-image-2'); ?>" alt="">
								</picture></div>
							<div class="content-popular__text"><?php the_field('popular-text-2');?></div>
						</div>
					</div>
					<div class="lots__slider slider-lots">
						<div class="slider-lots__slider swiper">
							<div class="slider-lots__control control-slider-lots">
								<div class="control-slider-lots__arrow control-slider-lots__arrow-prev"><span class="_icon-arrow-right"></span></div>
								<div class="control-slider-lots__arrow control-slider-lots__arrow-next"><span class="_icon-arrow-right"></span></div>
							</div>
							<div class="slider-lots__wrapper swiper-wrapper">
								<?php
									global $post;
									
									$myposts = get_posts([ 
										'numberposts' => -1,
										'category_name' => 'slider-2'
									]);
									
									if( $myposts ){
										foreach( $myposts as $post ){
											setup_postdata( $post );
											?>
											<div class="slider-lots__slide swiper-slide">
									<div class="lot">
										<div class="lot__body">
											<div class="lot__header"><a href="" class="lot__image -ibg"><picture>
												<!-- <source srcset="<?php bloginfo('template_url'); ?>/assets/img/figures/06.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/figures/06.jpg" alt=""> -->
													<?php the_post_thumbnail(
													array(331, 423),
													array(
														'class' => 'img')

												); ?>
												</picture></a></div>
												
											<a href="" class="lot__title"><?php the_title(); ?></a>
											<div class="lot__info">
												<div class="lot__value"><?php the_content(); ?></div>
												<div class="lot__cart"><span class="_icon-cart"></span></div>
												<div class="lot__block-btn">
													<a href="" class="lot__btn btn btn__small"><span>купити</span></a>
												</div>
												<div class="lot__favorite"><span class="_icon-favorite"></span></div>
											</div>
										</div>
									</div>
								</div>
									<?php } } wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php get_footer();?>