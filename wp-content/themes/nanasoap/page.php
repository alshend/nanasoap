<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nanasoap
 */

get_header();
?>

	<div class="page-template-container">
		<main class="page-template-wrapper">
		<?php
            $current_page_slug = get_query_var('pagename');
            get_template_part('/template-parts/custom-page-templates/template', $current_page_slug );
        ?>
		</main>
	</div><!-- .page-template-container -->

<?php
get_footer();
