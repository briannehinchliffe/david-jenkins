# Changelog

All notable changes to the **David Jenkins for Cheshire County Attorney** WordPress theme will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/), and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.0] - 2026-08-05

### Added
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
- **ActBlue Donation Block**: Created custom dynamic block with preset amount selection ($10, $25, $50, $100, $250, $500) and custom input support.
- **Editor Canvas Selection Support**: Registered `editor.js` wrapper utilizing `useBlockProps` and `<Disabled>` to allow seamless block selection and movement within nested column layouts in the Gutenberg editor.
- **Accessibility Enhancements**:
	- Implemented sitewide dual-ring focus indicators (`outline` + `box-shadow`) to maintain WCAG 2.2 focus contrast across solid background blocks (`.bg-accent`, `.bg-primary`).
