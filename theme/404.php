<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package david-jenkins
 */

get_header();
?>

	<section id="primary">
		<main id="main" class="mx-auto flex max-w-content flex-col items-center px-5 py-12 text-center lg:px-10">

			<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-4 text-accent" aria-hidden="true" focusable="false"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>

			<p class="text-sm font-semibold tracking-widest text-accent uppercase"><?php esc_html_e( 'Error 404', 'david-jenkins' ); ?></p>

			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Page Not Found', 'david-jenkins' ); ?></h1>
			</header><!-- .page-header -->

			<div <?php david_jenkins_content_class( 'page-content' ); ?>>
				<p class="mb-8 text-muted-foreground"><?php esc_html_e( 'This page could not be found. It might have been removed or renamed, or it may never have existed.', 'david-jenkins' ); ?></p>

				<?php get_search_form(); ?>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mt-6 inline-block rounded-lg border border-primary/15 px-5 py-2.5 text-sm font-semibold text-primary no-underline transition-colors hover:border-accent hover:text-accent focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-white">
					<?php esc_html_e( 'Back to Homepage', 'david-jenkins' ); ?>
				</a>
			</div><!-- .page-content -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
