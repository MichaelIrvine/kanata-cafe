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


<div id="primary" <?php astra_primary_class(); ?>>
<?php
	echo '<section class="intro-text-container">';
			// check if the repeater field has rows of data
		if( have_rows('front_page_intro') ):
				// loop through the rows of data
    			while ( have_rows('front_page_intro') ) : the_row();
					// display a sub field value
					echo '<div class="intro_english">';
						echo '<p>';the_sub_field('intro_english'); echo '</p>';
						echo '</div>';
						echo '<div class="intro_japanese">';
						echo '<p>';the_sub_field('intro_japanese'); echo '</p>';
						echo '</div>';
					echo '</section>';
				endwhile;
			else : // no rows found

		endif;

?>

<section class="icon-container">
<?php 

if( have_rows('front_page_links') ): ?>

	<ul class="icons">

	<?php while( have_rows('front_page_links') ): the_row(); 

		// vars
		$icon 	 = get_sub_field('icon_svg', 'option');
		$content = get_sub_field('link_title');
		$link 	 = get_sub_field('page_link');
		

		?>

		<li class="icon-links">

			<?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>

				<?php echo file_get_contents( $icon );?>


			<?php if( $link ): ?>
				</a>
			<?php endif; ?>

		    <h3><?php echo $content; ?></h3>

		</li>

	<?php endwhile; ?>

	</ul>
</section>
<?php endif; ?>



</div><!-- #primary -->


<?php get_footer(); ?>
