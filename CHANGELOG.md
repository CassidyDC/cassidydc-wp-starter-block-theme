# Changelog for CassidyDC WP Starter Block Theme

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

<!-- ## [Unreleased] -->

## [2.2.0] - 2025-02-01

### Changed

-   Added local development tooling files to .gitignore
-   Refactored declaration for `$last_prop` dynamic variable in `assets-process.php`.
-   Refactored PHP file with updated names (namespaces, slugs, text-domains, etc) and types with PHPStan.
-   Replaced deprecated `@import` rule with `@use` in SCSS files.
-   Updated $schema version in `theme.json` for WP v6.7
-   Updated config function names in `assets-config.php`, `assets-enqueue.php`, and `assets-register.php` for clarity.
-   Updated default page template file (`/templates/page.html`).
-   Updated theme's screenshot.png file with name update.

## [2.1.0] - 2024-11-24

### Added

-   Added theme `screenshot.png`.
-   Added theme build files.

### Changed

-   Updated @wordpress/script package and npm overrides for packages with vulnerability.

## [2.0.0] - 2023-09-26

### Changed

-   Updated theme for enterprise-level development with WordPress v6.6, including full linting, formatting, and build processes.
-   Updated `theme.json` with all default top level settings available for WP v6.6.

## [1.0.0] - 2023-07-23

### Added

-   Starter theme files with all block options set to false. Allowing you to turn on only what you need for a clean editor experience.
