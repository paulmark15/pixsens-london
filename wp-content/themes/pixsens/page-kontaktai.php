<?php
/*
	Template Name: Kontaktai
*/
?>

<?php get_header(); ?>
<div class="kontaktai-wrapper">
	<div class="kontaktai-content">
		<div class="kontaktai-top-text">
			<p class="kontaktai-p1">Mums visuomet yra smagu gauti<br> Jūsų žinutę, komentarą, atsiliepimą ar klausimą.</p>
			<img class="kontaktai-line" src="<?php echo get_site_url(); ?>/wp-content/themes/pixsens/img/kontaktai-line.png">
			<p class="kontaktai-p2 bold">Susisiekti su mumis galite užpildę šią formą</p>
		</div>
			<?php echo do_shortcode( '[contact-form-7 id="49" title="Susisiekti su mumis galite užpildę šią formą"]' ); ?>
		<div class="kontaktai-bottom-text">
			<p class="bold"><span class="fleft green">0796481122</span><span class="mar-0aut">info@pixsens.co.uk</span><span class="fright green">London, UK</span></p>
			<p class="copyright">Copyright © 2015 Pixsens Inc. All rights reserved</p>
		</div>
	</div>
</div>
<?php get_footer(); ?>