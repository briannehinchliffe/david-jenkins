<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package david-jenkins
 */

?>

<footer id="colophon" class="bg-primary text-white">
	<div class="h-1.5 bg-accent"></div>
	<div class="mx-auto max-w-content px-5 py-12 lg:px-10">
		<div class="grid gap-10 md:grid-cols-3">
			<div>
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
					<aside role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'david-jenkins' ); ?>">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</aside>
				<?php endif; ?>
			</div>
			<div>
				<h4 class="mb-4 text-sm font-semibold tracking-widest text-white uppercase"><?php esc_html_e( 'Quick Links', 'david-jenkins' ); ?></h4>
				<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
					<nav aria-label="<?php esc_attr_e( 'Footer Menu', 'david-jenkins' ); ?>">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_class'     => 'footer-menu',
								'depth'          => 1,
							)
						);
						?>
					</nav>
				<?php endif; ?>
			</div>
			<div>
				<h4 class="mb-4 text-sm font-semibold tracking-widest text-white uppercase"><?php esc_html_e( 'Contact', 'david-jenkins' ); ?></h4>
				<div class="space-y-3">
					<div class="flex items-center gap-2 text-sm text-blue-200"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook flex-shrink-0 text-blue-400"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg><a href="https://www.facebook.com/DavidJenkins4CheshireCountyAttorney" target="_blank" rel="noopener noreferrer" class="transition-colors hover:text-white">DavidJenkins4CheshireCountyAttorney</a></div>
					<div class="flex items-center gap-2 text-blue-200 text-sm"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail text-blue-400 flex-shrink-0"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg><a href="<?php echo antispambot( 'mailto:jenkins4countyattorney@gmail.com' ); ?>" class="hover:text-white transition-colors"><?php echo antispambot( 'jenkins4countyattorney@gmail.com' ); ?></a></div>
					<div class="flex items-center gap-2 text-sm text-blue-200"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin flex-shrink-0 text-blue-400"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg><span><?php esc_html_e( 'Cheshire County, New Hampshire', 'david-jenkins' ); ?></span></div>
				</div>
				<div class="mt-6"><a class="inline-block rounded bg-accent px-5 py-2.5 text-sm font-semibold tracking-wide text-white no-underline transition-colors hover:bg-red-700" href="<?php echo esc_url( home_url( '/donate/' ) ); ?>"><?php esc_html_e( 'Donate Now', 'david-jenkins' ); ?></a></div>
			</div>
		</div>
		<div class="mt-10 flex flex-col items-center justify-between gap-4 border-t border-white/15 pt-6 md:flex-row ">
			<p class="flex items-center gap-1 text-xs text-blue-300">
				<?php printf( esc_html__( 'Made with %1$s by %2$s', 'david-jenkins' ), '<span class="text-accent">&hearts;</span>', '<a href="' . esc_url( 'https://briannehinchliffe.com/' ) . '" target="_blank" class="hover:text-blue-300 no-underline">' . esc_html( 'Brianne Hinchliffe' ) . '</a>' ); ?>
			</p>
			<p class="text-xs text-blue-300">
				<?php printf( esc_html__( 'Copyright &copy; %1$s %2$s', 'david-jenkins' ), esc_html( gmdate( 'Y' ) ), '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home" class="hover:text-blue-300 no-underline">' . esc_html( get_bloginfo( 'name' ) ) . '</a>' ); ?>
			</p>
			<p class="text-xs text-blue-300"><?php esc_html_e( 'Democrat · Cheshire County, New Hampshire', 'david-jenkins' ); ?></p>
		</div>
	</div>
</footer><!-- #colophon -->
