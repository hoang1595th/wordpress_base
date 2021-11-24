<!-- <?php get_header(); ?>
<?php get_search_form(); ?>
<?php get_sidebar(); ?>
font-page
<?php get_footer(); ?> -->
<?php
if ( is_category( '9' ) ) {
    get_template_part( 'single2' ); // looking for posts in category with ID of '9'
} else {
    get_template_part( 'single1' ); // put this on every other category post
}
?>