		<footer class="footer">
			<div class="footer__container">
				<!-- <?php the_custom_logo(); ?> -->
				<a href="https://4b.o-trend.com/" class="footer__logo"><span>Anime-Shop</span></a>
				<div class="footer__columns">					
					<ul class="footer__column footer__column_1">
						<li class="footer__text">Адреса:</li>
						<li class="footer__address"><a href="#"><?php the_field('address', 7);?></a></li>
						<li class="footer__phone"><a href="tel:<?php the_field('phone-number', 7);?>"><?php the_field('phone', 7);?></a></li>
						<li class="footer__ourmail"><a href="#">kievanime@gmail.com</a></li>
					</ul>
						<ul class="footer__column footer__column_2">
							<li class="footer__aboutus footer__aboutus_1"><a href="">Про нас:</a></li>
							<li class="footer__aboutus"><a href="https://4b.o-trend.com/index.php/delivery/">Доставка</a></li>
							<li class="footer__aboutus"><a href="https://4b.o-trend.com/contacts/">Контакти</a></li>
							<li class="footer__aboutus"><a href="">Сертифікат</a></li>
						</ul>
					<div class="footer__column footer__column_3">
						<div class="footer__social social-footer">
							<div class="social-footer__text">Ми в соц-мережах:</div>
							<div class="social-footer__item">
								<a href="<?php the_field('facebook-link');?>" class="social-footer__icon"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/icons/facebook.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/facebook.png" alt=""></picture></a>
								<a href="<?php the_field('instagram-link');?>" class="social-footer__icon"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/icons/instagram.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/instagram.png" alt=""></picture></a>
								<a href="<?php the_field('telegram-link');?>" class="social-footer__icon"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/icons/telegram.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/telegram.png" alt=""></picture></a>
								<a href="<?php the_field('viber-link');?>" class="social-footer__icon"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/icons/viber.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/viber.png" alt=""></picture></a>
							</div>
						</div>
						<div class="footer__payment payment-footer">
							<div class="payment-footer__text">Спосіб оплати:</div>
							<div class="payment-footer__item">
								<a href="" class="payment-footer__icon"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/icons/mastercard.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/mastercard.png" alt=""></picture></a>
							</div>
						</div>
					</div>
				</div>
					<?php echo do_shortcode('[contact-form-7 id="48" title="Contact form"]');?>
				</div>
	</div>
	</footer>
	</div>
	<!-- <div id="popup" aria-hidden="true" class="popup">
	<div class="popup__wrapper">
		<div class="popup__content">
			<button data-close type="button" class="popup__close">Закрыть</button>
			<div class="popup__text">
				Text
			</div>
		</div>
	</div>
</div> -->
	<?php wp_footer();?>
</body>

</html>