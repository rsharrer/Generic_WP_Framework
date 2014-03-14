Generic_WP_Framework
====================
A WordPress Framework for rapid child-theme development.

##Features
* Responsive Layouts
 * Base 960 Grid 960px
 * Tablet (Portrait) 768px
 * Mobile (Portrait) 320px
 * Mobile (Landscape) 480px
* Easy CSS Framework Scaffolding
* Child Theme Ready
* Style Agnostic - overwrite existing style with ease
* Responsive Menu (coming soon)
* Responsive Video embeds
* Browser Detection 

##Installation
```
Appearance -> Themes
Add New
Upload -> generic-fw.zip
Add New
Activate
```

I personally recommend using a Child Theme as that is the best way to rapidly develop a custom Wordpress theme. Visit http://codex.wordpress.org/Child_Themes for more details 

##Dev Plans
* Theme Layout Customization Options
* Post Format Options
* Loosely Display Featured Images

##Changelog
* V:0.9.61 - 01/06/14
 * Main Sidebar Widget - css class - "sidebar-widget" to "widget"
 * Main Sidebar Widget Title - css class - "sidebar-title" to "widget-title"
 * Page Template - css class - "page-title" to "post-title"
 * Single Template - css class - "page-title" to "post-title"
 * Editor Style Added for a more unified look
 * style.css organized a bit
* V:0.9.65 01/09/14
 * Theme Customizer Options - Upload Logo, Global Disable Page and/or Post Comments
 * Minor CSS edits
* V:0.9.70 1/14/14
 * Theme Customizer Options - Blog Display Excerpt or Full Content Option
 * New CSS for Primary Navigation, it wasn't style agnostic enough for my taste. Now allows infinite amount of depth
* V:0.9.71 1/15/14
 * Reverted Menu CSS back to previous version, will return to it another time.
* V:0.9.75 1/15/14
 * New CSS for Primary Navigation, works better than all previous versions!
 * Theme Customizer Option - Adjusted the loop to acually switch between full and excerpt
* V:0.9.76
 * Removed some cruft
 * Renamed GitHub directories to the way WP outputs the zip
* V:0.9.78
 * Added "mobile-off" class to quickly remove elements from mobile devices
 * Organized Stylesheet more
* V:0.9.80
 * .btn classes have been added for quick buttons
 * light CSS cleaning
 * alpha and omega classes added to align-right and align-left
 * remove-top, add-top, half-top classes added
* V:0.9.83
 * Change content and sidebar column widths through Theme Customizer
 * Add custom classes to sidebar and content area
 * .button and submit input styled to resemble the Generic Framework style
 * Added normalize.css for better cross browser support
 * Removed HTML5 Tags such as <header> and <footer>
  * replaced with divs for better legacy browser compatibility.
  * May affect child themes, replace header#header and footer#footer tags with #header and #footer tags.

### Generic Framework is built with the following resources: 

Skeleton - ​http://www.getskeleton.com/
License: Distributed under the terms of the open-source MIT license
Copyright: Dave Gamache, https://github.com/dhg

FITVIDS.JS - ​http://fitvidsjs.com/
License: Released under the WTFPL license - http://sam.zoy.org/wtfpl/
Copyright: Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com

HTML5 Shiv - http://code.google.com/p/html5shiv/
License: Dual licensed under the MIT or GPL Version 2 licenses
Copyright: @afarkas @jdalton @jon_neal @rem
