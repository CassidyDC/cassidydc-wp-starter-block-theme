# README for CassidyDC WP Starter Block Theme

| Table of Contents                                                     |
| --------------------------------------------------------------------- |
| [Overview](#overview)                                                 |
| [Quick Start Guide](#quick-start-guide)                               |
| [Learning Block Theme Development](#learning-block-theme-development) |
| [What's New?](#whats-new)                                             |
| [Issues?](#issues)                                                    |

## Overview

This is a starter Block Theme for WordPress developers to build a custom, enterprise-level theme. To get the most out of it, you'll need in-depth familiarity with [WordPress Block Theme development](https://developer.wordpress.org/themes/).

For those less familiar with Block Theme development, I provide a few guidelines to upgrade your development skills in the [Learning Block Theme Development](#learning-block-theme-development) section below.

## Quick Start Guide

### 1. Clone the CassidyDC Starter Theme locally

In your _wp-content/themes_ directory, run `git clone git@github.com:jacobcassidy/wordpress-starter-block-theme.git`.

### 2. Create your remote git repo and connect it to your local repo

If you use GitHub, create a new remote repo there and then update your local repo to connect with it by running: `git remote set-url origin <new-url>`. Make sure to replace `<new-url>` with your actual GitHub URL, such as `git@github.com:username/new-repository.git` or `https://github.com/username/new-repository.git`.

You can confirm you're connected to the correct remote repo by running `git remote -v`.

### 3. Replace the theme's placeholder text

When you rename the theme to start your custom development, do a global **search and replace** in your code editor to replace the following texts _(keep the same formatting of lower/uppercase letters in your replacement text)_:

| Text to Replace                    | Type             | Used In             |
| ---------------------------------- | ---------------- | ------------------- |
| `CassidyDC\WPStarterBlockTheme`    | Namespace        | All PHP files       |
| `cassidydc-wp-starter-block-theme` | Slug/Text Domain | Multiple file types |
| `CassidyDC WP Starter Block Theme` | Theme Name       | `style.css`         |
| `cassidydc`                        | `HANDLE_PREFIX`  | `functions.php`     |

### 4. Install the development packages

In your theme's root directory, run `npm i`. This will install the packages and scripts listed in `package.json`. These packages and scripts are used to format, lint, and build your theme files using ESLint, Prettier, Stylelint, Webpack, and more (it's useful to have the [ESlint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint), [Prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode), and [Stylelint](https://marketplace.visualstudio.com/items?itemName=stylelint.vscode-stylelint) extensions installed if you use [Visual Studio Code](https://code.visualstudio.com/)).

To run a script listed in _package.json_, start the command with `npm run`.

For example:

-   `npm run build` will build your files once for production.
-   `npm run start` will continually watch for any file changes and automatically build them as development files.
-   `npm run lint:css` will lint your css and scss files for any code standard issues or errors.

These scripts come from the [@wordpress/scripts](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/) package.

### 5. Install other VSCode extensions (optional)

Other Visual Studio Code extensions you may find useful in your development (excluding those mentioned above) are:

-   [Alphabetical Sorter](https://marketplace.visualstudio.com/items?itemName=ue.alphabetical-sorter) (sorts lines of code alphabetically, such as CSS properties)
-   [Browser Refresh](https://marketplace.visualstudio.com/items?itemName=fabiospampinato.vscode-browser-refresh) (refreshes your browser window without leaving VSCode so you can see the latest code changes)
-   [Cassidy Dark Theme](https://marketplace.visualstudio.com/items?itemName=jacobcassidy.cassidy-dark) (a theme I developed for my personal use)
-   [Code Spell Checker](https://marketplace.visualstudio.com/items?itemName=streetsidesoftware.code-spell-checker) (catches spelling errors before you commit your code)
-   [Color Highlight](https://marketplace.visualstudio.com/items?itemName=naumovs.color-highlight) (colorizes hex codes in CSS and HTML)
-   [CSS Nesting Syntax Highlighting](https://marketplace.visualstudio.com/items?itemName=jacobcassidy.css-nesting-syntax-highlighting) (adds missing syntax colorization when using the CSS nesting style)
-   [Git Blame](https://marketplace.visualstudio.com/items?itemName=waderyan.gitblame) (shows whom committed the code you're reviewing)
-   [PHP DocBlocker](https://marketplace.visualstudio.com/items?itemName=neilbrayfield.php-docblocker) (creates boilerplate DocBlocks for you to fill in)
-   [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client) (helps you be more productive while coding in PHP)
-   [PHP Sniffer & Beautifier](https://marketplace.visualstudio.com/items?itemName=ValeryanM.vscode-phpsab) (we use this for formatting PHP files)
-   [Version Lens](https://marketplace.visualstudio.com/items?itemName=pflannery.vscode-versionlens) (shows you the latest versions available for a package, such as in package.json)

## Learning Block Theme Development

### What is a WordPress Block Theme?

In a nutshell, it's WordPress' native replacement for page-builder plugins such as [Elementor](https://elementor.com/), [Divi](https://www.elegantthemes.com/gallery/divi/), [Beaver Builder](https://www.wpbeaverbuilder.com/), and [WPBakery](https://wpbakery.com/). The WordPress Core team created it to allow WordPress users to build websites with no-code and for WordPress to compete with the likes of [Wix](https://www.wix.com/), [Squarespace](https://www.squarespace.com/), and other no-code website-building platforms.

A WordPress Block Theme uses an UI editor called the [Block Editor](https://developer.wordpress.org/block-editor/), which uses components called... wait for it... "[Blocks](https://developer.wordpress.org/Block-editor/explanations/architecture/key-concepts/#Bbocks)". These Blocks are like legos used to create pages and reusable design patterns (which are multiple Blocks combined). The Block system is very flexible in allowing both no-code WordPress users and software developers to modify it for their uses.

For an official explanation, read [WordPress' Key Concepts Explanations](https://developer.wordpress.org/block-editor/explanations/architecture/key-concepts/).

### Wait, if a Block Theme can be created with no-code, what would a company need a software engineer for?

Out-of-the-box, WordPress has a Block library with dozens of core Blocks (see the [Core Blocks Reference](https://developer.wordpress.org/block-editor/reference-guides/core-blocks/)) which can be used to build a complete website. These core Blocks have minimum styles applied to them and can be modified in the WordPress Block Editor without knowing any code.

However, by default, the no-code Block Editor is both overloaded with options and limited in customization abilities (as are all page-builders, to try to be all things for all people). For this reason, companies usually want to have a custom Block Theme developed to their brand style.

This involves modifying core Blocks and patterns, creating new Blocks and patterns, and removing a glut of core options that makes editing non-intuitive and hard not to make a mess out of. This requires code, or more specifically, JavaScript, PHP, and React code, and a deep understanding of Block Theme development.

In other words, the default, no-code Block Editor is great for hobbyists and small business owners who like tinkering on their own website, or for agencies pumping out cookie-cutter brochure websites, but for an enterprise-level site that has specific needs, this is a no go.

### Developing a custom Block

When developing a Block (either for a theme such as this, or a plugin), there are three main types of builds you can make:

1. Customize an existing core Block to add or remove features.
2. Clone and extend an existing core Block as a new Block.
3. Create a brand new Block from scratch for a specific need.

For most custom Block development, you can build features using PHP or JavaScript. Since core development has shifted almost entirely to the JavaScript way, I recommend using JavaScript for most of your Block development. However, you'll still need to know PHP to be able to fully develop different aspects of Block Themes since many files such as patterns and functions still use PHP.

WordPress has a free [Block Editor handbook](https://developer.wordpress.org/block-editor/) to teach you basics of developing Blocks. They also have 2 free courses for learning how to develop WordPress themes:

1. [Beginner WordPress Developer](https://learn.wordpress.org/course/beginner-wordpress-developer/)
2. [Intermediate Theme Developer](https://learn.wordpress.org/course/intermediate-theme-developer/)

For deeper premium courses, you can go through the paid courses offered by WP Development Courses:

1. [Block Theme Academy](https://wpdevelopment.courses/courses/building-block-themes/?)
2. [Block Development Mastery](https://wpdevelopment.courses/courses/building-custom-blocks/)

### Learn JavaScript and React deeply for Block development

WordPress has traditionally been a PHP-based platform since its start, and while PHP is still used for the core functions, the Block Editor uses a modern paradigm of developing with JavaScript, or more specifically [React](https://react.dev/) , to create and render the Blocks.

Since React is a JavaScript library (or, debatably, a Framework), a Block Theme developer should have a strong foundation in JavaScript fundamentals. While expert JavaScript knowledge is not required to develop Blocks, you should be familiar with variables, data types, string methods, loops, and conditionals to get around well in React.

React uses a paradigm of combining HTML and JavaScript called [JSX](https://react.dev/learn/writing-markup-with-jsx), which is used in WordPress' Block development. Knowing the fundamentals of JavaScript and JSX will go a long way in developing new Blocks or modifying existing ones.

The best reference resource for JavaScript is [MDN](https://developer.mozilla.org/en-US/docs/Web/JavaScript). And you can learn modern React from the [official React website](https://react.dev/learn). Both are free and provide fantastic documentation for developers.

If you want to go deeper, there are many free and paid courses, such as [The Joy of React](https://www.joyofreact.com) (paid), [Epic React](https://www.epicreact.dev) (paid), [FreeCodeCamp](https://www.freecodecamp.org) (free), and [The Orin Project](https://www.theodinproject.com) (free). Or if you want to really master the fundamentals of programming and can dedicate 1000+ hours of study to do so, [Launch School](https://launchschool.com) (paid) has an amazing master-based curriculum with JavaScript.

## What's New?

View the [Changelog](https://github.com/jacobcassidy/wordpress-starter-block-theme/blob/main/CHANGELOG.md) to see what's new.

## Issues?

If you come across any issues, please feel free to [report them here](https://github.com/jacobcassidy/wordpress-starter-block-theme/issues). You are also welcome to [create a pull request](https://github.com/jacobcassidy/wordpress-starter-block-theme/pulls).
