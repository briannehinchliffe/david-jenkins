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


* **Responsive Fixed Header**: Backdrop blur, mobile toggle drawer, and custom logo handling in `header-content.php`.


* **Custom Block Extensions**: Utility extensions in `utilities.css` for timeline blocks (`.timeline-container`), framed campaign graphics (`.framed-image`), and priority grids (`.priority-item`).
