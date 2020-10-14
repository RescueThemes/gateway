=== Gateway WordPress Theme ===
Contributors: rescuethemes
Donate link: https://rescuethemes.com
Tags: light, white, gray, orange, three-columns, responsive-layout, featured-images, theme-options, custom-colors, threaded-comments, translation-ready, right-sidebar
Requires at least: 4.1
Tested up to: 5.5.1
Stable tag: 1.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Gateway incorporates elegant style with user friendly customizer options making it perfectly suited for a variety of WordPress users. With rock solid development and flexible integration, the Gateway theme is sure to be a favorite for first time WordPress users and experienced developers alike.

== Description ==

Gateway incorporates elegant style with user friendly setup options making it perfectly suited for a variety of WordPress users. With rock solid development and flexible integration with the Foundation Framework, the Gateway theme is sure to be a favorite for first time WordPress users and experienced developers alike.

You can customize the theme with the native WordPress Customize feature allowing changes to appear instantly while editing. Full support for contact form, infinite scrolling, post sharing, and gallery displays with the Jetpack plugin. Gateway can be used out of the box, or, treated as a starter theme for developers.

== Installation ==

1. Upload the theme zip file from Appearance > Themes
2. Activate the theme.
3. Create a new page called "Home".
4. In the "Home" page editing area, assign the Home template in the Page Attributes area.
5. Create a new page called "Blog".
5. Navigate to "Settings > Reading" and assign Front page as "Home" and Posts page as "Blog".
6. Add content to your website and enjoy!

== Local Sass Installation ==

sass --watch scss/style.scss:style.css

== Home Page ==

To use the home page template, create a new page and assign it the "Home" template under the Page Attributes settings.

Then navigate to "Settings > Reading" and assign Front page as "Home" and Posts page as "Blog".

The home page consists of several sections:

1. A widgetized top "Home Hero" area. Add a background image and background color in "Appearance > Customize > Theme Options > Home".
2. The latest blog posts section. Select your post category in "Appearance > Customize > Theme Options > Home".
3. Home page content section. This area will display any content you add to the "Home" page's content.
4. The demo is using a text widget in the "Home Hero" widget area with the following content with "Automatically add paragraphs" checked:

https://gist.github.com/RescueThemes/3ef92ff82e189e6034db

== Theme Customization ==

All theme customization options are located at "Appearance > Customize > Theme Options".

Theme Options tabs:

* Style: Change the sitewide main color.
* Home: Upload the main home page background image, add a title to the home page featured posts section, and select the post's category.
* Header: Upload a logo and set a header color.
* Blog: Enter blog page title and subtitle.
* Footer: Enter footer copyright text.

== Navigation ==

This theme supports one navigation menu. You can edit this menu in WordPress at "Appearance > Menus".

== Widgets ==

This theme supports several different widgetized areas: Home Hero, Inner Sidebar, and Footer. You can add widgets to these areas in "Appearance > Widgets".

== Buttons ==

Adding buttons to post content requires that you add content to your post in "Text" mode (rather than visual). Once in text mode, enter the following to display a button:

`<a class="button radius" href="#">Get In Touch</a>`

== Jetpack Plugin ==

The Gateway theme supports several Jetpack features. Jetpack is a free toolkit plugin that adds extra features to your WordPress installation. Installing it is as easy as navigating to "Plugins > Add New" and searching for "Jetpack". The following features will be available with the Gateway theme once Jetpack is installed and activated:

* Carousel
* Contact Form
* Infinite Scroll
* Sharing
* Shortcode Embeds
* Tiled Galleries

== Child Theme ==

Child themes allow you to modify or add to the functionality of the Gateway theme. A child theme is the best, safest, and easiest way to modify an existing theme, whether you want to make a few tiny changes or extensive changes. Instead of modifying the Gateway theme files directly, create a child theme and override within.

To create a child theme:

1. Create a new directory name "gateway-child" in /wp-content/themes/.
2. Create a file called "style.css" in the "gateway-child" directory.
3. Add the following information to the top of style.css:

`/*
 Theme Name:   Gateway Child
 Theme URI:    https://rescuethemes.com/gateway-wordpress-theme/
 Description:  Gateway Child Theme
 Author:       Rescue Themes
 Author URI:   https://rescuethemes.com
 Template:     gateway
 Version:      1.0
 Tags: light, white, gray, orange, three-columns, responsive-layout, featured-images, theme-options, custom-colors, threaded-comments, translation-ready, right-sidebar
 Text Domain:  gateway-child
*/`

4. Create a file called "functions.php" in the "gateway-child" directory.
5. Add the following function to functions.php.

`
<?php

function gateway_enqueue_parent_theme_style() {
    wp_enqueue_style( 'gateway-parent-style', get_template_directory_uri().'/style.css' );
    wp_dequeue_style( 'gateway-style' );
    wp_enqueue_style( 'gateway-child-style', get_stylesheet_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'gateway_enqueue_parent_theme_style', 99 );
`

6. Activate the child theme from your WordPress admin area.

== Frequently Asked Questions ==

= Where do I go if I have some questions? =

Post your questions on the theme support forum:

https://wordpress.org/support/theme/gateway

== License Info ==

Foundation Framework - ​http://foundation.zurb.com/
License: GPL-2.0+ - http://www.gnu.org/licenses/gpl-2.0.html
Copyright: @ZURB

Underscores - ​http://underscores.me/
License: MIT License - http://foundation.zurb.com/learn/faq.html#question-3
Copyright: @automattic

Customizer Library - https://github.com/devinsays/customizer-library
License: GPL-2.0+ - http://www.gnu.org/licenses/gpl-2.0.html
Copyright: @devinsays

Quattrocento, Fanwood  - https://www.google.com/fonts
License: SIL OFL 1.1 - https://www.google.com/fonts/attribution

Font Awesome - ​http://fontawesome.io
Fonts: SIL OFL 1.1, CSS: MIT License - http://fontawesome.io/license
Copyright: @davegandy

Images - Crow the Stone
http://crowthestone.com/image/96712415511
License: CC0 1.0 Universal (CC0 1.0) - http://creativecommons.org/publicdomain/zero/1.0/

Logo Image - http://demo.rescuethemes.com/gateway/wp-content/uploads/sites/8/2014/11/logo.png
License: CC0 1.0 Universal (CC0 1.0) - http://creativecommons.org/publicdomain/zero/1.0/
Copyright: @jamigibbs


== Changelog ==
= 1.6, 2020-10-14
* Tested and support for WordPress 5.5

= 1.5, 2020-07-07
* Tested and support for WordPress 5.4.1

= 1.4, 2019-03-14

* Added WordPress 5.0 Editor Support (Gutenberg)

= 1.3.7 - 2018-7-16 =
* Tested and Support for WordPress 4.9.7

= 1.3.6 - 2018-5-7 =
* Tested with support for 4.9.5

= 1.3.5, 2017-11-14

* Added translation of mobile menu Back button

= 1.3.4 - 2017-10-17 =
* Tested to 4.8.2

= 1.3.3, Dec 8, 2016 =
* Correct hero widget h1

= 1.3.2, Dec 7, 2016 =

* Correct text domains
* Change h1s to h3s sidebars

= 1.3.1, Aug 3, 2016 =
* Add Jetpack Infinite Scroll compatibility 

= 1.3, Apr 21, 2016 =
* Adding sass files
* Minor improvements to the theme info page

= 1.2.31, July 15, 2015 =
* Adjusting background image behavior for iOS devices

= 1.2.3, July 8, 2015 =
* Updated changelog format
* Updated theme info page content
* Removed TGM plugin activation class
* Added customizer control for arbitrary text
* Added upgrade information
* Fixed Hero image display on mobile
* Fixed navigation bar to dynamically adjust to content
* Fixed inner header height to dynamically adjust to content

= 1.2.2, June 9, 2015 =
* Updated header image positioning
* Updated theme URI
* Added theme info page
* Added changelog.txt

= 1.2.1,  May 18, 2015 =
* Updating various prefixes
* Removing unused post-format declaration
* Updated .pot translation file

= 1.2, May 08, 2015 =
* Removed unsued stylesheet (rtl.css)
* Fixed header background color and image customizer issue

= 1.1, Apr 23, 2015 =
* Added additional customizer options
* Added customizer settings to reload changes asynchronously
* Added recommended plugin Rescue Shortcodes
* Added style to 'pre' tag
* Updated TGM plugin activation class to 2.4.1
* General file cleanup for improved readibility

= 1.0.8, Apr 17, 2015 =
* Added demo navigation
* Updated .pot translation file

= 1.0.7, Apr 16, 2015 =
* Updated Copyright/License Attribution
* Minor mobile display improvements for post featured image
* Prefixed featured image size names
* Added additional default content

= 1.0.6, Mar 06, 2015 =
* Added 'the_archive_title' in favor of separate conditional statements
* Added Google Fonts function
* Added recommended plugin notice on theme activation for Jetpack
* Removed custom CSS text box in favor of Jetpack
* Updated customizer library to version 1.3
* Updated language translation .pot file
* Updated readme.txt with clarifying instructions and additional credit

= 1.0.5, Dec 29, 2014 =
* Updated home & inner pages header image option

= 1.0.4, Dec 29, 2014 =
* Updated screenshot.png
* Removed unnecesary Foundation libraries
* Updated .po translation file
* Added customizer stylesheet
* Updated instructions in readme.txt

= 1.0.3, Dec 24, 2014 =
* Updated textdomains

= 1.0.2, Nov 12, 2014 =
* Set add_image_size to hard crop mode
* Declared copyright in style.css

= 1.0.1, Nov 12, 2014 =
* Fixed conditional in sidebar.php
* Updated Jetpack infinite scrolling style

= 1.0, Nov 11, 2014 =
* Initial release
