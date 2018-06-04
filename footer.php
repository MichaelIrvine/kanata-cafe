<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

?>
	<?php astra_content_bottom(); ?>

	</div> <!-- ast-container -->

</div><!-- #content -->

</div><!-- #page -->

<?php astra_body_bottom(); ?>



<footer class="kanata-footer">
	<div class="footer-contact">
<?php

// check if the flexible content field has rows of data
if( have_rows('footer_contact') ):

     // loop through the rows of data
    while ( have_rows('footer_contact') ) : the_row();
		echo '<div class="footer-contact-details">';
        if( get_row_layout() == 'footer_contact_details' ):
			echo '<h2 class="contact-title">Contact Us</h2>';
			echo '<p class="contact-phone-number">'; the_sub_field('footer_phone_number'); echo '</p>';
			echo '<p class="contact-email">'; the_sub_field('footer_email');  echo '</p>';
			echo '<div class="contact-address">'; the_sub_field('footer_address'); echo '</div>';
		endif;
		
		echo '</div>';
		
    endwhile;

else :

    // no layouts found

endif;

?>

	</div>
	<div class="footer-menu">
		<?php
		wp_nav_menu(array('theme_location'=>'footer-navigation',
		'container' => 'nav',
		'container_class' => 'footer-navigation',
		'container_id' => 'footer-navigation',
		'fallback_cb' => 'false'
		));
		?>
	</div>
	<div class="footer-social-menu">
		<?php
		wp_nav_menu(array('theme_location'=>'social',
		'container' => 'nav',
		'container_class' => 'social-navigation',
		'container_id' => 'social-navigation',
		'fallback_cb' => 'false'
		));
		?>
	</div>
</footer>




</body>
</html>
