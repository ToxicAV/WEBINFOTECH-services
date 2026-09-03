# Meridian Home Services — Block (FSE) Theme

This is a rebuild of the original React-in-WordPress theme as a genuine
**block theme**. Every section is now real block markup you can edit in
**Appearance → Editor** (or **Site Editor**) — headings, text, images,
links, colors — no code required for everyday content changes.

## What changed from the classic version

The original theme mounted a full client-side React app into a single
`<div id="root">`; none of the content lived in WordPress. This version
replaces that with:

- **`theme.json`** — the design system (colors, fonts, spacing) as native
  block-editor settings, taken from the original Tailwind tokens
  (`ink`, `canvas`, `brass`, `teal`, etc.).
- **`templates/`** and **`parts/`** — real HTML block templates
  (`front-page.html`, `page.html`, `index.html`, `parts/header.html`,
  `parts/footer.html`).
- **`patterns/`** — one editable pattern per section: `hero.php`,
  `trust-bar.php`, `categories-steps.php`, `estimator-section.php`,
  `how-it-works.php`, `cta.php`. Open any of these in the Site Editor and
  every heading, paragraph, stat, and button is a normal block.
- **`blocks/estimator/`** — a real custom **interactive** block
  ("Meridian: Estimator") for the instant quote tool. It's a *dynamic*
  block: `render.php` outputs the markup and `view.js` (plain JavaScript,
  no React, no build step) drives the live price calculation — the same
  formula as the original (`base price × scope multiplier × ZIP factor`).
  You can insert, delete, or move this block like any other.

## What to know before you edit

- **Interactivity that stayed interactive:** the Estimator (live pricing)
  and the header's mobile menu (via the native Navigation block) still
  work without any code.
- **Interactivity that was simplified to static content:** a few sections
  in the original used JS-driven hover/tab effects purely for visual
  flourish (the trust-stat cards that expanded on hover, the two
  "how it works" tab selectors that swapped an active panel). Converting
  those to *block-editable* content meant trading the tab/hover animation
  for all steps being visible at once — the copy and structure are
  unchanged, just always-shown instead of toggled. If you want that exact
  interaction back, it would need another small custom block (similar to
  the Estimator) — happy to build one, just say which section.
- **Newsletter signup form:** kept as a plain HTML form (Custom HTML
  block) so the layout matches, but it isn't wired to an email service —
  connect it to whatever you use (Mailchimp, etc.) via a plugin or a
  small snippet.
- **Header/mega-menu:** rebuilt using WordPress's native **Navigation**
  block instead of the original custom React mega-menu, since that's the
  WordPress-native, block-editable way to manage a site menu (add/reorder
  items from Appearance → Editor → Navigation, no code).

## Installing

1. Zip this `meridian-home-services` folder.
2. WordPress admin → **Appearance → Themes → Add New → Upload Theme**.
3. Activate **Meridian Home Services**.
4. Go to **Appearance → Editor** to edit any section, or click
   **Edit** directly on the front end.

## `react-source-reference/`

The original React project source is kept here for reference only — it's
not loaded by the theme. If you'd rather keep a section as a fully custom
interactive experience instead of native blocks, this is what it was
built from.
