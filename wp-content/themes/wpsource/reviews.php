<?php
/*
Template Name: reviews
*/
?>

		<?php get_header();?>
		<div class="aboutus">
				<div class="aboutus__container">
					<div class="aboutus__title title">Про нас</div>
					<?php the_field('about-us');?>
					<div class="aboutus__link">
						<a href="" class="aboutus__btn btn btn__big"><span>Дізнатись більше про фігурки</span></a>
					</div>
				</div>
			</div>
		<?php get_footer();?>