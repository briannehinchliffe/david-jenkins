<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package david-jenkins
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'result-card mb-6 overflow-hidden rounded-lg border border-primary/15 bg-white' ); ?>>

	<?php if ( david_jenkins_can_show_post_thumbnail() ) : ?>
		<div class="result-card-thumb aspect-video overflow-hidden">
			<?php david_jenkins_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

	<div class="p-5 lg:p-6">
		<header class="entry-header">
			<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
				<span class="mb-2 inline-block rounded bg-accent px-2 py-0.5 text-xs font-semibold tracking-wide text-white uppercase"><?php esc_html_e( 'Featured', 'david-jenkins' ); ?></span>
			<?php endif; ?>
			<?php
			the_title(
				sprintf(
					'<h2 class="result-card-title text-xl leading-tight font-bold"><a class="text-primary no-underline transition-colors hover:text-accent" href="%s" rel="bookmark">',
					esc_url( get_permalink() )
				),
				'</a></h2>'
			);
			?>
		</header><!-- .entry-header -->

		<div class="entry-meta mt-2 mb-3 flex flex-wrap items-center gap-x-3 gap-y-1 text-sm text-muted-foreground">
			<?php david_jenkins_entry_meta(); ?>
		</div><!-- .entry-meta -->

		<div class="result-card-excerpt text-sm text-foreground">
			<?php the_excerpt(); ?>
		</div><!-- .result-card-excerpt -->

		<footer class="entry-footer mt-3">
			<a class="featured-link text-accent no-underline" href="<?php the_permalink(); ?>">
				<?php esc_html_e( 'Read more', 'david-jenkins' ); ?>
				<span class="sr-only"> <?php the_title(); ?></span>
			</a>
		</footer><!-- .entry-footer -->
	</div>

</article><!-- #post-${ID} -->
