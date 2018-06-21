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

if( get_row_layout() == 'japanese_content' ):     
?>

<section class="our-story-content-japanese">

    <?php
    $image = get_sub_field('our_story_image');
    ?>
    <div class="left-col" style="background-image: url(<?php echo $image; ?> )">
    </div>
    
    <div class="right-col">
    <?php
        echo '<h2 class="our-story-title">';
        the_sub_field('our_story_title');
        echo '</h2>';
        the_sub_field('our_story_japanese');
    ?>
    </div>
    

</section>
<?php
endif;
?>

<?php 
if( get_row_layout() == 'english_content' ):     
?>
<section class="our-story-content-english">
    <div class="left-col">
    <?php
        echo '</h2>';
        the_sub_field('our_story_paragraph');
    ?>
    </div>
    <?php
    $image = get_sub_field('our_story_image');
    ?>
    <div class="right-col" style="background-image: url(<?php echo $image; ?> )">

    </div>
</section>

<?php
endif;

endwhile;

endif;
?>


<section class="partner-links">
    <h2 class="partner-title">Partners</h2>

    <?php 
    if( have_rows('partners', 'option') ):?>
        <ul class="partner-list">
        <?php        
            while( have_rows('partners', 'option') ): the_row();
            if( get_row_layout() == 'partner_details' ): ?>
            <li class="partner-item">
            <a href="<?php the_sub_field('partner_link'); ?>" target="_blank">
                <div class="partner-logo">
                    <?php
                    $image = get_sub_field('partner_logo');
                    echo '<img src="' . $image['url'] . '" alt="' . $image . '" />';?>
                </div>
            </a>
            </li>
            <?php
            endif;
            endwhile;
            endif;
            ?>
        </ul>
            

</section>

<?php get_footer(); ?>
