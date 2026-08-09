<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package david-jenkins
 */

get_header();
?>

	<section id="primary">
		<main id="main" class="mx-auto max-w-content px-5 py-10 lg:px-10">

			<?php if ( have_posts() ) : ?>

				<header class="page-header mb-8 text-center">
					<p class="mb-2 text-sm font-semibold tracking-widest text-accent uppercase">
						<?php
						printf(
						/* translators: %s: number of search results found. */
							esc_html( _n( '%s result found', '%s results found', $wp_query->found_posts, 'david-jenkins' ) ),
							esc_html( number_format_i18n( $wp_query->found_posts ) )
						);
						?>
					</p>
					<?php
					printf(
					/* translators: 1: search result title. 2: search term. */
						'<h1 class="page-title">%1$s <span class="text-accent">%2$s</span></h1>',
						esc_html__( 'Search results for:', 'david-jenkins' ),
						esc_html( get_search_query() )
					);
					?>
				</header><!-- .page-header -->

				<div class="search-results-list">
					<?php
					// Start the Loop.
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content/content', 'excerpt' );

						// End the loop.
					endwhile;
					?>
				</div><!-- .search-results-list -->

				<?php
				// Previous/next page navigation.
				david_jenkins_the_posts_navigation();

			else :

				// If no content is found, get the `content-none` template part.
				get_template_part( 'template-parts/content/content', 'none' );

			endif;
			?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
