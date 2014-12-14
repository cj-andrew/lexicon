# Lexicon Theme - Development Version

This is an example child theme for developers and designers to use alongside the Saga parent theme.  It was created to facilitate child theme development by making it as easy and painless as possible.  In fact, some great designers can make a child theme in a couple of hours, possibly even less than one hour.  It really just depends on skill level, imagination, and following the system.

The readme is available to give you a solid overview of how to create child themes to submit WordPress.org.  While I can give you some information, I cannot teach you how to be a great designer.  That comes with practice and patience.  This sample child theme should be documented sufficiently enough for anyone with an intermediate level of knowledge to complete a custom child theme.  Some beginners with a thirst for becoming a theme author can probably do some cool stuff too.

## Understanding Saga

The Saga parent theme was created as a theme specifically for writers.  As a currently-published tech author and someone who hopes to become a novelist, I wanted to design a theme that'd make me feel comfortable sharing my stories.

Child themes should ultimately be designed with that goal in mind.  Content is definitely king, but it doesn't mean that it can't be put together into a nice package.

## Download Saga

You can grab a copy of the Saga parent theme in one of three methods:

* ZIP File: http://wordpress.org/themes/saga
* SVN repo: https://themes.svn.wordpress.org/saga/1.0.2
* Git Repo: https://github.com/justintadlock/saga

Be sure to do a **RECURSIVE** clone if using the GitHub version.  Otherwise, you will not get all the theme files and will run into a nasty fatal error if trying to use the theme.

## Recommended plugins

The [Subtitles plugin](http://wordpress.org/plugins/subtitles) is an integral part of this theme's design. I highly recommend using it during the design process just to see how subtitles look.

## Designing a child theme

If you're not already familiar with my child theme development philosophy, you should read "[Designing the box](http://themehybrid.com/weblog/designing-the-box)," which is an article that explains it in more detail and will greatly benefit you when trying to create a child theme for Saga.

Saga allows you to design a unique child with just a little bit of code in your child theme's `functions.php` file.  It works by allowing you to alter specific customizable items to set your child theme apart.  These items are:

* Custom Header (WP feature)
* Custom Background (WP feature)
* Header Icon
* Menu Color
* Primary Color

These are all items that your theme users will be able to choose via the Customizer.  What you'll be doing is setting up defaults to make your theme unique.

By altering all or just a few of these items, you can create a vast array of unique designs from the same parent theme.  If you open the `functions.php` file, each item is documented.  Use what you need.  Discard the rest.

You may also utilize the `style.css` file if you need to alter specific things within the theme.  Be sure to read the notes within that file for more specifics.

Mostly, have fun and create something cool!

## Packaging your theme

If you want to submit your theme to WordPress.org (you should!), you'll need to make sure you meet all of the [theme review guidelines](https://make.wordpress.org/themes/handbook/review/).  This is non-optional.

### Licensing

Please make sure you follow the [licensing guidelines](https://make.wordpress.org/themes/handbook/review/required/#licensing).  This includes making sure any images (even those in your screenshot) are GPL-compatible.

### Translations

Internationalization is a major part of the theme development process.  All child themes should have a `/languages/theme-slug.pot` file.  Even if your theme doesn't add new strings, the `style.css` headers should be translatable.

If you're unfamiliar with this process, here are two tutorials for creating a POT file:

* https://foxnet-themes.fi/2013/07/07/creating-pot-file-for-your-theme-or-plugin
* http://ottopress.com/2013/language-packs-101-prepwork

WordPress.org doesn't require a POT file, but it's always a nice-to-have feature.

### Remove unused stuff

Be sure to remove any unused items from the sample child theme folder.  There are quite a few developer comments that shouldn't be packaged in the final product.  Basically, if it's not used, don't leave it in your final theme.

You should even overwrite all the text in this file and replace it with text relevant to your theme.

### Theme name, slug, URL

Your theme name must be available at WordPress.org.  Otherwise, you can't use it.  You can use [this list](http://themes.svn.wordpress.org) to see the available names.

Your theme slug should match your theme name.  So, if your theme name is "Super Mario", any and all functions should be prefixed with `super_mario_`.  Your theme folder name should be `super-mario`.

### Get in touch

If you need to contact me, you can post on the Make.Themes blog in the comments, ping `@greenshady` on Slack, or even shoot me an email at `justin@justintadlock.com`.