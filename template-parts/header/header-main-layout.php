<?php
/**
 * Template for Primary Header
 *
 * The header layout 2 for Astra Theme. ( No of sections - 1 [ Section 1 limit - 3 )
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2018, Astra
 * @link        http://wpastra.com/
 * @since       Astra 1.0.0
 */

?>

<div class="main-header-bar-wrap">
	<div class="main-header-bar">
		<?php astra_main_header_bar_top(); ?>
		<div class="ast-container">

			<div class="ast-flex main-header-container">
				<?php astra_masthead_content(); ?>
			</div><!-- Main Header Container -->
		</div><!-- ast-row -->
		<?php astra_main_header_bar_bottom(); ?>
					<?php

				if (function_exists('get_field')){

					$imageLeft   = get_field('cover_left');
					$imageRight  = get_field('cover_right');
					$size        = 'front-cover';
				?>
			<div class="hero-wrap">
			<div class="hero-left" style="background-image: url(<?php echo $imageLeft; ?> )"></div>
			<div class="hero-right" style="background-image: url(<?php echo $imageRight; ?> )"></div>
			</div>
			<?php
				echo '<div class="big-text-container">';
				// check if the repeater field has rows of data
					if( have_rows('welcome_text') ):
				// loop through the rows of data
    					while ( have_rows('welcome_text') ) : the_row();
				// display a sub field value
        				echo '<h1 class="fp_english_big">';the_sub_field('fp_english_big');echo '</h1>';
						echo '<h1 class="fp_japanese_big">';the_sub_field('fp_japanese_big');echo '</h1>';
				echo '</div>';
    endwhile;

else :

    // no rows found

endif;
				} //This closes the above IF statement
			?>



	</div> <!-- Main Header Bar -->
</div> <!-- Main Header Bar Wrap -->
