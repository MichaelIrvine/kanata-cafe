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

<div class="menu-container">
	
<section class="kanata-cafe-menu_drinks">

	
<?php
$icon = get_field('menu_icon_1', 'option');
echo file_get_contents( $icon );


// check if the flexible content field has rows of data
if( have_rows('drink_menu') ):

	$field = get_field_object('drink_menu');

	echo '<h1 class="menu-title">';
	echo $field['label'];
	echo '</h1>';

 	// loop through the rows of data
    while ( have_rows('drink_menu') ) : the_row();
		
		// check current row layout
		if( get_row_layout() == 'drink_category' ):?>
			<?php
			echo '<h3 class="category_title">';
			echo the_sub_field('category_title');
			echo '</h3>';

        	// check if the nested repeater field has rows of data
        	if( have_rows('category_list') ): ?>

				
				
				<?php
			    while ( have_rows('category_list') ) : the_row();?>
				<ul class="category-list">
				<li class="japanese-item"> <?php the_sub_field('japanese_item'); ?> </li>
				<li class="english-item"> <?php the_sub_field('english_item'); ?> </li>
				<li class="price">
					<span><?php the_sub_field('short_price'); ?></span>
					<span><?php the_sub_field('seperator'); ?></span>
					<span><?php the_sub_field('tall_price'); ?></span>
				</li>
				</ul>
				<?php	
				endwhile;?>
				
			<?php
			endif;?>
			 
		<?php	
        endif;

    endwhile;

else :

    // no layouts found

endif;

?>


</section >



<section class="kanata-cafe-menu_food">

<?php

// check if the flexible content field has rows of data
if( have_rows('food_menu') ):

	$field = get_field_object('food_menu');

	echo '<h1 class="menu-title">';
	echo $field['label'];
	echo '</h1>';

 	// loop through the rows of data
    while ( have_rows('food_menu') ) : the_row();
		
		// check current row layout
		if( get_row_layout() == 'food_category' ):?>
			<?php
			echo '<h3 class="category_title">';
			echo the_sub_field('category_title');
			echo '</h3>';

        	// check if the nested repeater field has rows of data
        	if( have_rows('category_list') ): ?>

				
				
				<?php
			    while ( have_rows('category_list') ) : the_row();?>
				<ul class="category-list">
				<li class="japanese-item"> <?php the_sub_field('japanese_item'); ?> </li>
				<li class="english-item"> <?php the_sub_field('english_item'); ?> </li>
				<li class="price">
					<span><?php the_sub_field('short_price'); ?></span>
					<span><?php the_sub_field('seperator'); ?></span>
					<span><?php the_sub_field('tall_price'); ?></span>
				</li>
				</ul>
				<?php	
				endwhile;?>
				
			<?php
			endif;?>
			 
		<?php	
        endif;

    endwhile;

else :

    // no layouts found

endif;

?>


</section >
</div>



<?php get_footer(); ?>
