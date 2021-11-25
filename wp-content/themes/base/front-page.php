<?php get_header(); ?>
<?php get_search_form(); ?>
<?php get_sidebar(); ?>
<?php bloginfo(); ?>
front page
<div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
<?php get_template_part('templates/section', 'page'); ?>
<?php echo get_template_directory_uri(); ?>
<?php
$post = $wp_query->post;
if ( is_category( '9' ) ) {
    get_template_part( 'single2' ); // looking for posts in category with ID of '9'
} else {
    get_template_part( 'single1' ); // put this on every other category post
}
?>
<?php get_footer(); ?>