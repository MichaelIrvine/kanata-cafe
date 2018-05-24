<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

get_header(); ?>



<div id="primary-menu-page">

<section class="kanata-cafe-menu">
<?php

// check if the flexible content field has rows of data
if( have_rows('kanata_cafe_menu') ):

 	// loop through the rows of data
    while ( have_rows('kanata_cafe_menu') ) : the_row();

		// check current row layout
        if( get_row_layout() == 'drink_menu' ):

			echo '<h1>' . $menuTitle . '</h1>';
        	// check if the nested repeater field has rows of data
        	if( have_rows('coffee_pour_overs') ):

			 	echo '<ul>';

			 	// loop through the rows of data
			    while ( have_rows('coffee_pour_overs') ) : the_row();
					
					$japaneseItem = get_sub_field('japanese_item');
					$englishItem  = get_sub_field('english_item');

					echo '<li>' . $japaneseItem . '</li>';
					echo '<li>' . $englishItem . '</li>';

				endwhile;

				echo '</ul>';

			endif;

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>

</section >



</div><!-- #primary -->

<?php get_footer(); ?>
