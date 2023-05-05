<?php
/*
Template Name: catalog
*/
?>
		<?php get_header();?>
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
					</div>
					</div>
		<?php get_footer();?>