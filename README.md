# Riverside Commons

A Drupal 10/11 arts centre website built as a frontend developer assessment project.

## Requirements

- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- [DDEV](https://ddev.readthedocs.io/en/stable/)

## Local Setup

### 1. Clone the repository

```bash
git clone https://github.com/rohit-mns/riverside-commons.git
cd riverside-commons
```

### 2. Configure DDEV

```bash
ddev config
```

### 3. Start DDEV

```bash
ddev start
```

### 4. Install dependencies

```bash
ddev composer install
```

### 5. Import database

```bash
ddev import-db --file=db.sql.gz
```

### 6. Extract files

**Windows (PowerShell):**
```powershell
Expand-Archive -Path files.zip -DestinationPath web/sites/default/files/
```

**Mac/Linux:**
```bash
unzip files.zip -d web/sites/default/files/
```

### 7. Import configuration

```bash
ddev drush cim -y
```

### 8. Clear cache

```bash
ddev drush cr
```

### 9. Open site

```bash
ddev launch
```

## Viewing the Site

Once the site is running, visit:
https://riverside-commons.ddev.site/programs

The main programs listing, category filter pills, pagination, and program detail pages are all accessible from `/programs`.

---

## Data Model & Architecture

Programs are structured as a custom **Program** content type with fields covering title, summary, hero image, description, schedule, pricing, instructor details, and category.

Categories (Studio Classes, Open Studios, Exhibitions, Youth Workshops) are managed as a **Taxonomy vocabulary** referenced via `field_category`. This keeps categories centralised and reusable — the same terms drive both the URL-based filter pills and the Related Programs contextual filter, so there is a single source of truth rather than duplicated hardcoded values.

### Views

Two Views were built:

**Programs listing** — a Page display at `/programs` and `/programs/{term_id}`, using a contextual filter on `field_category` to filter results by the URL segment. A Result Summary header provides a dynamic count that updates automatically as filters change.

**Related Programs** — a Block display using a taxonomy relationship and two contextual filters: one to match the current node's category, and one to exclude the current node by NID. This block is rendered directly in `node--program.html.twig` via `drupal_view()`, passing the term ID and node ID as arguments.

---

## Theme

Custom theme: `web/themes/custom/riverside`

Built on Drupal's **Olivero** base theme — extended with custom HTML, CSS, and Twig overrides. No JavaScript frameworks were used; the only custom JS is a small inline script for the mobile menu toggle.

Template overrides:
- `page.html.twig` — site-wide layout, programs intro section, category pills, CTA
- `node--program.html.twig` — full program detail page including sidebar and related programs block

---

## Accessibility Decisions

- All interactive elements (pills, cards, buttons) have visible focus states via CSS
- Program cards use `aria-label` on the wrapping anchor to give screen readers a meaningful label rather than reading the full card content
- Colour contrast was checked against WCAG AA — muted grey text on white backgrounds meets the 4.5:1 ratio requirement
- The design used placeholder `#` hrefs throughout; these were retained as assumptions since the brief did not define destination pages for navigation links

---

## SEO & Performance Notes

- Semantic HTML throughout — `<article>`, `<section>`, `<aside>`, `<nav>`, `<header>`, `<footer>` used appropriately
- Single `<h1>` per page with correct heading hierarchy throughout
- Images use Drupal's managed file system with `loading="lazy"` on listing cards to defer offscreen images
- `vendor/` and generated CSS/JS/PHP aggregates are excluded from version control via `.gitignore`
- Drupal's built-in CSS/JS aggregation handles performance in production

---

## Assumptions for Undefined States

**Hover** — Card titles change colour on hover to signal interactivity. Pill links shift to a filled dark background on hover.

**Focus** — Browser default focus outlines are preserved and enhanced via CSS for keyboard navigation.

**Empty state** — If a category has no programs, the View renders no cards. No empty state message was defined in the brief so none was added — this would be a next step.

**Loading** — No explicit loading state was designed; Drupal's standard page load behaviour applies.

---

## Questions & Flags

- The brief did not specify behaviour for pagination when a category filter is active — pagination was retained as configured in the View and the count updates accordingly.
- Hover and focus states for the Register and Add to Wishlist buttons were not defined in the design — consistent dark fill and border treatments matching the rest of the UI were applied.
- The instructor image in the design appeared circular but no specific dimensions were given — a fixed size with `border-radius: 50%` was used.
- No empty or error states were defined for the Related Programs block — if fewer than three related programs exist in a category, the block renders however many are available.
- Navigation and footer links point to `#` as destination pages were out of scope for this assessment.

---

## Next Steps

Given more time I would:

- Add proper destination URLs to all navigation and footer links
- Build out the About, Get Involved, Events, and Contact pages
- Add an empty state component for filtered Views with no results
- Implement a membership and registration flow for the Register button
- Add structured data markup (Schema.org Course) for SEO
- Write automated tests for the contextual filter logic
- Add proper error handling for the Related Programs block when no results exist

---

## AI Use

Claude (Anthropic) was used during this project as a development assistant — primarily for Drupal-specific Twig syntax, Views configuration guidance, and CSS debugging. All architectural decisions, template structure, and implementation were my own; the AI was used in the same way one might use documentation or Stack Overflow.