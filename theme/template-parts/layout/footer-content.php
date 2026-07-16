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
	<div class="max-w-7xl mx-auto px-5 lg:px-10 py-12">
		<div class="grid md:grid-cols-3 gap-10">
			<div>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/david-jenkins-logo-with-background.jpg" alt="David Jenkins for Cheshire County Attorney" class="h-30 w-auto object-contain mb-4">

				<p class="text-blue-200 text-sm leading-relaxed">Fighting for justice, safety, and accountability in Cheshire County, New Hampshire.</p>
				<a href="https://www.facebook.com/DavidJenkins4CheshireCountyAttorney" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 mt-4 text-blue-300 hover:text-white text-sm transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Follow on Facebook
				</a>
			</div>
			<div>
				<h4 class="text-white font-semibold text-sm tracking-widest uppercase mb-4">Quick Links</h4>
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
				<h4 class="text-white font-semibold text-sm tracking-widest uppercase mb-4">Contact</h4>
				<div class="space-y-3">
					<div class="flex items-center gap-2 text-blue-200 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook text-blue-400 flex-shrink-0"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg><a href="https://www.facebook.com/DavidJenkins4CheshireCountyAttorney" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">DavidJenkins4CheshireCountyAttorney</a>
					</div>
					<div class="flex items-center gap-2 text-blue-200 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin text-blue-400 flex-shrink-0"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg><span>Cheshire County, New Hampshire</span></div>
				</div>
				<div class="mt-6"><a class="bg-accent text-white text-sm font-semibold px-5 py-2.5 rounded hover:bg-red-700 transition-colors tracking-wide inline-block" href="/donate" data-discover="true">Donate Now</a></div>
			</div>
		</div>
		<div class="mt-10 pt-6 border-t border-white/15 flex flex-col md:flex-row justify-between items-center gap-4">
			<p class="text-blue-300 text-xs">
				<?php printf( esc_html__( 'Copyright &copy; %1$s %2$s', 'david-jenkins' ), esc_html( gmdate( 'Y' ) ), '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . esc_html( get_bloginfo( 'name' ) ) . '</a>' ); ?>
			</p>
			<p class="text-blue-400 text-xs">Democrat · Cheshire County, New Hampshire</p>
		</div>
	</div>
</footer><!-- #colophon -->
