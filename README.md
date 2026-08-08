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
7. Upload the resulting zip file to your site using the “Upload Theme” button on the “Add Themes” administration page

Or [deploy with the tool of your choice](https://underscoretw.com/docs/deployment/#h-other-deployment-options)!

## Full Documentation

### Stack & Technologies

* **WordPress Core**: Theme v1.0.0 (Block/Hybrid Architecture using `theme.json` v3)
* **CSS Framework**: [Tailwind CSS](https://tailwindcss.com/) with `@tailwindcss/typography`
* **Build System**: `_tw` CLI scripts + `esbuild`
* **Fonts**: Self-hosted Volkhov (serif) and Inter (sans-serif)

### Key Custom Styling Features

* **Custom Palette & Fluid Typography**: Centralized in `theme.json` using primary blue (`#1B2B5E`), accent red (`#CC2028`), and light backgrounds (`#FAF8F2`).
* **Responsive Fixed Header**: Backdrop blur, mobile toggle drawer, and custom logo handling in `theme/template-parts/layout/header-content.php`.
* **Custom Block Extensions**: Utility extensions in `tailwind/custom/utilities.css` for timeline blocks (`.timeline-container`), framed campaign graphics (`.framed-image`), and priority grids (`.priority-item`).

## ActBlue Donation Block

A custom server-side rendered (SSR) Gutenberg block that allows users to select preset donation amounts or specify a custom amount before redirecting to an external ActBlue donation page.

### Block Architecture

* **`block.json`**: Registers block metadata, attributes (`actblueUrl`, `disclaimerText`), and asset enqueues (`render.php`, `view.js`, `editor.js`).
* **`render.php`**: Handles dynamic server-side rendering on both the front end and in the WordPress block editor.
* **`view.js`**: Front-end interactive script that listens for radio selection or custom amount changes and dynamically updates the ActBlue destination URL and UI indicators.
* **`editor.js` & `editor.asset.php`**: Editor canvas integration using `@wordpress/server-side-render` wrapped in `@wordpress/components` `<Disabled>` component and `useBlockProps`. This prevents form controls from swallowing click events in the admin canvas while ensuring direct block selection inside nested layouts (such as Columns).

### Key Features & Configuration

* **Theme Color Palette Integration**: Utilizes theme custom CSS variables (`--color-primary`, `--color-secondary`, `--color-accent`, `--color-muted`, `--color-muted-foreground`) mapped from `theme.json`.
