<?php
/**
 * Template for displaying search forms
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#search-form-php
 *
 * @package david-jenkins
 */

$david_jenkins_search_id = wp_unique_id( 'search-form-' );
?>

<form role="search" method="get" class="search-form mx-auto flex w-full max-w-2xl gap-2" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="<?php echo esc_attr( $david_jenkins_search_id ); ?>" class="sr-only">
        <?php esc_html_e( 'Search for:', 'david-jenkins' ); ?>
    </label>
    <input
            type="search"
            id="<?php echo esc_attr( $david_jenkins_search_id ); ?>"
            class="search-field w-full rounded-lg border border-primary/15 bg-white px-3 py-2.5 text-sm text-primary transition focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-white"
            placeholder="<?php echo esc_attr_x( 'I am looking for &hellip;', 'placeholder', 'david-jenkins' ); ?>"
            value="<?php echo get_search_query(); ?>"
            name="s"
    />
    <button
            type="submit"
            class="search-submit flex-shrink-0 rounded-lg bg-accent px-5 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-red-700 focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-white"
    >
        <?php esc_html_e( 'Search', 'david-jenkins' ); ?>
    </button>
</form>