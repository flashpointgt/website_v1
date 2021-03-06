=== Slim version of Jetpack by WordPress.com ===

Contributors: automattic, apeatling, beaulebens, hugobaeta, Joen, mdawaffe, andy, designsimply, hew, westi, eoigal, tmoorewp, matt, pento, cfinke, daniloercoli, chellycat, gibrown, jblz, jshreve, barry, alternatekev, azaozz, ethitter, johnjamesjacoby, lancewillett, martinremy, nickmomrik, stephdau, yoavf, matveb
Tags: views, tweets, twitter, widget, gravatar, hovercards, profile, equations, latex, math, maths, youtube, shortcode, archives, audio, blip, bliptv, dailymotion, digg, flickr, googlevideo, google, googlemaps, kyte, kytetv, livevideo, redlasso, rockyou, rss, scribd, slide, slideshare, soundcloud, vimeo, shortlinks, wp.me, mosaic, gallery, slideshow
Requires at least: 3.3
Tested up to: 3.5
Stable tag: 2.1

Supercharge your WordPress site with powerful features even you're not WordPress.com users :)
I don't have a wordpress plugin publisher account yet so this plugin will be located here temporarily.
I believe the functions I touched won't cause security issues, but use at your own risk!

== Description ==

[Jetpack](http://jetpack.me/) is an awesome plugin bundle provided by the Automattic but it requires WordPress.com account
even for those modules previously work as independent plugins. The marketing banners are very obtrusive too.

I smashed the bundle to remove the annoying parts and keep the awesomeness. Slim Jetpack will track the updates of Jetpack modules,
but is definitely INCOMPATIBLE with its original version because a lot of API functions had been mocked or removed.

All credit goes to original developers!   But please report the slim-version bugs at https://github.com/HowardMei/slimjetpack/issues

If you need the wordpress.com stats, subscription and push notification services etc., please deactivate Slim Jetpack
and use the original Jetpack instead.

==Modules Included==
Carousel
Sharing
Spelling and Grammar
Gravatar Hovercards
Contact Form
Tiled Galleries
WP.me Shortlinks
Shortcode Embeds
Custom CSS
Mobile Theme
Beautiful Math
Extra Sidebar Widgets
Infinite Scroll

==Modules Removed==
WordPress.com Stats
Publicize
Notifications
Jetpack Comments
Subscriptions
Post by Email
VaultPress
Photon
JSON API
Mobile Push Notifications
Enhanced Distribution
Holiday Snow (You may put it back if you like.)

== Installation ==

1. Install Slim Jetpack either via the WordPress.org plugin directory (temporarily unavailable), or by uploading the files to your server
2. Go to Settings-->Slim Jetpack and activate the modules you need. Configure them if the 'configure' buttons appear.
   Click 'toggle' to show the 'deactivate' button and the infinite-scroll module is only for twenty-xxx series themes,
   you may extend it to support your own themes.
3. That's it.  You're ready to go!

== Frequently Asked Questions ==
How many files are touched? Use a comparing tool to find out. But as I remember, the list is:
Modified: jetpack.php(->slimjetpack.php), modules/module-info.php and _inc/jetpack.js
Removed: files and folders of all removed modules
Not all abandoned blocks are removed from jetpack.php which may cause problems but if it works,
just ignore them :-)
If you don't like certain modules, just delete them :-)
If you need a new module from Jetpack future releases, copy the files into Slim Jetpack and try.
It should work without problem :)

== Weight-loss Diary ==

= 2.1.1 =
* Removed and mocked the api authentication codes
* Removed the admin marketing banners
* Disabled the 'Learn More' slide box and make all screen clean
* Changed the Jetpack admin menu into Settings -> Slim Jetpack submenu
* Changed the default status of modules to be 'inactive'

== Original Jetpack Changelog ==

= 2.1.1 =
* Bug Fix: Fix for an error appearing for blogs updating from Jetpack 1.9.2 or earlier to 2.1.

= 2.1 =
* Enhancement: Tiled Galleries: Show off your photos with cool mosaic galleries.
* Enhancement: Slideshow gallery type: Display any gallery as a slideshow.
* Enhancement: Custom CSS: Allow zoom property.
* Enhancement: Stats: Show WordPress.com subscribers in stats.
* Bug Fix: Fix errors shown after connecting Jetpack to WordPress.com.
* Bug Fix: Photon: Fix bug causing errors to be shown in some posts.
* Bug Fix: Photon: Convert all images in posts when Photon is active.
* Bug Fix: Infinite Scroll: Improved compatibility with the other modules.
* Bug Fix: Custom CSS: Updated editor to fix missing file errors.
* Bug Fix: Publicize: Don't show the Facebook profile option if this is a Page-only account.
* Bug Fix: Photon: A fix for photos appearing shrunken if they didn't load quickly enough.
* Bug Fix: Sharing: A compatibility fix for posts that only have partial featured image data.
* Bug Fix: Publicize/Sharing: For sites without a static homepage, don't set the OpenGraph url value to the first post permalink.
* Bug Fix: Mobile Theme: Better compatibility with the customizer on mobile devices.
* Bug Fix: Sharing: Don't show sharing options on front page if that option is turned off.
* Bug Fix: Contact Form: Fix PHP warning shown when adding a Contact Form in WordPress 3.5.
* Bug Fix: Photon: Handle images with relative paths.
* Bug Fix: Contact Form: Fix compatibility with the Shortcode Embeds module.


= 2.0.4 =
* Bug Fix: Open Graph: Correct a bug that prevents Jetpack from being activated if the SharePress plugin isn't installed.

= 2.0.3 =
* Enhancement: Infinite Scroll: support [VideoPress](http://wordpress.org/extend/plugins/video/) plugin.
* Enhancement: Photon: Apply to all images retrieved from the Media Library.
* Enhancement: Photon: Retina image support.
* Enhancement: Custom CSS: Refined editor interface.
* Enhancement: Custom CSS: Support [Sass](http://sass-lang.com/) and [LESS](http://lesscss.org/) with built-in preprocessors.
* Enhancement: Open Graph: Better checks for other plugins that may be loading Open Graph tags to prevent Jetpack from doubling meta tag output.
* Bug Fix: Infinite Scroll: Respect relative image dimensions.
* Bug Fix: Photon: Detect custom-cropped images and use those with Photon, rather than trying to use the original.
* Bug Fix: Custom CSS: Fix for bug preventing @import from working with url()-style URLs.

= 2.0.2 =
* Bug Fix: Remove an erroneous PHP short open tag with the full tag to correct fatal errors under certain PHP configurations.

= 2.0.1 =
* Enhancement: Photon: Support for the [Lazy Load](http://wordpress.org/extend/plugins/lazy-load/) plugin.
* Bug Fix: Photon: Fix warped images with un- or under-specified dimensions.
* Bug Fix: Photon: Fix warped images with pre-photonized URLs; don't try to photonize them twice.
* Bug Fix: Infinite Scroll: Check a child theme's parent theme for infinite scroll support.
* Bug Fix: Infinite Scroll: Correct a bug with archives that resulted in posts appearing on archives that they didn't belong on.
* Bug Fix: Publicize: Send the correct shortlink to Twitter (et al.) if your site uses a shortener other than wp.me.
* Bug Fix: Sharing: Improved theme compatibility for the Google+ button.
* Bug Fix: Notifications: Use locally-installed Javascript libraries if available.

= 2.0 =
* Enhancement: Publicize: Connect your site to popular social networks and automatically share new posts with your friends.
* Enhancement: Post By Email: Publish posts to your blog directly from your personal email account.
* Enhancement: Photon: Images served through the global WordPress.com cloud.
* Enhancement: Infinite Scroll: Better/faster browsing by pulling the next set of posts into view automatically when the reader approaches the bottom of the page.
* Enhancement: Open Graph: Provides more detailed information about your posts to social networks.
* Enhancement: JSON API: New parameters for creating and viewing posts.
* Enhancement: Improved compatibility for the upcoming WordPress 3.5.
* Bug Fix: Sharing: When you set your sharing buttons to use icon, text, or icon + text mode, the Google+ button will display accordingly.
* Bug Fix: Gravatar Profile Widget: Allow basic HTML to be displayed.
* Bug Fix: Twitter Widget: Error handling fixes.
* Bug Fix: Sharing: Improved theme compatibility
* Bug Fix: JSON API: Fixed error when creating some posts in some versions of PHP.

= 1.9.2 =
* Bug Fix: Only sync options on upgrade once.

= 1.9.1 =
* Enhancement: Notifications feature is enabled for logged-out users when the module is active & the toolbar is shown by another plugin.
* Bug Fix: Use proper CDN addresses to avoid SSL cert issues.
* Bug Fix: Prioritize syncing comments over deleting comments on WordPress.com. Fixes comment notifications marked as spam appearing to be trashed.

= 1.9 =
* Enhancement: Notifications: Display Notifications in the toolbar and support reply/moderation of comment notifications.
* Enhancement: Mobile Push Notifications: Added support for mobile push notifications of new comments for users that linked their accounts to WordPress.com accounts.
* Enhancement: JSON API: Allows applications to send API requests via WordPress.com (see [the docs](http://developer.wordpress.com/docs/api/) )
* Enhancement: Sync: Modules (that require the data) sync full Post/Comment to ensure consistent data on WP.com (eg Stats)
* Enhancement: Sync: Improve syncing of site options to WP.com
* Enhancement: Sync: Sync attachment parents to WP.com
* Enhancement: Sync: Add signing of WP.com user ids for Jetpack Comments
* Enhancement: Sync: Mark and obfuscate private posts.
* Enhancement: Privacy: Default disable enhanced-distribution and json-api modules if site appears to be private.
* Enhancement: Custom CSS: allow applying Custom CSS to mobile theme.
* Enhancement: Sharing: On HTTPS pageloads, load as much of the sharing embeds as possible from HTTPS URLs.
* Enhancement: Contact Form: Overhaul of the contact form code to fix incompatibilites with other plugins.
* Bug Fix: Only allow users with manage_options permission to enable/disable modules
* Bug Fix: Custom CSS: allow '/' in media query units; e.g. (-o-min-device-pixel-ratio: 3/2)
* Bug Fix: Custom CSS: leave comments alone in CSS when editing but minify on the frontend
* Bug Fix: Sharing: Keep "more" pane open so Google+ Button isn't obscured
* Bug Fix: Carousel: Make sure the original size is used, even when it is exceedingly large.
* Bug Fix: Exclude iPad from Twitter on iPhone mobile browsing
* Bug Fix: Sync: On .org user role changes synchronize the change to .com
* Bug Fix: Contact Form: Fix a bug where some web hosts would reject mail from the contact form due to email address spoofing.

= 1.8.3 =
* Bug Fix: Subscriptions: Fix a bug where subscriptions were not being sent from the blog.
* Bug Fix: Twitter: Fix a bug where the Twitter username was being saved as blank.
* Bug Fix: Fix a bug where Contact Form notification emails were not being sent.

= 1.8.2 =
* Bug Fix: Subscriptions: Fix a bug where subscriptions were not sent for posts and comments written by some authors.
* Bug Fix: Widgets: Fix CSS that was uglifying some themes (like P2).
* Bug Fix: Widgets: Improve Top Posts and Pages styling.
* Bug Fix: Custom CSS: Make the default "Welcome" message translatable.
* Bug Fix: Fix Lithuanian translation.

= 1.8.1 =
* Bug Fix: Stats: Fixed a bug preventing some users from viewing stats.
* Bug Fix: Mobile Theme: Fixed some disabled toolbar buttons.
* Bug Fix: Top Posts widget: Fixed a bug preventing the usage of the Top Posts widget.
* Bug Fix: Mobile Theme: Fixed a bug that broke some sites when the Subscriptions module was not enabled and the Mobile Theme module was enabled.
* Bug Fix: Mobile Theme: Made mobile app promos in the Mobile Theme footer opt-in.
* Bug Fix: Twitter Widget: A fix to prevent malware warnings.
* Bug Fix: Mobile Theme: Fixed a bug that caused errors for some users with custom header images.

= 1.8 =
* Enhancement: Mobile Theme: Automatically serve a slimmed down version of your site to users on mobile devices.
* Enhancement: Multiuser: Allow multiple users to link their accounts to WordPress.com accounts.
* Enhancement: Custom CSS: Added support for object-fit, object-position, transition, and filter properties.
* Enhancement: Twitter Widget: Added Follow button
* Enhancement: Widgets: Added Top Posts and Pages widget
* Enhancement: Mobile Push Notifications: Added support for mobile push notifications on new comments.
* Enhancement: VideoPress: Shortcodes now support the HD option, for default HD playback.
* Bug Fix: Twitter Widget: Fixed tweet permalinks in the Twitter widget
* Bug Fix: Custom CSS: @import rules and external images are no longer stripped out of custom CSS
* Bug Fix: Custom CSS: Fixed warnings and notices displayed in debug mode
* Bug Fix: Sharing: Fixed double-encoding of image URLs
* Bug Fix: Sharing: Fix Google +1 button HTML validation issues (again :))
* Bug Fix: Gravatar Profile Widget: Reduce size of header margins

= 1.7 =
* Enhancement: CSS Editor: Customize your site's design without modifying your theme.
* Enhancement: Comments: Submit the comment within the iframe.  No more full page load to jetpack.wordpress.com.
* Enhancement: Sharing: Share counts for Twitter, Facebook, LinkedIn
* Enhancement: Sharing: Improve styling
* Enhancement: Sharing: Add support for ReCaptcha
* Enhancement: Sharing: Better extensability through filters
* Enhancement: Widgets: Twitter: Attempt to reduce errors by storing a long lasting copy of the data. Thanks, kareldonk :)
* Regression Fix: Sharing: Properly store and display the sharing label option's default value.
* Bug Fix: Contact Form: remove worse-than-useless nonce.
* Bug Fix: Subscriptions: remove worse-than-useless nonce.
* Bug Fix: Sharing: Don't show sharing buttons twice on attachment pages.
* Bug Fix: Sharing: Increase width of Spanish Like button for Facebook.
* Bug Fix: Sharing: Use the correct URL to the throbber.
* Bug Fix: Stats: Fix notice about undefined variable $alt
* Bug Fix: Subscriptions: Make Subscriptions module obey the settings of the Settngs -> Discussion checkboxes for Follow Blog/Comments
* Bug Fix: Shortcodes: VideoPress: Compatibility with the latest version of VideoPress
* Bug Fix: Shortcodes: Audio: Include JS File for HTML5 audio player
* Bug Fix: Hovercards: Improve cache handling.
* Bug Fix: Widgets: Gravatar Profle: Correctly display service icons in edge cases.
* Bug Fix: Widgets: Gravatar Profle: Prevent ugly "flash" of too-large image when page first loads on some sites
* Bug Fix: Carousel: CSS Compatibility with more themes.

= 1.6.1 =
* Bug Fix: Prevent Fatal error under certain conditions in sharing module
* Bug Fix: Add cachebuster to sharing.css
* Bug Fix: Disable via for Twitter until more robust code is in place

= 1.6 =
* Enhancement: Carousel: Better image resolution selection based on available width/height.
* Enhancement: Carousel: Load image caption, metadata, comments, et alii when a slide is clicked to switch to instead of waiting.
* Enhancement: Carousel: Added a "Comment" button and handling to scroll to and focus on comment textarea.
* Enhancement: Widgets: Facebook Likebox now supports a height parameter and a better width parameter.
* Enhancement: Widgets: Better feedback when widgets are not set up properly.
* Enhancement: Shortcodes: Google Maps shortcode now supports percentages in the width.
* Enhancement: Shortcodes: Update Polldaddy shortcode for more efficient Javascript libraries.
* Enhancement: Shortcodes: Youtube shortcode now has playlist support.
* Enhancement: Add Gravatar Profile widget.
* Enhancement: Update Sharedaddy to latest version, including Pinterest support.
* Enhancement: Retinize Jetpack and much of WordPress.
* Bug Fix: Shortcodes: Fix Audio shortcode color parameter and rename encoding function.
* Bug Fix: Shortcodes: Don't output HTML 5 version of the Audio shortcode because of a bug with Google Reader.
* Bug Fix: Jetpack Comments: Don't overlead the addComments object if it doesn't exist. Fixes spacing issue with comment form.
* Bug Fix: Contact Form: If send_to_editor() exists, use it. Fixes an IE9 text area issue.

= 1.5 =
* Enhancement: Add Gallery Carousel feature
* Note: the Carousel module bundles http://fgnass.github.com/spin.js/ (MIT license)

= 1.4.2 =
* Bug Fix: Jetpack Comments: Add alternative Javascript event listener for Internet 8 users.
* Enhancement: Remove more PHP 4 backwards-compatible code (WordPress andJetpack only support PHP 5).
* Enhancement: Remove more WordPress 3.1 and under backwards-compatible code.

= 1.4.1 =
* Bug Fix: Jetpack Comments / Subscriptions: Add checkboxes and logic control for the Subscription checkboxes.

= 1.4 =
* Enhancement: Add Jetpack Comments feature.
* Bug Fix: Sharing: Make the sharing_label translatable.
* Bug Fix: Sharing: Fixed the file type on the LinkedIn graphic.
* Bug Fix: Sharing: Fixes for the Faceboox Like button language locales.
* Bug Fix: Sharing: Updates for the "more" button when used with touch screen devices.
* Bug Fix: Sharing: Properly scope the More button so that multiple More buttons on a page behave properly.
* Bug Fix: Shortcodes: Update the YouTube and Audio shortcodes to better handle spaces in the URLs.
* Bug Fix: Shortcodes: Make the YouTube shortcode respect embed settings in Settings -> Media when appropriate.
* Bug Fix: Shortcodes: Removed the Slide.com shortcode; Slide.com no longer exists.
* Bug Fix: Shortcodes: Match both http and https links in the [googlemaps] shortcode.
* Bug Fix: After the Deadline: Code clean up and removal of inconsistencies.

= 1.3.4 =
* Bug Fix: Revert changes to the top level menu that are causing problems.

= 1.3.3 =
* Bug Fix: Fix notices caused by last update

= 1.3.2 =
* Bug Fix: Fix Jetpack menu so that Akismet and VaultPress submenus show up.

= 1.3.1 =
* Enhancement: Add a new widget, the Facebook Likebox
* Bug Fix: Sharing: Sharing buttons can now be used on custom post types.
* Bug Fix: Contact Forms: Make Contact Forms widget shortcode less aggressive about the shortcodes it converts.
* Bug Fix: Ensure contact forms are parsed correctly in text widgets.
* Bug Fix: Connection notices now only appear on the Dashboard and plugin page.
* Bug Fix: Connection notices are now dismissable if Jetpack is not network activated.
* Bug Fix: Subscriptions: Fix an issue that was causing errors with new BuddyPress forum posts.

= 1.3 =
* Enhancement: Add Contact Forms feature.  Formerly Grunion Contact Forms.
* Bug Fix: Tweak YouTube autoembedder to catch more YouTube URLs.
* Bug Fix: Correctly load the Sharing CSS files.

= 1.2.4 =
* Bug Fix: Fix rare bug with static front pages

= 1.2.3 =
* Enhancement: Twitter Widget: Expand t.co URLs
* Bug Fix: Various PHP Notices.
* Bug Fix: WordPress Deprecated `add_contextual_help()` notices
* Bug Fix: Don't display unimportant DB errors when processing Jetpack nonces
* Bug Fix: Correctly sync data during certain MultiSite cases.
* Bug Fix: Stats: Allow sparkline img to load even when there is a DB upgrade.
* Bug Fix: Stats: Replace "loading title" with post title regardless of type and status.
* Bug Fix: Stats: Avoid edge case infinite redirect for `show_on_front=page` sites where the `home_url()` conatins uppercase letters.
* Bug Fix: Subscriptions: Don't send subscriptions if the feature is turned off in Jetpack.
* Bug Fix: Subscriptions: Fix pagination of subscribers.
* Bug Fix: Subscriptions: Sync data about categories/tags as well to improve subscription emails.
* Bug Fix: Subscriptions: Better styling for the subscription success message.
* Bug Fix: Shortcodes: Support for multiple Google Maps in one post.  Support for all Google Maps URLs.
* Bug Fix: Shortcodes: Improved support for youtu.be URLs
* Bug Fix: Shortcodes: Improved Vimeo embeds.
* Bug Fix: Sharing: Switch to the 20px version of Google's +1 button for consistency.
* Bug Fix: Sharing: Fix Google +1 button HTML validation issues.
* Bug Fix: Sharing: Disable sharing buttons during preview.
* Bug Fix: Spelling and Grammar: Properly handle proofreading settings.
* Bug Fix: Spelling and Grammar: Don't prevent post save when proofreading service is unavailable.

= 1.2.2 =
* Bug Fix: Ensure expected modules get reactivated correctly during upgrade.
* Bug Fix: Don't send subscription request during spam comment submission.
* Bug Fix: Increased theme compatibility for subscriptions.
* Bug Fix: Remove reference to unused background image.

= 1.2.1 =
* Bug Fix: Ensure Site Stats menu item is accessible.
* Bug Fix: Fixed errors displayed during some upgrades.
* Bug Fix: Fix inaccurate new modules "bubble" in menu for some upgrades.
* Bug Fix: Fix VaultPress detection.
* Bug Fix: Fix link to http://jetpack.me/faq/

= 1.2 =
* Enhancement: Add Subscriptions: Subscribe to site's posts and posts' comments.
* Enhancement: Add Google Maps shortcode.
* Enhancement: Add Image Widget.
* Enhancement: Add RSS Links Widget.
* Enhancement: Stats: More responsive stats dashboard.
* Enhancement: Shortcodes: Google Maps, VideoPress
* Enhancement: Sharing: Google+, LinkedIn
* Enhancement: Enhanced Distribution: Added Jetpack blogs to http://en.wordpress.com/firehose/
* Bug Fix: Spelling and Grammar: WordPress 3.3 compatibility.
* Bug Fix: Translatable module names/descriptinos.
* Bug Fix: Correctly detect host's ability to make outgoing HTTPS requests.

= 1.1.3 =
* Bug Fix: Increase compatibility with WordPress 3.2's new `wp_remote_request()` API.
* Bug Fix: Increase compatibility with Admin Bar.
* Bug Fix: Stats: Improved performance when creating new posts.
* Bug Fix: Twitter Widget: Fix PHP Notice.
* Bug Fix: Sharedaddy: Fix PHP Warning.
* Enhancement: AtD: Add spellcheck button to Distraction Free Writing screen.
* Translations: Added: Bosnian, Danish, German, Finnish, Galician, Croatian, Indonesian,  Macedonian, Norwegian (Bokmål), Russian, Slovak, Serbian, Swedish
* Translations: Updated: Spanish, French, Italian, Japanese, Brazilian Portuguese, Portuguese

= 1.1.2 =
* Bug Fix: Note, store, and keep fresh the time difference between the Jetpack site's host and the Jetpack servers at WordPress.com.  Should fix all "timestamp is too old" errors.
* Bug Fix: Improve experience on hosts capable of making outgoing HTTPS requests but incapable of verifying SSL certificates. Fixes some "register_http_request_failed", "error setting certificate verify locations", and "error:14090086:lib(20):func(144):reason(134)" errors.
* Bug Fix: Better fallback when WordPress.com is experiencing problems.
* Bug Fix: It's Jetpack, not JetPack :)
* Bug Fix: Remove PHP Warnings/Notices.
* Bug Fix: AtD: JS based XSS bug.  Props markjaquith.
* Bug Fix: AtD: Prevent stored configuration options from becoming corrupted.
* Bug Fix: Stats: Prevent missing old stats for some blogs.
* Bug Fix: Twitter Widget: Fix formatting of dates/times in PHP4.
* Bug Fix: Twitter Widget: Cache the response from Twitter to prevent "Twitter did not respond. Please wait a few minutes and refresh this page." errors.
* Enhancement: Slightly improved RTL experience.  Jetpack 1.2 should include a much better fix.
* Enhancement: Sharedaddy: Improve localization for Facebook Like button.
* Enhancement: Gravatar Hovercards: Improved experience for Windows browsers.

= 1.1.1 =
* Bug Fix: Improve experience on hosts capable of making outgoing HTTPS requests but incapable of verifying SSL certificates. Fixes most "Your Jetpack has a glitch. Connecting this site with WordPress.com is not possible. This usually means your site is not publicly accessible (localhost)." errors.
* Bug Fix: Sharedaddy: Fatal error under PHP4.  Disable on PHP4 hosts.
* Bug Fix: Stats: Fatal error under PHP4.  Rewrite to be PHP4 compatible.
* Bug Fix: Stats: Fatal error on some sites modifying/removing core WordPress user roles.  Add sanity check.
* Bug Fix: Stats: Replace debug output with error message in dashboard widget.
* Bug Fix: Stats: Rework hook priorities so that stats views are always counted even if a plugin (such as Paginated Comments) bails early on template_redirect.
* Bug Fix: Identify the module that connot be activated to fatal error during single module activation.
* Bug Fix: `glob()` is not always available.  Use `opendir()`, `readdir()`, `closedir()`.
* Bug Fix: Send permalink options to Stats Server for improved per post permalink calculation.
* Bug Fix: Do not hide Screen Options and Help links during Jetpack call to connect.
* Bug Fix: Improve readablitiy of text.
* Bug Fix: AtD: Correctly store/display options.
* Enhancement: Output more informative error messages.
* Enhancement: Improve CSS styling.
* Enhancement: Stats: Query all post types and statuses when getting posts for stats reports.
* Enhancement: Improve performance of LaTeX URLs be using cookieless CDN.

= 1.1 =
* Initial release
