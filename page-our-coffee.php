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

<?php
// check if the flexible content field has rows of data
if( have_rows('our_coffee') ):

// loop through the rows of data
while ( have_rows('our_coffee') ) : the_row();

if( get_row_layout() == 'japanese_content' ):     
?>
<section class="our-coffee-content-japanese">
    <?php
    $image = get_sub_field('our_coffee_image');
    ?>
    <div class="left-col" style="background-image: url(<?php echo $image; ?> )">
    </div>
    <div class="right-col">
    <?php
        echo '<h2 class="our-coffee-title">';
        the_sub_field('our_coffee_title');
        echo '</h2>';
        the_sub_field('our_coffee_paragraph');
    ?>
    </div>
</section>
<?php
endif;
?>

<?php 
if( get_row_layout() == 'english_content' ):     
?>
<section class="our-coffee-content-english">

    <div class="left-col">
    <?php
        the_sub_field('our_coffee_paragraph');
    ?>
    </div>
    <?php
    $image = get_sub_field('our_coffee_image');
    ?>
    <div class="right-col" style="background-image: url(<?php echo $image; ?> )">
    </div>

</section>

<?php
endif;

endwhile;

endif;
?>

<?php get_footer(); ?>



