<?php
/*
Template Name: contacts
*/
?>
		<?php get_header();?>
					<ul class="footer__column footer__column_1">
						<li class="footer__text">Адреса:</li>
						<li class="footer__address"><a href="#"><?php the_field('address', 7);?></a></li>
						<li class="footer__phone"><a href="tel:<?php the_field('phone-number', 7);?>"><?php the_field('phone');?></a></li>
						<li class="footer__ourmail"><a href="#">kievanime@gmail.com</a></li>
					</ul>
		<?php get_footer();?>