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

<?php wp_footer(); ?>


<footer class="kanata-footer">
	<div class="footer-top-container">
	<div class="footer-contact">
	<?php
	if( function_exists('get_field') ){
		echo '<p class="footer-contact-title">Contact Us</p>';
		if( get_field('contact_phone_number', 'option') ){
			echo '<p class="footer-contact-phone-number">'; the_field('contact_phone_number', 'option'); echo '</p>';
		}
		
		if( get_field('contact_email', 'option') ){
			echo '<p class="footer-contact-email">'; the_field('contact_email', 'option'); echo '</p>';
		}

		if( get_field('contact_address', 'option') ){
			 echo '<div class="footer-contact-address">'; 
			 echo the_field('contact_address', 'option'); 
			 echo '</div>';
		}

		
	}
	?>

	</div> <!-- footer contact -->


	<div class="footer-menu">
		<p class="footer-menu-title">Site Map</p>
		<?php
		wp_nav_menu(array('theme_location'=>'footer-navigation',
		'container' => 'nav',
		'container_class' => 'footer-navigation',
		'container_id' => 'footer-navigation',
		'fallback_cb' => 'false'
		));
		?>
	</div> <!-- footer menu -->

	<div class="footer-social-menu">
		<p class="social-menu-title">Follow Us</p>
		<?php
		wp_nav_menu(array('theme_location'=>'social',
		'container' => 'nav',
		'container_class' => 'social-navigation',
		'container_id' => 'social-navigation',
		'fallback_cb' => 'false'
		));
		?>
	</div>  <!-- footer social menu -->

	</div> <!-- footer top container -->

	<div class="footer-bottom-container">
	<div class="copyright-info">
		<?php
	if( function_exists('get_field') ){
		if( get_field('copyright_info', 'option') ){
			echo '<p class="footer-copyright">&copy;'; the_field('copyright_info', 'option'); echo '</p>';
		}

	}
	?>
	</div>  <!-- copyright info -->
	<div class="developer-info">
		<?php
		if( have_rows('dev_info', 'option') ): 
		while( have_rows('dev_info', 'option') ): the_row();
			?>
			
			 <p class="dev-info">Website by: <a href="<?php the_sub_field('dev_link');?>"> 
				 <?php the_sub_field('dev_name', 'option');?>
			</a></p>
		<?php 
		endwhile; 
		endif;
		?>
	</div> <!-- developer info -->
	</div> <!-- footer bottom container -->
	

</footer>




</body>
</html>
