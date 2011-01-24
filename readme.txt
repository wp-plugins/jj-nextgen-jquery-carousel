=== JJ NextGen JQuery Carousel ===
Contributors: JJ Coder
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=PSCMPVDADYP74&lc=NZ&item_name=JJNextGenJQueryCarousel&item_number=jjcoder_carousel&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: image, picture, photo, widgets, gallery, images, nextgen-gallery, jquery, jcarousel, carousel, javascript
Requires at least: 2.8
Tested up to: 3.0.4
Stable tag: 1.0.0

Allows you to pick a gallery from the 'NextGen Gallery' plugin to use as a JQuery JCarousel.

== Description ==

The 'JJ NextGen JQuery Carousel' allows you to create a 'JCarousel' (http://sorgalla.com/projects/jcarousel/) as a widget or as a shortcode.
This plugin uses the 'NextGen Gallery' plugin for its images.

Other plugins for NextGen Gallery and jQuery:

- JJ NextGen JQuery Slider http://wordpress.org/extend/plugins/jj-nextgen-jquery-slider/
- JJ NextGen JQuery Cycle http://wordpress.org/extend/plugins/jj-nextgen-jquery-cycle/

Requirements:

- NextGen Gallery Plugin (http://wordpress.org/extend/plugins/nextgen-gallery/)

NextGen Gallery Integration:

- This plugin uses the original width and height of the image uploaded so make sure the images are the correct dimensions when uploaded.
- If a width and height are defined under the configuration all images will be resized to those dimensions (Highly recommended).
- Alt & Title Text Field: Provide a full url here and the image will link to this.
- Description Field: Will be used as image alt text.

You can specify the following parameters:

NOTE: sc means shortcode:

- Title: Title. Leave blank for no title. (sc: title="My Carousel")
- Gallery: Leave blank to use all galleries or choose a gallery to use. (sc: gallery="galleryid")
- Order: Order to display results in. You can choose; Random, Latest First, Oldest First, or NextGen Sortorder. Random will still work when a page is cached. (sc: order="random"|"asc"|"desc"|"sortorder")
- Max pictures: The maximum amount of pictures to use. (sc: max_pictures="6")
- HTML id: HTML id to use. Defaults to 'jcarousel'. Needs to be different for multiple instances on same page. (sc: html_id="jcarousel")
- Skin class: class of skinning to use. Defaults to use the tango skin. (sc: skin_class="jcarousel-skin-tango")
- Image width: Width of image. Defaults to 75. (sc: width="200")
- Image height: height of image. Defaults to 75. (sc: height="150")
- Image gap: gap between images. (sc: gap="5")

JCarousel settings:

Please check the JCarousel home page for more details (http://sorgalla.com/projects/jcarousel/#Configuration).

- vertical: Specifies wether the carousel appears in horizontal or vertical orientation. Changes the carousel from a left/right style to a up/down style carousel. (sc: vertical="setting")
- rtl: Specifies whether the carousel appears in RTL (Right-To-Left) mode. (sc: rtl="setting")
- start: The index of the item to start with. (sc: start="setting")
- offset: The index of the first available item at initialisation. (sc: offset="setting")
- size: Size of existing elements if size is not passed explicitly uses the number of total items. (sc: size="setting")
- scroll: The number of items to scroll by. (sc: scroll="setting")
- visible: If passed, the width/height of the items will be calculated and set depending on the width/height of the clipping, so that exactly that number of items will be visible. (sc: visible="setting")
- animation: The speed of the scroll animation as string in jQuery terms ("slow" or "fast") or milliseconds as integer (See jQuery Documentation). If set to 0, animation is turned off. (sc: animation="setting")
- easing: The name of the easing effect that you want to use (See jQuery Documentation). (sc: easing="setting")
- auto: Specifies how many seconds to periodically autoscroll the content. If set to 0 (default) then autoscrolling is turned off. (sc: auto="setting")
- wrap: Specifies whether to wrap at the first/last item (or both) and jump back to the start/end. Options are "first", "last", "both" or "circular" as string. If set to null, wrapping is turned off (default). (sc: wrap="setting")

Shortcode Examples:

- [jj-ngg-jquery-carousel html_id="about-jcarousel" gallery="1"]
- [jj-ngg-jquery-carousel title="Hello" html_id="about-jcarousel" gallery="1" vertical="true"]
- [jj-ngg-jquery-carousel html_id="about-jcarousel" gallery="2" width="150" height="100" visible="2" scroll="1" auto="3"]

== Installation ==

Please refer to the description for requirements and how to use this plugin.

1. Copy the entire directory from the downloaded zip file into the /wp-content/plugins/ folder.
2. Activate the "JJ NextGen JQuery Carousel" plugin in the Plugin Management page.
3. Refer to the description to use the plugin as a widget and or a shortcode.

== Frequently Asked Questions ==

None yet.

Email: wpjjcoder@gmail.com

== Screenshots ==

1. Horizontal carousel.
2. Vertical carousel.

== Changelog ==

- 1.0: First version.

== Contributors ==

JJ Coder wpjjcoder@gmail.com