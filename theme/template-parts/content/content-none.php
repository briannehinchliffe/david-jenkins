<?php
/**
 * Template part for displaying a message when posts are not found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package david-jenkins
 */

?>

<section class="mx-auto flex max-w-content flex-col items-center px-5 py-12 text-center lg:px-10">

	<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-4 text-accent" aria-hidden="true" focusable="false"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>

	<header class="page-header">
		<?php if ( is_search() ) : ?>

			<?php
			printf(
			/* translators: 1: search result title. 2: search term. */
				'<h1 class="page-title">%1$s <span class="text-accent">%2$s</span></h1>',
				esc_html__( 'No results for:', 'david-jenkins' ),
				esc_html( get_search_query() )
			);
			?>

		<?php else : ?>

			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'david-jenkins' ); ?></h1>

		<?php endif; ?>
	</header><!-- .page-header -->

	<div <?php david_jenkins_content_class( 'page-content' ); ?>>
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :
			?>

			<p class="mb-4 text-muted-foreground">
				<?php esc_html_e( 'Your site is set to show the most recent posts on your homepage, but you haven&rsquo;t published any posts.', 'david-jenkins' ); ?>
			</p>

			<p>
				<a class="featured-link text-accent no-underline" href="<?php echo esc_url( admin_url( 'edit.php' ) ); ?>">
					<?php
					/* translators: 1: link to WP admin new post page. */
					esc_html_e( 'Add or publish posts', 'david-jenkins' );
					?>
				</a>
			</p>

		<?php
		elseif ( is_search() ) :
			?>

			<p class="mb-6 text-muted-foreground">
				<?php esc_html_e( 'Your search generated no results. Please try a different search.', 'david-jenkins' ); ?>
			</p>

			<?php
			get_search_form();
		else :
			?>

			<p class="mb-6 text-muted-foreground">
				<?php esc_html_e( 'No content matched your request.', 'david-jenkins' ); ?>
			</p>

			<?php
			get_search_form();
		endif;
		?>
	</div><!-- .page-content -->

</section>
