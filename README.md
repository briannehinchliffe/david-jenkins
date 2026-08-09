David Jenkins
=============

A custom theme for David Jenkins, candidate for Cheshire County Attorney.

## Quickstart

### Installation

1. Move this folder to `wp-content/themes` in your local development environment
2. Run `npm install && npm run dev` in this folder
3. Activate this theme in your local WordPress installation

### Development

4. Run `npm run watch`
5. Add [Tailwind utility classes](https://tailwindcss.com/docs/utility-first) with abandon

### Deployment

6. Run `npm run bundle`
7. Upload the resulting zip file to your site using the "Upload Theme" button on the "Add Themes" administration page

Or [deploy with the tool of your choice](https://underscoretw.com/docs/deployment/#h-other-deployment-options)!

### Other useful scripts

* `npm run lint` / `npm run lint-fix` — ESLint + Prettier across the JS/CSS source
* `composer run php:lint` / `composer run php:lint:autofix` — PHPCS against WordPress Coding Standards (`phpcs.xml.dist`)
* `composer run php:lint:changed` — PHPCS scoped to unstaged git changes only
* `composer run make-pot` — regenerate the `.pot` translation template

Node `24.18.0` (see `.nvmrc`).

## Full Documentation

### Stack & Technologies

* **WordPress Core**: Theme v1.0.0 (Block/Hybrid Architecture using `theme.json` v3, no ACF — native `register_block_type` blocks only)
* **CSS Framework**: [Tailwind CSS](https://tailwindcss.com/) with `@tailwindcss/typography`, compiled via PostCSS from `tailwind.css` at the repo root into `theme/style.css` (frontend) and `theme/style-editor.css` (block editor)
* **Build System**: `_tw` CLI conventions + `esbuild` (bundles `javascript/script.js` and `javascript/block-editor.js` into `theme/js/*.min.js`)
* **Fonts**: Self-hosted Volkhov (serif) and Inter (sans-serif), in `theme/assets/fonts`

### Repo structure

```
theme/              The actual WordPress theme (this is what ships/deploys)
  blocks/           Native Gutenberg blocks (e.g. actblue-donation)
  inc/              template-tags.php, template-functions.php
  template-parts/   content/ (loop items, excerpts, empty states) and layout/ (header, footer)
  js/               Compiled output — don't hand-edit, esbuild overwrites it
  style.css         Compiled Tailwind output (frontend) — don't hand-edit
  style-editor.css  Compiled Tailwind output (block editor) — don't hand-edit
javascript/         esbuild source (script.js, block-editor.js) — edit here, not theme/js
tailwind/           Tailwind source — custom base/components/utilities layers live here
  custom/
    base.css        Global resets, focus-visible rings, prefers-reduced-motion, .sr-only
    components/
    utilities.css
tailwind.css         Tailwind entry point (imports the above + core Tailwind)
node_scripts/         Build helper scripts (zip.js, etc.)
```

### Key Custom Styling Features

* **Custom Palette & Fluid Typography**: Centralized in `theme.json` using primary blue (`#1B2B5E`), accent red (`#CC2028`), and light backgrounds (`#FAF8F2`).
* **Responsive Fixed Header**: Backdrop blur, mobile toggle drawer, and custom logo handling in `theme/template-parts/layout/header-content.php`. Nav breakpoint is `md:`, not `lg:` — keep the mobile toggle and desktop nav in sync if either changes.
* **Custom Block Extensions**: Utility extensions in `tailwind/custom/utilities.css` for timeline blocks (`.timeline-container`), framed campaign graphics (`.framed-image`), and priority grids (`.priority-item`).
* **ActBlue Donations block** (`theme/blocks/actblue-donation`): native block for preset/custom donation amounts, linking out to ActBlue. Custom-amount input has a proper `<label>`, and the dynamic amount display uses `aria-live="polite"`.
* **404 page** (`theme/404.php`): centered hero with icon, search form, and a "Back to Homepage" CTA.
* **Search & archive result cards** (`theme/template-parts/content/content-excerpt.php`): bordered cards with cropped thumbnail, title, meta row, excerpt, and "Read more" link — shared between `search.php` and `archive.php`.
* **Search results page** (`theme/search.php`): shows a result count above the list; `theme/searchform.php` provides the styled search input used there and anywhere else `get_search_form()` is called.

### Conventions

* **Content wrappers** (`entry-content`, `page-content`) get Tailwind Typography classes automatically via `david_jenkins_content_class()`, driven by the `DAVID_JENKINS_TYPOGRAPHY_CLASSES` constant in `functions.php`. This is meant for **full singular post/page bodies** — direct children get `padding-inline` + a constrained `max-width` (see `.entry-content > *` in `theme/style.css`) so long-form block content reads well at any width. **Don't reuse this class on excerpts or cards** — `content-excerpt.php` intentionally opts out of it for this reason.
* **Heading levels** are restricted to H2–H4 in the block editor — H1 is reserved for the theme's own title markup (`page-title`, `entry-title`), enforced via a custom H1-detection helper.
* **Screen-reader-only text** uses the `.sr-only` utility class (`tailwind/custom/base.css`), including a focus-visible "jump into view" variant for skip-link-style usage. `.screen-reader-text` (used on the custom-logo site title, and emitted by WP core's `the_posts_pagination()`) is aliased to the same styling.
* **Email addresses** in markup (e.g. the footer contact column) are obfuscated with WordPress's `antispambot()` rather than CSS-based tricks, which break for screen readers and copy/paste.

### Accessibility

WCAG 2.1 AA is a standing priority for this theme. Notable implementations:

* Skip link with a visible, focus-triggered "jump into view" state
* Global `focus-visible` outline treatment on links, inputs, textareas, selects, and `[tabindex="0"]` elements
* `prefers-reduced-motion` respected globally (animation/transition durations collapsed; `animate-bounce` adjusted)
* Semantic landmarks and enforced heading hierarchy (see Conventions above)
* Decorative SVGs and thumbnail links get `aria-hidden="true"` (plus `tabindex="-1"` where a visible, focusable title link already covers the same destination)
* Color palette contrast-checked against WCAG AA (lowest ratio in the current palette is ~5.5:1)
* Pagination (`.pagination`, `.page-numbers`, `.current`) is styled and keyboard/focus-visible accessible
* Mobile menu closes on Escape and returns focus to the toggle button — it does not yet trap Tab focus inside the panel while open, which is a different guarantee worth deciding on deliberately rather than assuming it's covered
