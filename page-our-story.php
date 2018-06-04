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
if( have_rows('our_story') ):

// loop through the rows of data
while ( have_rows('our_story') ) : the_row();

if( get_row_layout() == 'english_content' ):     
?>
<section class="our-story-content-eng">
    <div class="left-col">
    <?php
    $image = get_sub_field('our_story_image');
    echo '<img src="' . $image . '" alt="' . $image . '" />';
    ?>
    </div>
    <div class="right-col">
    <?php
        echo '<h2 class="our-story-title">';
        the_sub_field('our_story_title');
        echo '</h2>';
        the_sub_field('our_story_paragraph');
    ?>
    </div>
</section>
<?php
endif;
?>

<?php 
if( get_row_layout() == 'japanese_content' ):     
?>
<section class="our-story-content-japanese">

    <div class="left-col">
    <?php
        the_sub_field('our_story_japanese');
    ?>
    </div>
    <div class="right-col">
    <?php
    $image = get_sub_field('our_story_image');
    echo '<img src="' . $image . '" alt="' . $image . '" />';?>
    </div>

</section>

<?php
endif;

endwhile;

endif;
?>

<?php get_footer(); ?>
