<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aeris
 */

?>

	<footer>
		<div class="wrapper">
		<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
			<div id="footer-widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer-widget-area' ); ?>
			</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'partners' ) ) : ?>
			<ul id="partners-sidebar" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'partners' ); ?>
			</ul>
		<?php endif; ?>
		    <!-- <address>
		        OBSERVATOIRE MIDI-PYRENEES<br>
		        14, avenue Edouard Belin - 31400 TOULOUSE<br>
		        Tél. +33 (0)5 61 33 29 29<br>
		        Fax : +33 (0)5 61 33 28 88<br>
		    </address> -->
		    <p class="copyright">© Copyright Pôle Aeris 2016 - Service de données OMP (SEDOO)</p>

	    </div>
	</footer>
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
