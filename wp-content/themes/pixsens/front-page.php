<?php get_header(); ?>

<div class="container">

	<div class="center-text">
		<img src="<?php echo get_site_url(); ?>/wp-content/themes/pixsens/img/ribbon.png" alt="Geriausi sprendimai"><h2 class="bold">Kokybės garantija</h2>
		<span class="center-p">Suteikiame <span class="bold electric">2 savaičių garantiją </span>po darbų atlikimo, siekdami užtikrinti savo darbo kokybę. <br><br>Norime, kad Jūs didžiuotumėtės savo WEB puslapiu bei jaustumėte jo našumą.</span>
	</div>

	<div class="horizontal-container">
		<div class="icon-text fleft">
			<h2 class="icon-header"><?php the_field('first_image_header'); ?></h2>

				<img class="icon-image first-icon" src="<?php the_field('first_image'); ?>" alt="SEO paslaugos">

				<div class="text first-text">
					<?php the_field('first_image_text'); ?>
				</div>

		</div>

		<div class="icon-text fright">
			<h2 class="icon-header fright"><?php the_field('second_image_header'); ?></h2>
	
				<img class="icon-image second-icon fright" src="<?php the_field('second_image'); ?>" alt="Informatyvi interneto svetaine">
				<div class="text second-text">
					<?php the_field('second_image_text'); ?>
				</div>

		</div>

	</div>

	<div class="horizontal-container">
		<div class="icon-text fleft">
			<h2 class="icon-header"><?php the_field('third_image_header'); ?></h2>

				<img class="icon-image third-icon" src="<?php the_field('third_image'); ?>" alt="Funkcionali interneto svetaine">
				<div class="text third-text">
					<?php the_field('third_image_text'); ?>
				</div>

		</div>

		<div class="icon-text fright">
			<h2 class="icon-header fright"><?php the_field('fourth_image_header'); ?></h2>
	
				<img class="icon-image fourth-icon fright" src="<?php the_field('fourth_image'); ?>" alt="Firminio stiliaus kurimas">
				<div class="text fourth-text">
					<?php the_field('fourth_image_text'); ?>
				</div>

		</div>

	</div>

</div>

<?php get_footer(); ?>
