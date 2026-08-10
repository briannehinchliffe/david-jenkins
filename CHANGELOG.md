# Changelog

All notable changes to the **David Jenkins for Cheshire County Attorney** WordPress theme will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/), and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.0.3] - 2026-08-10

### Added
* Responsive styles for the `.timeline-item` component in `tailwind/custom/components/components.css`.


## [1.0.2] - 2026-08-10

### Changed
* `#content` padding on mobile to remove gap between header and hero on smaller breakpoints.


## [1.0.1] - 2026-08-10

### Removed
* `david_jenkins_post_thumbnail();` from `theme/template-parts/content/content-page.php`.

## [1.0.0] - 2026-08-10

### Added
* `theme/searchform.php` — dedicated, styled search form template (previously fell back to WordPress core's unstyled default markup wherever `get_search_form()` was called).
* Result count summary ("N results found") on the search results header in `theme/search.php`.
* Escape-key handler on the mobile nav toggle: closes the menu and returns focus to the toggle button.
* Accessible label (`aria-live="polite"`) on the ActBlue block's custom-amount input and dynamic donation-amount display.
* Obfuscated campaign email address in the footer contact column, using WordPress's `antispambot()`.
* Initial release of the custom theme built on the `_tw` Tailwind CSS starter framework.
* Global design system configuration in `theme.json` (v3 format), including custom color palette (Primary, Secondary, Accent, Background), custom spacing fluid clamp scales, and typography presets for Volkhov and Inter fonts.
* Responsive fixed header partial (`theme/template-parts/layout/header-content.php`) with dynamic admin bar offset, custom logo support, primary navigation menu, and mobile menu toggle state markup.
* Site footer partial (`theme/template-parts/layout/footer-content.php`) featuring active widget sidebar support, footer menu navigation, contact details, campaign donation CTA button, copyright info, and official campaign disclaimer.
* Page template partials (`theme/page.php` and `theme/template-parts/content/content-page.php`) integrated with template fallback functions and accessibility skip links.
* Extended component styling in `tailwind/custom/components/components.css` covering navigation hover states, admin bar offsets, and standard entry element boundaries.
* Custom block utilities in `tailwind/custom/utilities.css`, including:
	* `.wp-block-button` custom hover state variations (`is-style-fill-red`, `is-style-fill-white`, and `.btn-facebook`).
	* Custom media layouts: `.stagger-gallery`, `.framed-image`, and `.gradient-caption` image overlays.
	* Interactive components: `.featured-link` animated chevron indicator, `.timeline-container` vertical connector lines, and `.priority-item` grid column layouts.
* Native `ActBlue Donations` block (`theme/blocks/actblue-donation`) — no ACF, `register_block_type` only — for preset/custom donation amounts linking out to ActBlue.
* Accessibility and design-token cleanup pass:
	* Global `focus-visible` outline treatment on links, inputs, textareas, selects, and `[tabindex="0"]` elements.
	* `.sr-only` utility class (including a focus-visible "jump into view" variant for skip-link-style usage).
	* Site-wide `prefers-reduced-motion` support (animation/transition durations collapsed, scroll snapped to instant).
	* `box-sizing: border-box` reset and a branded `::selection` color.
	* `aria-hidden` on decorative SVGs; `aria-label` on the primary menu; focus styles on the mobile menu toggle.
	* `animate-bounce` utility adjusted for reduced-motion users.
	* Custom `david_jenkins_content_class()`-based H1-detection helper to keep heading hierarchy consistent between the editor and rendered output.

### Changed
* **404 template** (`theme/404.php`): rebuilt as a centered hero — icon, eyebrow label, page title, message, search form, and a "Back to Homepage" CTA.
* **Search/archive result cards** (`theme/template-parts/content/content-excerpt.php`): rebuilt as bordered cards with a cropped thumbnail, title, meta row (author/date/categories/comment count), excerpt, and a "Read more" link. Shared by `search.php` and `archive.php`.
* **Empty states** (`theme/template-parts/content/content-none.php`): centered layout with icon, reused for "no search results," "nothing found," and "no posts published yet."
* `theme/inc/template-functions.php`: split the `excerpt_more` filter off from `the_content_more_link`. Excerpts now end in a plain ellipsis instead of an appended "Continue reading" link, since the result card template now supplies its own "Read more" CTA — the two were rendering back-to-back.
* Font source types, color/border custom-property references, and hardcoded hex values corrected to use theme.json-defined variables throughout.
* External links (Facebook, ActBlue) standardized to `target="_blank"` without a redundant `rel` attribute mismatch.
* `fontFamily` usage standardized theme-wide; heading sizes, button padding, and line-height tuned and eventually moved out of `theme.json` into base styles for clearer overrides.
* Naming conventions standardized (e.g. `2XL` spacing/sizing slug), redundant/dead CSS removed (unused border-radius resets, commented-out blocks, unused sidebar registration), and PHPCS/linting cleanup passed across the codebase.
* Nav-menu current-item button color contrast hotfixed against the button variant it shared a class with.

### Fixed
* `content-none.php`: the search "no results" heading was rendering a nested/duplicate `<h1>`.
* `content-excerpt.php`: malformed markup on the sticky-post "Featured" badge.
* `content-excerpt.php`: the excerpt paragraph was misaligned relative to the title and footer — it was reusing the `entry-content` class (and its Tailwind Typography `prose` classes), meant for full singular post bodies, not a compact card. 
* .screen-reader-text alias added — previously referenced in header-content.php and emitted by WP core's the_posts_pagination() with no CSS definition, rendering fully visible instead of hidden. 
* the_posts_pagination() output (.pagination, .nav-links, .page-numbers, .current) now styled.
