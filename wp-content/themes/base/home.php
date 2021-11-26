<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="alert alert-primary" role="alert">
	<i class="fas fa-coffee"></i>
    front page
</div>
<!-- <?php get_template_part('templates/section', 'page'); ?> -->
<?php
$post = $wp_query->post;
if ( is_category( '9' ) ) {
    get_template_part( 'single2' ); // looking for posts in category with ID of '9'
} else {
    get_template_part( 'php' ); // put this on every other category post
}
?>
<?php get_footer(); ?>