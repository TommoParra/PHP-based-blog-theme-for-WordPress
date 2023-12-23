ҋ�`<?php exit; ?>a:1:{s:7:"content";s:109995:"O:8:"stdClass":2:{s:3:"url";s:21:"tudespachoencasa.com/";s:13:"subscriptions";a:1:{i:0;O:8:"stdClass":3:{s:11:"renewal_url";s:0:"";s:11:"expiry_date";s:24:"2022-05-31T15:40:52.000Z";s:7:"product";O:8:"stdClass":7:{s:7:"version";s:4:"16.5";s:4:"name";s:31:"Yoast SEO for WordPress Premium";s:4:"slug";s:27:"yoast-seo-wordpress-premium";s:12:"last_updated";s:24:"2021-06-15T07:27:42.000Z";s:9:"store_url";s:44:"https://yoast.com/product/yoast-seo-premium/";s:8:"download";s:68:"https://yoast.com/app/uploads/2021/06/wordpress-seo-premium-16.5.zip";s:9:"changelog";s:109417:"<h2 id="v16.5">16.5</h2>
<small>June 15th, 2021</small>

Yoast SEO 16.5 is out today! This release introduces an addition to Yoast’s social media features: the Social Appearance Templates. With these templates, you can set a default social template for every page, custom post type, taxonomy, and archive. No more ugly images, weird titles or meta descriptions for you! Read more about what’s new in Yoast SEO 16.5 in <a href="https://yoa.st/release-16-5">our release post</a>!

Enhancements:
<ul>
 	<li>Introduces the Social Appearance Templates feature. This will give you the possibility to set title and description templates and a default image for social sharing of all your content types, archives and taxonomies.</li>
 	<li>Improves the stemming of Spanish words that look like ending in suffix <code>-mente</code>, e.g. <code>"clemente"</code> was incorrectly stemmed to <code>"cl"</code>, now it's stemmed to <code>"clement"</code>.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where the <code>Yoast\WP\SEO\enable_notification_{$watch_type}_{$notification_type}</code> filter name was not correctly registered.</li>
</ul>
Other:
<ul>
 	<li>Deprecates the <code>Yoast\WP\SEO\Integrations\Admin\Prominent_Words\Indexing_Integration</code> class in favor of the <code>Yoast\WP\SEO\Premium\Integrations\Admin\Prominent_Words\Indexing_Integration</code> class.</li>
 	<li>Deprecates the <code>Yoast\WP\SEO\Integrations\Admin\Prominent_Words\Metabox_Integration</code> class in favor of the <code>Yoast\WP\SEO\Premium\Integrations\Admin\Prominent_Words\Metabox_Integration</code> class.</li>
 	<li>Deprecates the <code>Yoast\WP\SEO\Helpers\Prominent_Words_Helper</code> class in favor of the <code>Yoast\WP\SEO\Premium\Helpers\Prominent_Words_Helper</code> class.</li>
 	<li>Deprecates the <code>Yoast\WP\SEO\Helpers\Zapier_Helper</code> class in favor of the <code>Yoast\WP\SEO\Premium\Helpers\Zapier_Helper</code> class.</li>
 	<li>Deprecates the <code>Yoast\WP\SEO\Conditionals\Zapier_Enabled_Conditional</code> class in favor of the <code>Yoast\WP\SEO\Premium\Conditionals\Zapier_Enabled_Conditional</code> class.</li>
 	<li>Deprecates the <code>Yoast\WP\SEO\Integrations\Third_Party\Elementor_Premium</code> class in favor of the <code>Yoast\WP\SEO\Premium\Integrations\Third_Party\Elementor_Premium</code> class.</li>
 	<li>Deprecates the <code>Yoast\WP\SEO\Integrations\Third_Party\Zapier</code> class in favor of the <code>Yoast\WP\SEO\Premium\Integrations\Third_Party\Zapier</code> class.</li>
 	<li>Deprecates the <code>Yoast\WP\SEO\Integrations\Third_Party\Zapier_Classic_Editor</code> class in favor of the <code>Yoast\WP\SEO\Premium\Integrations\Third_Party\Zapier_Classic_Editor</code> class.</li>
 	<li>Deprecates the <code>Yoast\WP\SEO\Integrations\Third_Party\Zapier_Trigger</code> class in favor of the <code>Yoast\WP\SEO\Premium\Integrations\Third_Party\Zapier_Trigger</code> class.</li>
</ul>
<h2 id="v16.4">16.4</h2>
<small>June 1st, 2021</small>

Meet Yoast SEO 16.4: This brand-new version of Yoast SEO Premium comes with a rewritten language analysis, plus a newly supported language: Czech. People who write in this language can now fully use our tools to improve their content. We hope you enjoy this update! Read more about what’s new in Yoast SEO 16.4 in <a href="https://yoa.st/release-16-4">our release post</a>!

Enhancements:
<ul>
 	<li>Introduces word form support for Czech.</li>
 	<li>Improves Hungarian word form recognition of certain words with the letter combinations <code>cs</code>, <code>dz</code>, <code>dzs</code>, <code>gy</code>, <code>ly</code>, <code>ny</code>, <code>ty</code>, and <code>zs</code>, for example <code>balszerencséjük</code> and <code>balszerencséjére</code>.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where word form support for languages other than English would not work in Elementor.</li>
</ul>
<h2 id="v16.3">16.3</h2>
<small>May 18th, 2021</small>

Out now: Yoast SEO 16.3! This release helps you with one of the key aspects of modern SEO: Structured data. Yoast SEO 16.3 comes with a lot of enhancements for the Schema.org implementation. You can now enhance your personal profile in Schema, for instance! Read more about what’s new in Yoast SEO 16.3 in <a href="https://yoa.st/release-16-3">our release post</a>!

Enhancements:
<ul>
 	<li>Adds user profile controls for richer profile Schema. If you fill in (for example) your job title, birthdate or honorific prefix in the newly added input fields in your user profile settings, that data will be used in the profile Schema output.</li>
 	<li>Implements TranslationsPress to reduce the zip size, by no longer shipping translations for Premium in the zip but loading them dynamically instead.</li>
 	<li>Moves the "Custom fields to include in page analysis" input fields to above the archives settings for supported post types on the Search Appearance &gt; Content types tab, updates the styling of the field, and adds a help icon that links to the related help page.</li>
</ul>
Other:
<ul>
 	<li>Restricts access for managing redirects to Editors and Administrators, and other users with the <code>wpseo_manage_redirects</code> capability.</li>
</ul>
<h2 id="v16.2">16.2</h2>
<small>April 28th, 2021</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where users with a role of Editor, or SEO Manager, or SEO Editor could no longer access the administration page to manage the Redirects.</li>
 	<li>Fixes a bug where the protocol instead of the domain would be displayed in the social previews.</li>
</ul>
<h2 id="v16.1">16.1</h2>
<small>April 6th, 2021</small>

Yoast SEO Premium 16.1 is out today! It features several fixes that make the plugin chug along nicely. Happy updating! Read more about what’s new in Yoast SEO Premium 16.1 in <a href="https://yoa.st/release-16-1">our release post</a>!

Bugfixes:
<ul>
 	<li>Fixes a bug where the Insights and Link suggestions features would always be re-enabled upon plugin activation, even if the user had disabled them.</li>
 	<li>Fixes a bug where upgrade routines would only be run in the admin, which meant they would not be triggered when updating the plugin via the CLI without visiting the admin.</li>
 	<li>Fixes a bug where the Premium as an addon installation status could be reset when it didn't have to be.</li>
</ul>
<h2 id="v16.0.3">16.0.3</h2>
<small>March 23rd, 2021</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where the “Activate your subscription” link would be in the wrong place on the Plugins page. Sorry for the confusion.</li>
 	<li>Fixes a bug where the strip category base class would be wrongly instantiated under specific circumstances.</li>
</ul>
<h2 id="v16.0.2">16.0.2</h2>
<small>March 18th, 2021</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where a fatal error would occur on plugin activation if Yoast SEO was not activated and the automatic installation for Yoast SEO had been completed successfully before.</li>
</ul>
<h2 id="v16.0.1">16.0.1</h2>
<small>March 16th, 2021</small>

Other:
<ul>
 	<li>Upgrades the automatic installation of Yoast SEO to install Yoast SEO 16.0.1.</li>
</ul>
<h2 id="v16.0">16.0</h2>
<small>March 16th, 2021</small>

Yoast SEO 16.0: The Sweet Sixteen release is out! It comes with several fixes and improvements. Happy updating and thank you for using Yoast SEO Premium! Read more about what’s new in Yoast SEO 16.0 in <a href="https://yoa.st/release-16-0">our release post</a>!

Other:
<ul>
 	<li>Yoast SEO Premium now requires Yoast SEO to be installed and activated. The first time you upgrade to Yoast SEO Premium 16.0, Yoast SEO 16.0 will automatically be installed and activated for you.</li>
 	<li>Hides the 'deactivate' button for Yoast SEO on the Plugins page, as long as Yoast SEO Premium is active, because Yoast SEO Premium cannot function properly without Yoast SEO. When Yoast SEO Premium is deactivated, the 'deactivate' button for Yoast SEO will reappear.</li>
 	<li>Sets the minimum supported WordPress version to 5.6.</li>
 	<li>Includes every change in Yoast SEO core 16.0. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.9.2">15.9.2</h2>
<small>March 11th, 2021</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where Zapier calls would not trigger in timezones west of GMT.</li>
 	<li>Fixes a bug where a deprecation notice was displayed in the Redirects page when using WordPress 5.7.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 15.9.2. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.9.1">15.9.1</h2>
<small>March 4th, 2021</small>

Welcome to Yoast SEO 15.9.1! This release contains an improvement for the FAQ block schema output, and makes sure the plugin is compatible with WordPress Core's auto-update feature and <code>robots</code> changes. Read more about those changes in <a href="https://yoa.st/release-15-9-1">our post about Yoast SEO 15.9.1 and WordPress 5.7</a>!

Other:
<ul>
 	<li>Adds a notification to prompt users to enable auto-updates for Yoast SEO Premium, in case they also have auto-updates for WordPress Core enabled.</li>
 	<li>Enables/disables auto-updates for the Yoast Woocommerce, News, Video and Local SEO plugins when auto-updates for Yoast SEO Premium are enabled/disabled.</li>
 	<li>Includes every change in Yoast SEO core 15.9.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.9">15.9</h2>
<small>February 23rd, 2021</small>

Yoast SEO 15.9 is out! This release comes with performance improvements and general enhancements. Happy updating and thanks for using Yoast SEO Premium! Read more about what’s new in Yoast SEO 15.9 in <a href="https://yoa.st/release-15-9">our release post</a>!

Enhancements:
<ul>
 	<li>Improves the performance of loading redirects.</li>
 	<li>Fixes possible misinterpretations or deprecation errors in the redirect manager due to an outdated SQL operator.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where <code>Yoast SEO</code> instead of <code>Yoast SEO Premium</code> would be shown as the plugin name in the taxonomy metabox in Internet Explorer.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 15.9. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.8.2">15.8.2</h2>
<small>February 12th, 2021</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where JavaScript and CSS files were missing for customers who downloaded 15.8.1 immediately after it was released.</li>
</ul>
<h2 id="v15.8.1">15.8.1</h2>
<small>February 12th, 2021</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where no Zapier API key would be generated when enabling the Zapier integration.</li>
</ul>
<h2 id="v15.8">15.8</h2>
<small>February 10th, 2021</small>

Say hi to Yoast SEO 15.8! This release comes with a brand-new breadcrumbs block for the block editor. Try it out and guide your users - and Google! Read more about what’s new in Yoast SEO 15.8 in <a href="https://yoa.st/release-15-8">our release post</a>!

Enhancements:
<ul>
 	<li>You no longer have to type your name and email address when you send a support request via the HelpScout beacon. They’re taken from your WordPress profile.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where the wrong HelpScout beacon would load, thus not showing an ‘Ask’ option.</li>
 	<li>Fixes a bug where the Estimated Reading Time icon placeholder would be output as <code>ICON_PLACEHOLDER</code> when the post content was rendered directly, for example in a Latest Posts block. The icon is no longer visible when the post content is rendered directly.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 15.8. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.7">15.7</h2>
<small>January 26th, 2021</small>

Meet Yoast SEO 15.7! Do you already use the state-of-the-art Premium analysis in Yoast SEO? Great! It now also comes with full language support for Turkish! Read more about what’s new in Yoast SEO 15.7 in <a href="https://yoa.st/release-15-7">our release post</a>!

Enhancements:
<ul>
 	<li>Introduces word form support for Turkish.</li>
 	<li>Adds block previews for the table of contents block, the related links block and the estimated reading time block.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where the Estimated Reading Time block would not handle the icon correctly for non-administrator and non-editor users. The affected posts need to be saved again in order to add the icon on the frontend.</li>
 	<li>Fixes a bug where the Estimated Reading Time block would not support additional CSS classes.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 15.7. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.6.2">15.6.2</h2>
<small>January 12th, 2021</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 15.6.2 See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.6.1">15.6.1</h2>
<small>January 12th, 2021</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 15.6.1 See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.6">15.6</h2>
<small>January 12th, 2021</small>

Say hi to Yoast SEO 15.6! You can now add an Estimated reading time block to your posts! You can also find the estimated reading time in the Insights Tab on your posts/pages. Plus: Word form support for Norwegian writers! Read more about what’s new in Yoast SEO 15.6 in <a href="https://yoa.st/release-15-6">our release post</a>!

Enhancements:
<ul>
 	<li>Adds a Block Editor block that shows the estimated reading time for a Page or Post.</li>
 	<li>Adds the estimated reading time to the Insights Modal.</li>
 	<li>Introduces word form support for Norwegian.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where the Yoast siblings and subpages blocks were not active in certain edge cases.</li>
</ul>
Other:
<ul>
 	<li>Reduces JavaScript bundle sizes, which should result in slightly faster page loads of the editor.</li>
 	<li>Includes every change in Yoast SEO core 15.6. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.5">15.5</h2>
<small>December 15th, 2020</small>

Out now: Yoast SEO 15.5! In this release, you’ll find full language support for Hungarian!
This means that Yoast SEO recognizes different word forms of your focus keyphrase. Helping for better readability and for you to rank better! Read more about what’s new in Yoast SEO 15.5 in <a href="https://yoa.st/release-15-5">our release post</a>!

Enhancements:
<ul>
 	<li>Introduces word form support for Hungarian.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 15.5. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.4">15.4</h2>
<small>December 2nd, 2020</small>

It’s here: Yoast SEO 15.4! In this release, you’ll find a seamless, easy-to-use integration of Yoast SEO with Elementor. Building websites and optimizing content for the search engines now in one workflow! Read more about what’s new in Yoast SEO 15.4 in <a href="https://yoa.st/release-15-4">our release post</a>!

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 15.4. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.3">15.3</h2>
<small>November 17th, 2020</small>

Out now: Yoast SEO 15.3! In this release, you’ll find the new Zapier integration that makes it easy as ABC to share your content. Use zaps to automatically share your published posts! You’ll also find full language support for Hebrew in our analysis, helping you write high-quality content! Read more about what’s new in Yoast SEO 15.3 in <a href="https://yoa.st/release-15-3">our release post</a>!

Enhancements:
<ul>
 	<li>Adds an integration with Zapier to easily create zaps that instantly share your published posts with 2000+ destinations like Twitter, Facebook, and more. This is released in beta.</li>
 	<li>Introduces word form support for Hebrew.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 15.3. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.2.1">15.2.1</h2>
<small>November 2nd, 2020</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 15.2.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.2">15.2</h2>
<small>October 27th, 2020</small>

Enhancements:
<ul>
 	<li>Adds word forms support for Swedish keyphrase recognition.</li>
 	<li>Improves the recognition of Indonesian passive voice, including for non-passives that are spelled like passives.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where the title of the table of contents block would not be translatable.</li>
 	<li>Fixes a bug where an admin notice about adding a redirect would be shown when non-public taxonomy was deleted.</li>
 	<li>Fixes a bug where the <code>Start SEO data optimization</code> button was not shown after a page refresh in case the indexables had been indexed correctly, but the prominent words indexing had failed.</li>
 	<li>Fixes a bug where, after restoring a post from the trash, it was not possible to remove any redirects that were created when that post was moved to the trash.</li>
 	<li>Fixes a bug where using the SEMRush integration to fetch related keyphrases would fail in the classic editor.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 15.2. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.1.1">15.1.2</h2>
<small>October 15th, 2020</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 15.1.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.1.1">15.1.1</h2>
<small>October 14th, 2020</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where a fatal error would be thrown on the post edit screen in cases where SEO data had never been indexed.</li>
</ul>
<h2 id="v15.1">15.1</h2>
<small>October 14th, 2020</small>

Enhancements:
<ul>
 	<li>Adds buttons to easily add related keyphrases from the SEMrush integration.</li>
 	<li>Improves the styling of the link suggestions by adding labels and showing just one list of items.</li>
 	<li>Adds an activation link to the plugins overview page that is shown when your plugin is not activated in MyYoast.</li>
 	<li>Always shows a link to the FAQ on the plugins overview page.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where the related links block would thrown an error when the metabox was disabled.</li>
</ul>
Other:
<ul>
 	<li>Integrates the internal linking suggestions indexing tool on the tools page into the general indexing tool of Yoast SEO.</li>
 	<li>Includes every change in Yoast SEO core 15.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v15.0">15.0</h2>
<small>September 29th, 2020</small>

Enhancements:
<ul>
 	<li>Introduces word form support for Arabic.</li>
 	<li>Introduces a new table of contents block. In order for the table of contents block to work, all heading blocks will automatically have anchors generated for them.</li>
 	<li>Improves internal linking suggestions for languages without function word recognition by increasing the number of prominent words that are saved for a post, page or term.</li>
 	<li>Improves internal linking suggestions and insights for Arabic and Urdu by improving the prominent word recognition when words in the text occur with specific punctuation marks.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where no plugin icon and compatibility data would be displayed on the plugins update screen.</li>
</ul>
Other:
<ul>
 	<li>Removes the feedback link underneath the focus keyphrase input field.</li>
 	<li>Includes every change in Yoast SEO core 15.0. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.9">14.9</h2>
<small>September 1st, 2020</small>

Enhancements:
<ul>
 	<li>Adds word form functionality for Polish.</li>
 	<li>Improves internal linking suggestions and Insights for Hebrew by filtering function words.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where a PHP error would be thrown about the <code>WPSEO_Replace_Vars</code> service being private.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 14.9. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.8.1">14.8.1</h2>
<small>August 25th, 2020</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 14.8.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.8">14.8</h2>
<small>August 18th, 2020</small>

Enhancements:
<ul>
 	<li>Adds the Yoast Related Posts block which generates a list of links to related posts.</li>
 	<li>Improves the text of the user feedback link in the SEO analysis tab and shows it for all languages.</li>
 	<li>Improves internal linking suggestions and Insights for Arabic by filtering function words.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where opening the sidebar would make the user feedback link disappear inside the metabox.</li>
</ul>
Other:
<ul>
 	<li>Sets minimum supported WordPress version to 5.4.</li>
 	<li>Includes every change in Yoast SEO core 14.8. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.7">14.7</h2>
<small>August 5th, 2020</small>

Enhancements:
<ul>
 	<li>Improves the algorithm used for generating internal linking suggestions, taking the relative frequency of the prominent words in your content into account.</li>
 	<li>Enables internal linking suggestions for all languages.</li>
 	<li>Adds internal linking support for terms. Terms can now be suggested as internal linking suggestions for posts.</li>
 	<li>Adds a label to the internal linking suggestions, indicating the post type or taxonomy name of the suggested post or term.</li>
 	<li>Changes the description of the site-wide internal linking analysis on the SEO tools page to better describe when it should be used.</li>
 	<li>Sets the minimum amount of words before generating prominent words to 100 words.</li>
 	<li>Notifies the user to add a meta description and title to get better internal linking suggestions by a message above the internal linking suggestions.</li>
 	<li>Adds recognition of common irregular plural nouns (e.g., uomo - uomini) and adjectives (e.g., ampio - ampli) in Italian.</li>
 	<li>Adds recognition of common irregular diminutives in Italian, such as nouns (e.g., ovetto - uovo), adjectives (e.g., dolciastro - dolce), and verbs (e.g., scribacchiare - scrivere).</li>
 	<li>Improves word form recognition of Russian nouns with stems that have endings similar to noun case suffixes (e.g., сиптом, гром, запах).</li>
 	<li>Improves keyword recognition of Russian irregular plurals.</li>
 	<li>Improves stemming of common irregular verbs in French (e.g., connusse, suiviez).</li>
 	<li>Improves recognition of several French first person plural verb forms with suffix -ons (not -ions), e.g. <em>aimons</em>, <em>aidons</em>, <em>oisons</em>, <em>aerons</em>.</li>
 	<li>Compatibility with WordPress 5.5: makes sure Yoast internal linking blocks are searchable, have examples and a description.</li>
</ul>
Other:
<ul>
 	<li>Enables tracking when activating premium. Previously tracking was always on. It can now be disabled in the configuration wizard.</li>
 	<li>Includes every change in Yoast SEO core 14.7. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.6.1">14.6.1</h2>
<small>July 21st, 2020</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 14.6.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.6">14.6</h2>
<small>July 21st, 2020</small>

Enhancements:
<ul>
 	<li>Adds Internal linking suggestions and Insights for Indonesian.</li>
 	<li>Adds word form support for Portuguese.</li>
 	<li>Adds word form support for Indonesian.</li>
 	<li>Shows the <code>Yoast didn’t recognize my keyphrase</code> button when the site language is set to Portuguese or Indonesian.</li>
 	<li>Shows the language beacon when the site language is set to Indonesian.</li>
 	<li>Improves word form recognition of Russian nouns with stems that have endings similar to noun case suffixes. Example: сипт<strong>ом</strong>, гр<strong>ом</strong>, зап<strong>ах</strong>.</li>
 	<li>Improves word form recognition of Russian nouns that have irregular plurals.</li>
 	<li>Adds recognition of common irregular diminutives in Italian, such as nouns (e.g., <code>ovetto</code> - <code>uovo</code>), adjectives (e.g., <code>dolciastro</code> - <code>dolce</code>), and verbs (e.g., <code>scribacchiare</code> - <code>scrivere</code>). It also stops filtering out <code>scrivere</code>, <code>scrive</code>, and <code>scritto</code> as function words during the keyphrase analysis.</li>
 	<li>Adds recognition of common irregular plural nouns (e.g., <code>uomo</code> - <code>uomini</code>) and adjectives (e.g., <code>ampio</code> - <code>ampli</code>) in Italian.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 14.6. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.5">14.5</h2>
<small>July 8th, 2020</small>

Enhancements:
<ul>
 	<li>Adds a siblings block and a subpages blocks which can be used to improve internal linking.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where an empty string set as <code>rest_base</code> for a post type would give JavaScript errors.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 14.5. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.4.1">14.4.1</h2>
<small>June 23rd, 2020</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 14.4.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.4">14.4</h2>
<small>June 23rd, 2020</small>

Enhancements:
<ul>
 	<li>Adds a fix for French nouns ending in <code>-ition</code> and <code>-itions</code> (e.g., <code>supposition</code>, <code>suppositions</code>) so that they can be recognized and matched with the corresponding verb and/or adjective (e.g., <code>supposer</code>).</li>
 	<li>Improves recognition of first person plural verb forms in French (e.g., <code>chantons</code>).</li>
 	<li>Adds keyphrase recognition for infinitives in Russian on <code>ть</code> (<code>ать</code>, <code>ять</code>, <code>еть</code>) and improves recognition of perfective infinitives in Russian on <code>уть</code> (<code>блеснуть</code>).</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 14.4. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.3">14.3</h2>
<small>June 9th, 2020</small>

Enhancements:
<ul>
 	<li>Adds word form support for Italian.</li>
 	<li>Improves keyphrase recognition of certain French verbs ending on <code>-oir</code> or <code>-re</code> in the infinitive (e.g. <code>asseoir</code>, <code>apprendre</code>) as well as of some irregular verbs (e.g. <code>appertenir</code>, <code>vivre</code>).</li>
 	<li>Improves word form recognition of short French words (e.g. <code>ours</code> - <code>our</code>; <code>âmes</code> - <code>âme</code>).</li>
 	<li>Improves the way keyphrases containing words ending in <code>-ent</code> are recognized in the text.</li>
 	<li>Improves keyword recognition of words ending in <code>-is</code>/<code>-us</code>/<code>-os</code> in French.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where <code>.htaccess</code> redirects in a multisite were overwritten by other sites in the same network.</li>
 	<li>Fixes a bug where the replacement variables coming from Yoast SEO WooCommerce were not replaced correctly in the Social Previews.</li>
</ul>
Other:
<ul>
 	<li>Adds a feedback link underneath the focus keyphrase input field to allow users to report problems with keyphrase recognition for languages with rudimentary morphology support.</li>
 	<li>Improves security for AJAX routes used in the social previews.</li>
 	<li>Includes every change in Yoast SEO core 14.3. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.2">14.2</h2>
<small>May 26th, 2020</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where the buttons in several notifications didn't work.</li>
</ul>
Enhancements:
<ul>
 	<li>Adds word form support for Russian.</li>
 	<li>Improves keyphrase recognition in French when the keyphrase contains a word which gets the -x suffix in plural (e.g., jeux).</li>
 	<li>Improves keyphrase recognition in French when the keyphrase contains irregular nouns or adjectives.</li>
 	<li>Improves keyphrase recognition in French when the keyphrase contains words ending in -issement(s).</li>
 	<li>Updates the copy of the notification displayed when the Premium plugin subscription isn't activated.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 14.2. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.1">14.1</h2>
<small>May 13th, 2020</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where the styling of the score column heading on the post overview would be broken.</li>
 	<li>Fixes a bug when the keyphrase distribution assessment might return skewed results if a text contains lists of single words.</li>
</ul>
Enhancements:
<ul>
 	<li>Adds word forms support for French (beta version).</li>
 	<li>Improves the way Dutch diminutive nouns are recognized as forms of the keyphrase.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 14.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.0.3">14.0.4</h2>
<small>April 30th, 2020</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 14.0.4. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.0.3">14.0.3</h2>
<small>April 30th, 2020</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 14.0.3. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.0.2">14.0.2</h2>
<small>April 29th, 2020</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 14.0.2. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.0.1">14.0.1</h2>
<small>April 28th, 2020</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 14.0.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v14.0">14.0</h2>
<small>April 28th, 2020</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 14.0. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v13.5">13.5</h2>
<small>April 14th, 2020</small>

Enhancements:
<ul>
 	<li>Adds word form support for Spanish.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where the text analysis would break if the text contains the word "Ying".</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 13.5. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v13.4.1">13.4.1</h2>
<small>April 1st, 2020</small>

Bugfixes:
<ul>
 	<li>Replaces the use of the deprecated <code>category_link</code> filter by <code>term_link</code>. Props to <a href="https://github.com/Chouby">Chouby</a></li>
</ul>
<h2 id="v13.4">13.4</h2>
<small>March 31st, 2020</small>

Enhancements:
<ul>
 	<li>Adds word form support for Dutch.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 13.4. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v13.3">13.3</h2>
<small>March 17th, 2020</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 13.3. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v13.2">13.2</h2>
<small>March 3rd, 2020</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 13.2. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers" rel="nofollow">core changelog.</a></li>
</ul>
<h2 id="v13.1">13.1</h2>
<small>February 18th, 2020</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 13.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers" rel="nofollow">core changelog.</a></li>
</ul>
<h2 id="v12.7.1">13.0</h2>
<small>February 4th, 2020</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where the redirect file for apache or nginx wasn't written.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 13.0. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v12.7.1">12.9.2</h2>
<small>January 30st, 2020</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where a fatal error would be thrown when malformed redirect URLs were present in the database.</li>
</ul>
<h2 id="v12.7.1">12.9.1</h2>
<small>January 21st, 2020</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 12.9.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers" rel="nofollow">core changelog.</a></li>
</ul>
<h2 id="v12.7.1">12.9</h2>
<small>January 21st, 2020</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where saved options weren't reflected on the redirect settings page.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 12.9. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers" rel="nofollow">core changelog.</a></li>
</ul>
<h2 id="v12.7.1">12.8.1</h2>
<small>January 15th, 2020</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where a fatal error would be thrown when the plugin was activated on a site with thousands of users.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 12.8.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers" rel="nofollow">core changelog</a>.</li>
</ul>
<h2 id="v12.7.1">12.8</h2>
<small>January 7th, 2020</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where incorrect redirects would be created on multisite environments in combination with MultilingualPress.</li>
 	<li>Fixes a bug where the notification to analyze your content for better internal linking suggestions was not shown.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 12.8. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers" rel="nofollow">core changelog</a>.</li>
</ul>
<h2 id="v12.7.1">12.7.1</h2>
<small>December 12th, 2019</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 12.7.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v12.7">12.7</h2>
<small>December 10th, 2019</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 12.7. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v12.6.1">12.6.1</h2>
<small>November 27th, 2019</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 12.6.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v12.6">12.6</h2>
<small>November 26th, 2019</small>

Enhancements:
<ul>
 	<li>Adds the HelpScout Beacon to the plugins redirect page.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where the verb form 'landscape' was not recognized in the text when the keyphrase contained the verb 'landscaping'.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 12.6. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v12.5.1">12.5.1</h2>
<small>November 21th, 2019</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 12.5.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v12.5">12.5</h2>
<small>November 13th, 2019</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 12.5. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v12.4">12.4</h2>
<small>October 29th, 2019</small>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 12.4. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v12.3">12.3</h2>
<small>October 15th, 2019</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where internal linking suggestions were not aligned correctly, but were indented instead.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 12.3. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v12.2">12.2</h2>
<small>October 1st, 2019</small>

Other:
<ul>
 	<li>Enables the tracking of diagnostic data.</li>
 	<li>Includes every change in Yoast SEO core 12.2. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v12.1">12.1</h2>
<small>September 17th, 2019</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 12.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v12.0.1">12.0.1</h2>
<small>September 4th, 2019</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where custom replacement variables would not be replaced in some implementations.</li>
</ul>
<h2 id="v12.0">12.0</h2>
<small>September 3rd, 2019</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 12.0. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v11.9">11.9</h2>
<small>August 20th, 2019</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where multiple redirects would be created when editing taxonomies on a multisite environment.</li>
 	<li>Fixes a bug where the social preview forms were shown twice on taxonomies.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 11.9. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v11.8">11.8</h2>
<small>August 6th, 2019</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where regex redirects starting with a forward slash could not be deleted.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 11.8. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v11.7">11.7</h2>
<small>July 23rd, 2019</small>

Enhancements:
<ul>
 	<li>Improves the feedback message for internal linking suggestions when a text contains prominent words, but no linking suggestions were found.</li>
 	<li>Improves the modal that is shown during the site-wide internal linking analysis.</li>
 	<li>Adds a description to the site-wide internal linking analysis button on the Tools page.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where no help buttons would be shown in the social preview tabs in the metabox.</li>
 	<li>Fixes a bug where the site-wide internal linking analysis would not stop when the <code>Stop analyzing</code> was clicked.</li>
 	<li>Fixes a bug where CSV imports would always fail on multisite environments.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 11.7. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v11.6">11.6</h2>
<small>July 9th, 2019</small>

Enhancements:
<ul>
 	<li>Added caching for AJAX requests regarding social preview images.</li>
</ul>
Bugfixes
<ul>
 	<li>Fixes a bug where an AJAX request would be sent on every keystroke when an image was present in the content, which would also result in '400 bad request' HTTP errors.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 11.6. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v11.5">11.5</h2>
<small>June 25th, 2019</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where the alert icon would be missing in the warning that is shown in the metabox when the user doesn't have an active license.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 11.5. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v11.4">11.4</h2>
<small>June 12th, 2019</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 11.4. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v11.3">11.3</h2>
<small>May 28th, 2019</small>

Bugfixes:
<ul>
 	<li>Fixes fatal error when creating a redirect containing a double quote when .htaccess redirects were active.</li>
 	<li>Fixes a bug where the update notification counter would show an incorrect count when the plugin was out of date.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 11.3. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v11.2.1">11.2.1</h2>
<small>May 16th, 2019</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 11.2.1. See the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v11.2.0">11.2.0</h2>
<small>May 15th, 2019</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where the <code>create redirect</code> button would be shown for users without the right permissions.</li>
</ul>
Enhancements:
<ul>
 	<li>Improves the keyphrase recognition for additional irregular verbs in German (e.g., <code>brennen</code>, <code>senden</code>, <code>kennen</code>).</li>
 	<li>Fixes a performance problem relating to collecting post cache including Prominent Words. These were being primed but are only used in internal functionality.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 11.2 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v11.1.1">11.1.1</h2>
<small>May 6th, 2019</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 11.1.1 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v11.1">11.1</h2>
<small>April 30th, 2019</small>

Bugfixes:
<ul>
 	<li>Improves the recognition of German keyphrases that include words with an <code>i</code> or <code>e</code> in between vowels (e.g., <code>schrieen</code>, <code>schreien</code>, <code>speie</code>).</li>
 	<li>Improves recognition of German 3rd person singular verb forms (e.g., <code>arbeitet</code>).</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 11.1 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v11.1.0">11.1.0</h2>
<small>April 30th, 2019</small>
Bugfixes:
<ul>
 	<li>Improves the recognition of German keyphrases that include words with an <code>i</code> or <code>e</code> in between vowels (e.g., <code>schrieen</code>, <code>schreien</code>, <code>speie</code>).</li>
 	<li>Improves recognition of German 3rd person singular verb forms (e.g., <code>arbeitet</code>).</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 11.1 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 class="11.0.0">11.0.0</h2>
<small>Release Date: April 16th, 2019</small>

We've made huge changes to the schema.org markup we output, adding multiple different types of Schema. Be sure to check <a href="https://yoa.st/schema-release-post">our posts on yoast.com about this release</a>!

Enhancements:
<ul>
 	<li>Schema changes:</li>
 	<li>Adds <code>Person</code> markup for author pages.</li>
 	<li>Adds <code>WebPage</code> markup for all pages.</li>
 	<li>Adds <code>Article</code> markup for posts, with <code>Person</code> markup for the author.</li>
 	<li>Changes the ‘Organization or Person’ section of the Knowledge graph settings to allow selecting an author that is the ‘Person’ that the website represents.</li>
 	<li>Adds MySpace, SoundCloud, Tumblr and YouTube URL input fields to people’s profiles.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes an issue where the metabox would not display on term edit pages when running the development build of Gutenberg.</li>
</ul>
<h2 id="v10.1.3">10.1.3</h2>
<small>April 4th, 2019</small>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 10.1.3 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v10.1.2">10.1.2</h2>
<small>April 3rd, 2019</small>
Bugfixes:
<ul>
 	<li>Fixes a bug where the license information from MyYoast is being saved aggressively, causing updates in MyYoast to take 24 hours to show up in the site.</li>
</ul>
<h2 id="v10.1.1">10.1.1</h2>
<small>April 2nd, 2019</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 10.1.1 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v10.1.0">10.1.0</h2>
<small>April 2nd, 2019</small>

Enhancements:
<ul>
 	<li>Introduces recognition of grammatical forms for German keyphrases. This means that plural forms such as <code>Häuser</code> will be recognized if your keyphrase is <code>Haus</code>, for example. Doesn't just work for those of you who have multiple homes by the way.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where the Internal Linking metabox would show a warning that not all posts were analyzed, while all eligible posts actually <em>were</em> indexed.</li>
 	<li>Fixes a bug that impeded recognition of word forms for keyphrases on taxonomy pages.</li>
</ul>
Other:
<ul>
 	<li>Removes all functionality that has been deprecated before Yoast SEO 6.1.</li>
 	<li>Includes every change in Yoast SEO core 10.1.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v10.0.1">10.0.1</h2>
<small>March 19th, 2019</small>

Other:
<ul>
 	<li>Includes every change in Yoast SEO core 10.0.1 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v10.0.0">10.0.0</h2>
<small>March 12th, 2019</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where a related keyphrase or synonym field containing a backslash or consecutive double quotes would be emptied when saving a post or term.</li>
 	<li>Fixes a bug where backslashes would be removed from the Twitter and Facebook title and description when saving a term.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 10.0.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v9.7.0">9.7.0</h2>
<small>February 26th, 2019</small>

Enhancements:
<ul>
 	<li>Implements analysis markers for related keyphrases.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where quotes in the related keyphrases and synonyms could stop those fields from appearing.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 9.7.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v9.6.1">9.6.1</h2>
<small>February 12th, 2019</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where translations would be rendered incorrectly.</li>
</ul>
<h2 id="v9.6.0">9.6.0</h2>
<small>February 12th, 2019</small>

Enhancements:
<ul>
 	<li>Adds an "Ok" button to dismiss redirect notifications in the quick edit menu.</li>
 	<li>Improves the Redirects table accessibility by removing a duplicate button.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 9.6.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v9.5.0">9.5.0</h2>
<small>January 22nd, 2019</small>

Enhancements:
<ul>
 	<li>Adds a validator to the redirect manager to check if the redirect origin is relative.</li>
 	<li>Adds internal linking suggestions and insights for Swedish.</li>
 	<li>Improves the error logging for certain types of errors in the prominent words analysis and internal linking suggestions.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 9.5.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v9.4.2">9.4.2</h2>
<small>January 15th, 2019</small>

Bugfixes:
<ul>
 	<li>Fixes a bug where Premium features in the metabox might not work for custom post types.</li>
</ul>
<h2 id="v9.4.1">9.4.1</h2>
<small>January 14th, 2019</small>
Bugfixes:
<ul>
 	<li>Fixes a bug where additional keyphrases and synonyms would not be saved for taxonomies.</li>
</ul>
<h2 id="v9.4.0">9.4.0</h2>
<small>January 8th, 2019</small>
Content analysis recalibration (beta):
<ul>
 	<li>When the recalibration beta is enabled a "Stale cornerstone content"-filter is added to relevant content types.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where admin-assets would be loaded on pages where they are not relevant.</li>
 	<li>Fixes a bug where changing the slug of an inaccessible post type creates a redirect for that object.</li>
</ul>
Enhancements:
<ul>
 	<li>Improves the feedback given when importing redirects.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 9.4.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v9.3.0">9.3.0</h2>
<small>December 18th, 2018</small>
Bugfixes:
<ul>
 	<li>Fixes a bug where redirects that contained URI encodable characters couldn't be removed individually.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 9.3.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v9.2.1">9.2.1</h2>
<small>November 21th, 2018</small>
Bugfixes:
<ul>
 	<li>Fixes a bug where editing a content type item (page/post) would result in a blank page (Fatal error) when the metabox is disabled for that type.</li>
</ul>
<h2 id="v9.2.0">9.2.0</h2>
<small>November 20th, 2018</small>
Bugfixes:
<ul>
 	<li>Fixes a bug where the internal linking box is shown for post types that has the Yoast Metabox disabled.</li>
 	<li>Fixes internal linking button size in the document settings sidebar in Gutenberg.</li>
 	<li>Fixes a bug where no redirect notification was shown in Gutenberg when the permalink was updated.</li>
 	<li>Fixes a bug where the social previews won't reflect the entered post/page title realtime.</li>
</ul>
Other:
<ul>
 	<li>Adds additional context to the wpseo_premium_post_redirect_slug_change filter call.</li>
</ul>
<h2 id="v9.1.0">9.1.0</h2>
<small>November 6th, 2018</small>
Enhancements:
<ul>
 	<li>Improves an SQL query to perform better on sites with a lot of orphaned content.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where the activation warning would be incorrectly displayed on a sub-site within a multisite environment.</li>
 	<li>Fixes a bug where a PHP warning would be displayed when <code>php_uname</code> has been disabled for security reasons.</li>
 	<li>Fixes a bug where a PHP notice would be displayed when visiting a non-existing post.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 9.1.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v9.0.3">9.0.3</h2>
<small>October 30th, 2018</small>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 9.0.3 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v9.0.2">9.0.2</h2>
<small>October 24th, 2018</small>
Bugfixes:
<ul>
 	<li>Fixes a bug where the Gutenberg (v4.1) editor was partially hidden behind the metabox.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 9.0.2 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v9.0.1">9.0.1</h2>
<small>October 23rd, 2018</small>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 9.0.1 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v9.0">9.0</h2>
<small>October 23rd, 2018</small>
Enhancements:
<ul>
 	<li>Implements support for word form recognition for keyphrases in English. This means that e.g. <code>book</code> will be recognized in the text when the keyphrase is <code>books</code>.</li>
 	<li>Implements an improved algorithm for the keyphrase distribution assessment to check whether the keyphrase usage is evenly distributed throughout the text.</li>
 	<li>The following assessments will also count synonym matches as keyphrase matches:
<ul>
 	<li>Image alt attributes</li>
 	<li>Keyphrase in introduction</li>
 	<li>Keyphrase in meta description</li>
 	<li>Keyphrase in subheading</li>
 	<li>Keyphrase distribution</li>
</ul>
</li>
 	<li>The analysis for related keyphrases only shows assessments relevant for the specific keyphrase. It omits assessments that are non-keyphrase-related and assessments that should only be applied to the focus keyphrase.</li>
 	<li>For the keyphrase density assessment, the upper boundary for a good score is higher when word form recognition is available, since in that case the analysis is able to pick up more matches.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where the insights analysis on the tools page would not work.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 9.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v8.4.0">8.4.0</h2>
<small>October 9th, 2018</small>
Enhancements:
<ul>
 	<li>Adds multiple keyword support for taxonomies.</li>
 	<li>Adds synonyms to taxonomies.</li>
 	<li>Adds the keyword distribution assessment for taxonomies.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where automatic redirects would be created for non-public post types.</li>
</ul>
Other:
<ul>
 	<li>Adds the <code>wpseo_premium_include_automatic_redirection_post_types</code> filter to allow users to include more post types to create automatic redirects for.</li>
 	<li>Includes every change in Yoast SEO core 8.4.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v8.3.0">8.3.0</h2>
<small>September 25th, 2018</small>
Bugfixes:
<ul>
 	<li>Fixes a bug where the automatic redirect notification was not shown when a post was trashed from within Gutenberg.</li>
 	<li>Fixes a bug where the target of redirects from a subdirectory site to a path on the main domain were incorrectly disallowed.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 8.3.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v8.2.2">8.2.2</h2>
<small>September 20th, 2018</small>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 8.2.1 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v8.2.1">8.2.1</h2>
<small>September 20th, 2018</small>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 8.2.1 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v8.2.0">8.2.0</h2>
<small>September 11th, 2018</small>

Enhancements:
<ul>
 	<li>Adds Polish Insights and Linking Suggestions. Props <a href="https://github.com/tmotyl">@tmotyl</a> and <a href="https://github.com/oskardydo">@oskardydo</a> from <a href="https://github.com/macopedia">@macopedia</a>.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 8.2.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v8.1.2">8.1.2</h2>
<small>September 5th, 2018</small>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 8.1.2 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v8.1.1">8.1.1</h2>
<small>September 3rd, 2018</small>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 8.1.1 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v8.1.0">8.1.0</h2>
<small>August 28th, 2018</small>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 8.1.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v8.0.0">8.0.0</h2>
<small>August 14th, 2018</small>
Enhancements:
<ul>
 	<li>Revamps the design for multiple focus keywords to fit in the new metabox and Gutenberg sidebar.</li>
 	<li>Improves the UX of multiple focus keywords. Adding and removing keywords became easier.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where the keyword analysis was not updated after changing or adding synonyms.</li>
 	<li>Fixes a bug where the analysis icon for additional keywords would be red for an empty keyword.</li>
</ul>
Other:
<ul>
 	<li>Adds the Internal Linking section to the Gutenberg sidebar.</li>
 	<li>Adds the Insights section to the Gutenberg sidebar.</li>
 	<li>Improved plugin performance by lazy loading the <code>WPSEO_Redirects_Option</code> instead of instantiating that on every request. Props to <a href="https://github.com/stayallive">stayallive</a></li>
 	<li>Includes every change in Yoast SEO core 8.0.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.9.1">7.9.1</h2>
<small>August 7th, 2018</small>
Other:
<ul>
 	<li>Removes the Internal Linking meta box from the Gutenberg sidebar.</li>
 	<li>Includes every change in Yoast SEO core 7.9.1 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.9.0">7.9.0</h2>
<small>July 24th, 2018</small>
Bugfixes:
<ul>
 	<li>Fixes a bug where the prominent words for attachments can't be indexed when the attachment has an other post status than trash, inherit or private.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 7.9.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.8.1">7.8.1</h2>
<small>July 16th, 2018</small>
Bugfixes:
<ul>
 	<li>Fixes a bug where the snippet editor changes were not saved when the SEO Analysis feature is turned off.</li>
</ul>
<h2 id="v7.8.0">7.8.0</h2>
<small>July 10th, 2018</small>
Enhancements:
<ul>
 	<li>Shows a notification regarding the creation of redirects when deleting a category or tag.</li>
 	<li>Introduces an action (<code>wpseo_premium_redirects_modified</code>) that will be executed when a redirect has been added, edited or deleted.</li>
 	<li>Adds the possibility to enter keyword synonyms.</li>
 	<li>Adds an assessment the checks the distribution of the focus keyword in the text.</li>
 	<li>Adds an assessment that checks the distribution of keywords and synonyms.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where advertisements were being displayed next to video tutorials.</li>
 	<li>Fixes a bug where redirected URLs would show up in the sitemap.</li>
 	<li>Filters out prominent word combinations ending in 's in English. Props to <a href="https://github.com/swekkiekekkie">swekkiekekkie</a>.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 7.8.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.7.3">7.7.3</h2>
<small>July 2nd, 2018</small>
<ul>
 	<li>Includes every change in Yoast SEO core 7.7.3 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.7.2">7.7.2</h2>
<small>June 29th, 2018</small>
<ul>
 	<li>Includes every change in Yoast SEO core 7.7.2 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.7.1">7.7.1</h2>
<small>June 27th, 2018</small>
<ul>
 	<li>Includes every change in Yoast SEO core 7.7.1 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.7.0">7.7.0</h2>
<small>June 26th, 2018</small>
Bugfixes:
<ul>
 	<li>Fixes a bug where non-public posts were given as a link suggestion.</li>
 	<li>Fixes a bug where a redirect would redirect to the currently requested URL.</li>
 	<li>Fixes a bug where the fallback for the Facebook title in the social preview was not showing the correct title.</li>
 	<li>Fixes a bug where Yoast product advertisements were shown in the Help Center video tab.</li>
 	<li>Fixes a bug where the analysis would only show results for the main keyword when multiple keywords are used.</li>
 	<li>Fixes a bug where the analysis results were being hidden while they were being calculated.</li>
</ul>
<h2 id="v7.6.1">7.6.1</h2>
<small>June 7th, 2018</small>
<ul>
 	<li>Includes every change in Yoast SEO core 7.6.1 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.6.0">7.6.0</h2>
<small>June 5th, 2018</small>

Enhancements:
<ul>
 	<li>Adds WP-CLI commands to manage redirects. Use <code>wp yoast redirect</code> to see the list of available commands.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where the link to run the internal linking count for orphaned content did not work.</li>
 	<li>Fixes a bug where unpublished posts and password protected posts where taken into account in the orphaned content overview and notifications.</li>
 	<li>Includes every change in Yoast SEO core 7.6.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.5.3">7.5.3</h2>
<small>May 30th, 2018</small>
<ul>
 	<li>Includes every change in Yoast SEO core 7.5.3 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.5.2">7.5.2</h2>
<small>May 28th, 2018</small>
<ul>
 	<li>Fixes a bug where the determination of "Orphaned content" tries to account for <code>noindex</code> items, resulting in a lot of additional database querying.</li>
</ul>
<h2 id="v7.5.1">7.5.1</h2>
<small>May 16th, 2018</small>
<ul>
 	<li>Includes every change in Yoast SEO core 7.5.1 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.5.0">7.5.0</h2>
<small>May 15th, 2018</small>
Enhancements:
<ul>
 	<li>Adds Russian Insights and Linking Suggestions.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where the subdirectory is added twice to the origin form field when pressing the create redirect link on the adminbar.</li>
 	<li>Fixes a bug where the subdirectory is stripped out of the redirect target when it's provided as a full url.</li>
 	<li>Fixes a bug where posts set to <code>noindex</code> would show in the orphaned content filter.</li>
</ul>
Other:
<ul>
 	<li>Sets the maximum amount of Linking Suggestions to 10.</li>
 	<li>Includes every change in Yoast SEO core 7.5 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.4.2">7.4.2</h2>
<small>May 3rd, 2018</small>
<ul>
 	<li>Includes every change in Yoast SEO core 7.4.2 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.4.1">7.4.1</h2>
<small>May 2nd, 2018</small>
<ul>
 	<li>Includes every change in Yoast SEO core 7.4.1 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.4.0">7.4.0</h2>
<small>May 1st, 2018</small>
<ul>
 	<li>Includes every change in Yoast SEO core 7.4.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.3.0">7.3.0</h2>
<small>April 17th, 2018</small>
<ul>
 	<li>Fixes a bug where the pagination overlaps the orphaned content information message, on post overview pages in combination with low resolutions.</li>
 	<li>Includes every change in Yoast SEO core 7.3.0 see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.2.0">7.2.0</h2>
<small>April 3rd, 2018</small>
<ul>
 	<li>Fixes an issue where no new redirect was created after a parent/child relationship of a page was changed.</li>
 	<li>Fixes an issue where reverting the parent/child relationship of two pages could result in a redirect loop.</li>
 	<li>Removes plugin suggestions from the dashboard.</li>
 	<li>Includes every change in Yoast SEO core 7.2.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.1.1">7.1.1</h2>
<small>March 22nd, 2018</small>
Bugfix:
<ul>
 	<li>Fixes a fatal error on the Import/Export pages where a method on an import status property is called which is not always available.</li>
</ul>
<h2 id="v7.1.0">7.1.0</h2>
<small>March 20th, 2018</small>
Enhancement:
<ul>
 	<li>Adds Portuguese Insights and Linking suggestions. Props to <a href="https://github.com/amesdigital">amesdigital</a>.</li>
</ul>
Others:
<ul>
 	<li>Includes every change in Yoast SEO core 7.1.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.0.3">7.0.3</h2>
<h2><small>March 12th, 2018</small></h2>
<ul>
 	<li style="list-style-type: none">
<ul>
 	<li>Includes every change in Yoast SEO core 7.0.3, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
</li>
</ul>
<h2 id="v7.0.2">7.0.2</h2>
<h2><small>March 8th, 2018</small></h2>
<ul>
 	<li>Includes every change in Yoast SEO core 7.0.2, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.0.1">7.0.1</h2>
<small>March 6th, 2018</small>
<ul>
 	<li>Includes every change in Yoast SEO core 7.0.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v7.0.0">7.0.0</h2>
<small>March 6th, 2018</small>
Enhancements:
<ul>
 	<li>Adds SEO titles and meta descriptions to the focus keyword export.</li>
</ul>
Bugfixes:
<ul>
 	<li>Removes unnecessary HTML from button.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 7.0.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
 	<li>Removes the deprecated <code>WPSEO_Premium:: add_admin_pages</code> method.</li>
</ul>
<h2 id="v6.3.1">6.3.1</h2>
<small>February 19th, 2018</small>
<ul>
 	<li>Includes every change in Yoast SEO core 6.3.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v6.3.0">6.3.0</h2>
<small>February 13th, 2018</small>
Enhancements:
<ul>
 	<li>Adds a new sentence to the Internal Linking analyzer after completing a full site scan. This gives you more insight into what the effects are of running the analyzer.</li>
 	<li>Adds additional explanation on entries on the features tab.</li>
 	<li>Adds links to explanatory articles on the features tab.</li>
</ul>
Bugfixes:
<ul>
 	<li>Fixes a bug where a core WordPress function wasn't available when getting the <code>.htaccess</code> file path on an Apache installation.</li>
 	<li>Adds support for including custom post types in the prominent words recalculation process.</li>
</ul>
Other:
<ul>
 	<li>Includes every change in Yoast SEO core 6.3.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v6.2.0">6.2.0</h2>
<small>January 23rd, 2018</small>
<ul>
 	<li>Includes every change in Yoast SEO core 6.2.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v6.1.2">6.1.2</h2>
<small>January 12th, 2018</small>
<ul>
 	<li>Fixes a bug where the Regex redirects don't work anymore.</li>
</ul>
<h2 id="v6.1.1">6.1.1</h2>
<small>January 10th, 2018</small>
<ul>
 	<li>Includes every change in Yoast SEO core 6.1.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v6.1.0">6.1.0</h2>
<small>January 9th, 2018</small>
<ul>
 	<li>Fixes a bug in the redirects where an url decoded origin isn't found when the request uri isn't decoded.</li>
 	<li>Fixes a bug where on certain servers (using FastCGI) redirects could not be filtered.</li>
 	<li>Includes every change in Yoast SEO core 6.1.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v6.0.0">6.0.0</h2>
<small>December 20th, 2017</small>
<ul>
 	<li>Converts the list of post types to a format which is compatible with the REST API format.</li>
 	<li>Includes every change in Yoast SEO core 6.0.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.9.4">5.9.4</h2>
<small>December 13th, 2017</small>
<ul>
 	<li>Fixes an issue where any keyword except the first keyword would show the results of the first keyword.</li>
</ul>
<h2 id="v5.9.3">5.9.3</h2>
<small>December 11th, 2017</small>
<ul>
 	<li>Includes every change in Yoast SEO core 5.9.3, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.9.2">5.9.2</h2>
<small>December 11th, 2017</small>
<ul>
 	<li>Includes every change in Yoast SEO core 5.9.3, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.9.1">5.9.1</h2>
<small>December 5th, 2017</small>
<ul>
 	<li>Fixes a bug where the configuration wizard could not be loaded, caused by a missing JavaScript dependency.</li>
</ul>
<h2 id="v5.9.0">5.9.0</h2>
<small>December 5th, 2017</small>
<ul>
 	<li>Insights are now shown in a separate section below the text analysis.</li>
 	<li>Includes every change in Yoast SEO core 5.9.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.8.0">5.8.0</h2>
<small>November 15th, 2017</small>
<ul>
 	<li>Includes every change in Yoast SEO core 5.8.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.7.1">5.7.1</h2>
<small>October 25th, 2017</small>
<ul>
 	<li>Prefixes <code>$redirect_handler</code> as <code>$wpseo_redirect_handler</code> as this is globally available.</li>
</ul>
<h2 id="v5.7.0">5.7.0</h2>
<small>October 24th, 2017 </small>
<ul>
 	<li>Improved the copy of the notice that will be displayed when a post has been stored from the trash.</li>
 	<li>Fixes a bug by removing the accessibility check of a redirect target for regular expression redirects because these are likely to be dynamic.</li>
 	<li>Fixes a bug in the redirect search where the search string that starts or ends with a slash doesn't match with an expected result.</li>
 	<li>Fixes a bug where the "focus keyword used in another post"-check could not detect when a keyword was used at the 2nd, 3rd, 4th or 5th keyword spot.</li>
</ul>
<h2 id="v5.6.1">5.6.1</h2>
<small>October 13th, 2017</small>
<ul>
 	<li>Fixes a bug where a user with granted <code>wpseo_manage_redirects</code> would see settings which should not be shown.</li>
 	<li>Includes every change in Yoast SEO core 5.6.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.6.0">5.6.0</h2>
<small>October 10th, 2017</small>
<ul>
 	<li>Introduces the <code>Orphaned content</code> filter and notifications.</li>
 	<li>Fixes an issue where the 'You are not receiving updates or support!' notification would be wrongfully shown on a sub-site of a multisite installation.</li>
 	<li>Includes every change in Yoast SEO core 5.6, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.5.1">5.5.1</h2>
<small>September 28th, 2017</small>
<ul>
 	<li>Includes every change in Yoast SEO core 5.5.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.5.0">5.5.0</h2>
<small>September 26th, 2017</small>
<ul>
 	<li>Introduces <code>wpseo_manage_redirects</code> to allow any role or user to manage redirects without having to be an administrator.</li>
 	<li>Added filter for filtering redirects by redirect-type.</li>
 	<li>Added a tool to export Focus Keywords.</li>
</ul>
<h2 id="v5.4.2">5.4.2</h2>
<small>September 21th, 2017</small>
<ul>
 	<li>Includes every change in Yoast SEO core 5.4.2, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.4.1">5.4.1</h2>
<small>September 20th, 2017</small>
<ul>
 	<li>Includes every change in Yoast SEO core 5.4.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.4.0">5.4.0</h2>
<small>September 6th, 2017</small>
<ul>
 	<li>Adds importing of exported redirects in CSV format via <code>SEO &gt; Tools &gt; import and export &gt; import redirects</code>.</li>
 	<li>Includes every change in Yoast SEO core 5.4.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.3.3">5.3.3</h2>
<small>August 28th, 2017</small>
<ul>
 	<li>Includes every change in Yoast SEO core 5.3.3, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.3.2">5.3.2</h2>
<small>August 23rd, 2017</small>
<ul>
 	<li>Includes every change in Yoast SEO core 5.3.2, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.3.1">5.3.1</h2>
<small>August 22nd, 2017</small>
<ul>
 	<li>Includes every change in Yoast SEO core 5.3.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.3.0">5.3.0</h2>
<small>August 22nd, 2017</small>
<ul>
 	<li>Add feature to export redirects, via SEO - Tools - Import/Export</li>
 	<li>Removes the <code>DC.date.issued</code> meta tag</li>
 	<li>When creating a redirect to a file, it will no longer show a warning that the target location does not exist</li>
</ul>
<h2 id="v5.2.0">5.2.0</h2>
<small>August 8th, 2017</small>
<ul>
 	<li>Adds a watcher for private posts to be redirected correctly after trashing them.</li>
 	<li>Adds collecting technical environment data to send to Yoast.</li>
 	<li>Includes every change in Yoast SEO core 5.4.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.1.0">5.1.0</h2>
<small>July 25th, 2017</small>
<ul>
 	<li>Adds Italian Insights and Linking Suggestions, props Abramo Tesoro.</li>
 	<li>Fixes a bug where multiple redirect notices pop up when having WooCommerce Tab Manager installed.</li>
 	<li>Includes every change in Yoast SEO core 5.1.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.0.2">5.0.2</h2>
<small>July 13th, 2017</small>
<ul>
 	<li>Includes every change in Yoast SEO core 5.0.2, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.0.1">5.0.1</h2>
<small>July 6th, 2017</small>
<ul>
 	<li>Includes every change in Yoast SEO core 5.0.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v5.0.0">5.0.0</h2>
<small>July 6th, 2017</small>
<ul>
 	<li>Fixes a bug where the redirect notice popped up unnecessarily.</li>
 	<li>Introduces insights and linking suggestions for French, props Sylvain Perret and <a href="https://github.com/evoqueio">Evoque</a>.</li>
 	<li>Includes every change in Yoast SEO core 5.0.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v4.9.0">4.9.0</h2>
<small>June 7th, 2017</small>
<ul>
 	<li>Includes every change in Yoast SEO core 4.9.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v4.8.0">4.8.0</h2>
<small>May 23rd, 2017</small>
<ul>
 	<li>Fixes a bug where there is a double trailing slash in the javascript for the social previews that was causing errors.</li>
 	<li>Fixes a bug on the Redirects page where spaces were stripped when using the search field.</li>
 	<li>Removes the prominent words version for non-supported languages.</li>
 	<li>Changes the string 'current url' to 'old url' in the Search Console Redirect to match the language in the Redirect Manager.</li>
</ul>
<h2 id="v4.7.1">4.7.1</h2>
<small>May 9th, 2017</small>
<ul>
 	<li>Includes every change in Yoast SEO core 4.7.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v4.7.0">4.7.0</h2>
<small>May 2nd, 2017</small>
<ul>
 	<li>Fixes a bug where 410 redirects could not be imported from <code>.htaccess</code>.</li>
 	<li>Fixes a bug where the 'email support tab' did not work on the edit post page.</li>
 	<li>Adds the slug of a deleted post to the redirect notification.</li>
 	<li>Includes every change in Yoast SEO core 4.7.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v4.6.0">4.6.0</h2>
<small>April 11th, 2017</small>
<ul>
 	<li>Adds the ability to mark a post as cornerstone content and display this in the link suggestions box.</li>
 	<li>Fixes a bug where the post_modified was updated whenever the prominent words were calculated.</li>
 	<li>Fixes a bug where a JavaScript error was thrown when creating a new taxonomy with a custom field plugin active.</li>
 	<li>Fixes a bug where websites ran into timeouts due to a big query when calculating the prominent words.</li>
 	<li>Includes every change in Yoast SEO core 4.6.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v4.5.0">4.5.0</h2>
<small>March 21st, 2017</small>
<ul>
 	<li>Fixes a bug where the SEO score wouldn’t be saved correctly, resulting in gray bullets on the post overview screen.</li>
 	<li>Includes every change in Yoast SEO core 4.5.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v4.4.0">4.4.0</h2>
<small>February 28th, 2017</small>
<ul>
 	<li>Adds redirect types in the Search Console settings page.</li>
 	<li>Checks for links that are already used in the text when suggesting links.</li>
 	<li>Change links to shortlinks in premium translation promo box.</li>
 	<li>Includes every change in Yoast SEO core 4.4.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v4.3.2">4.3.2</h2>
<ul>
 	<li>Fixes a bug where CSS &amp; JavaScript would be loaded with incorrect version numbers.</li>
</ul>
<h2 id="v4.3.1">4.3.1</h2>
<small>February 16th, 2017</small>
<ul>
 	<li>Fixes a bug where a slow query would be run on every page of the admin.</li>
</ul>
<h2 id="v4.3.0">4.3.0</h2>
<small>February 14th, 2017</small>
<ul>
 	<li>Adds link suggestions and insights for Spanish.</li>
 	<li>Adds variable that indicates the recalculation is running already to prevent double executed recalculations.</li>
 	<li>Adds a warning when there are posts or pages that need to be analyzed for link suggestions.</li>
 	<li>Improves the site wide calculation of the prominent words for the link suggestions.</li>
 	<li>Fixes a bug where the rendering of the columns in the post overview was incorrect.</li>
 	<li>Includes every change in Yoast SEO core 4.3.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v4.2.1">4.2.1</h2>
<small>February 2nd, 2017</small>
<ul>
 	<li>Includes every change in Yoast SEO core 4.2.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v4.2.0">4.2.0</h2>
<small>January 31st, 2017</small>
<ul>
 	<li>Adds link suggestions and insights for Dutch.</li>
 	<li>Includes every change in Yoast SEO core 4.2.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v4.1.0">4.1.0</h2>
<small>January, 17th, 2017</small>
<ul>
 	<li>Adds a feature toggle to disable link suggestions (site wide).</li>
 	<li>Allows contributors to also use the prominent words that link suggestions depend on, these generated a 403.</li>
 	<li>Adds German support for Yoast internal linking.</li>
 	<li>Improves the user interface for the prominent word recalculation.</li>
</ul>
<h2 id="v4.0.2">4.0.2</h2>
<small>December 20th, 2016</small>
<ul>
 	<li>Adds site wide calculation of prominent words for pages.</li>
 	<li>Fixes a notice that would be thrown on custom post types: "Undefined property: WP_Post_Type::$rest_base".</li>
 	<li>Fixes a bug where the site language would be used for the social previews and select2.</li>
 	<li>Fixes a bug where the link suggestions wouldn't work when the insights block was disabled.</li>
 	<li>Includes every change in Yoast SEO core 4.0.2, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v4.0.1">4.0.1</h2>
<small>December 14th, 2016</small>
<ul>
 	<li>Fixes a JavaScript error when editing pages in the admin, this fixes conflicts with page builders.</li>
 	<li>Fixes an uncaught (in promise) error when using the prominent words in combinations with Fusion builder or Divi themes.</li>
 	<li>Adds link suggestions meta box to pages.</li>
 	<li>Fixes a bug where prominent words would be saved too often when editing a post.</li>
</ul>
<h2 id="v4.0.0">4.0.0</h2>
<small>December 13th, 2016</small>
<ul>
 	<li>Adds a metabox "Yoast internal linking" that contains link suggestions for the current post.</li>
 	<li>Adds import functionality for Safe Redirect Manager.</li>
 	<li>Adds import support for Simple 301 Redirects.</li>
 	<li>Fixes import messaging when importing redirects.</li>
 	<li>.htaccess import no longer overwrites the real htaccess file.</li>
 	<li>.htaccess import properly imports all redirects.</li>
 	<li>.htaccess import properly imports redirects with quotes.</li>
 	<li>Fixes a bug where post format archives showed up in sitemap when disabled.</li>
 	<li>Fixes a bug where an old update notice would not be removed.</li>
 	<li>Fixes a bug where keywords with periods where not highlighted in the snippet.</li>
 	<li>Includes every change in Yoast SEO core 4.0.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.9.0">3.9.0</h2>
<small>November 29th, 2016</small>
<ul>
 	<li>Improves the title updates in the social previews.</li>
 	<li>Fixes a bug where the wrong URLs were used in redirect notices.</li>
 	<li>Includes every change in Yoast SEO core 3.9.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.8.0">3.8.0</h2>
<small>November 8th, 2016</small>
<ul>
 	<li>Fixes a bug where keyword tabs didn't have a correct screen reader text.</li>
 	<li>Fixes a bug where certain translations weren't translatable, props <a href="https://github.com/pedro-mendonca">Pedro Mendonça</a></li>
 	<li>Removes React debugging tools from eventual build JavaScript files.</li>
 	<li>Includes every change in Yoast SEO core 3.8.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.7.2">3.7.2</h2>
<small>October 20th, 2016</small>
<ul>
 	<li>Includes every change in Yoast SEO core 3.7.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.7.1">3.7.1</h2>
<small>October 11th, 2016</small>
<ul>
 	<li>Adds a message when no prominent words were detected in the text.</li>
</ul>
<h2 id="v3.7.0">3.7.0</h2>
<small>October 11th, 2016</small>
<ul>
 	<li>Adds an insights section to the Yoast SEO metabox that shows authors the most prominent words in their text.</li>
 	<li>Adds a validation to check if the origin url in a redirect contains the subdirectory in case WordPress is installed in a subdirectory.</li>
 	<li>Improved accessibility of the redirects manager.</li>
 	<li>Fixes a bug where some form fields in the import and export tools were missing labels.</li>
 	<li>Makes the redirects new rows action links translatable.</li>
 	<li>Fixes a PHP Warning when hitting 301 redirect on subdomain multisites.</li>
 	<li>Fixes a bug where the Twitter preview would no longer work when Facebook is disabled in Social.</li>
 	<li>Includes every change in Yoast SEO core 3.7.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.6.1">3.6.1</h2>
<small>Release Date: October 3rd, 2016</small>
<ul>
 	<li>Bugfixes:
<ul>
 	<li>Fixes a bug where the admin bar would still show advanced settings when the advanced settings were disabled.</li>
</ul>
</li>
</ul>
<h2 id="v3.6">3.6</h2>
<small>September 27th, 2016</small>
<ul>
 	<li>Includes every change in Yoast SEO core 3.6.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.5.2">3.5.2</h2>
<small>September 8th, 2016</small>
<ul>
 	<li>Fixes a JavaScript error that was thrown from redirect notifications when attempting to edit the redirect destination. These notifications are thrown whenever a slug is edited or when a post or term is deleted.</li>
</ul>
<h2 id="v3.5.1">3.5.1</h2>
<small>September 7th, 2016</small>
<ul>
 	<li>Fixes a fatal error when network activating.</li>
</ul>
<h2 id="v3.5.0">3.5.0</h2>
<small>September 7th, 2016</small>
<ul>
 	<li>Includes every change in Yoast SEO core 3.5.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
 	<li>Fixes the slug change and redirects in the quick edit for posts and terms.</li>
 	<li>Fixes title on the redirect settings page.</li>
</ul>
<h2 id="v3.4.2">3.4.2</h2>
<small>August 8th, 2016</small>
<ul>
 	<li>Includes every change in Yoast SEO core 3.4.2, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.4.1">3.4.1</h2>
<small>August 2nd, 2016</small>
<ul>
 	<li>Security hotfix: includes every change in Yoast SEO core 3.4.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.4.0">3.4.0</h2>
<small>July 19th, 2016</small>
<ul>
 	<li>Includes every change in Yoast SEO core 3.4.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
 	<li>Visually improves the redirect dialog by using an overlay.</li>
 	<li>Fixes a bug where a trailing slash was added when redirecting to a file.</li>
 	<li>Fixes a fatal JavaScript error for the featured image on attachment edit pages.</li>
</ul>
<h2 id="v3.3.3">3.3.3</h2>
<small>June 30th, 2016</small>
<ul>
 	<li>Includes every change in Yoast SEO core 3.3.3 and 3.3.4, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.3.2">3.3.2</h2>
<small>June 21st, 2016</small>
<ul>
 	<li>Includes every change in Yoast SEO core 3.3.2, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.3.1">3.3.1</h2>
<small>June 15th, 2016</small>
<ul>
 	<li>Fixes a bug with redirects on a subsite in a multisite installation, props <a href="https://github.com/nicholas-eden">nicholas-eden</a>.</li>
 	<li>Fixes a bug where the tabs inside the metabox weren't aligned properly.</li>
 	<li>Includes every change in Yoast SEO core 3.3.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.3.0">3.3.0</h2>
<small>June 14th, 2016</small>
<ul>
 	<li>Add author name support to the social previews.</li>
 	<li>Add a tab inside the help center to contact support, this replaces the question mark at the bottom right of the page.</li>
 	<li>Fixes a bug where the redirects couldn't be saved to the .htaccess in certain scenarios.</li>
 	<li>Fixes a bug where subdomains would be stripped from target URLs in the redirects.</li>
 	<li>Fixes a bug where the Redirection import wasn't present.</li>
 	<li>Includes every change in Yoast SEO core 3.3.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.2.5">3.2.5</h2>
<small>May 6th, 2016</small>
<ul>
 	<li>Fixes "undefined index" notices when Facebook and/or Twitter have been disabled in settings.</li>
 	<li>Fixes a bug when writing 4xx redirects into the .htaccess file on Apache.</li>
 	<li>Includes every change in Yoast SEO core 3.2.5, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.2.4">3.2.4</h2>
<small>April 28th, 2016</small>
<ul>
 	<li>Fixes a regression where the post URL would be numerical when no post title was set.</li>
 	<li>Fixes an issue that would cause notifications not to be dismissed even though they should be.</li>
 	<li>These changes bring Yoast SEO Premium in line with Yoast SEO free 3.2.4.</li>
</ul>
<h2 id="v3.2.2">3.2.2</h2>
<small>April 21th, 2016</small>
<ul>
 	<li>Fixes a bug where notification for a deleted post wasn't shown.</li>
 	<li>Includes every change in Yoast SEO core 3.2.3, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.2.2">3.2.1</h2>
<small>April 20th, 2016</small>
<ul>
 	<li>Includes every change in Yoast SEO core 3.2.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.2.0">3.2.0</h2>
<small>April 20th, 2016</small>
<ul>
 	<li>Introduces social previews, you can now see what your posts will look like when they are shared on Facebook and Twitter.</li>
 	<li>The previews will automatically show you when your image is too small.</li>
 	<li>You can use all replace variables you are used to in the Facebook and Twitter previews.</li>
 	<li>Removes the tutorial video page, the videos are now available on every tab.</li>
 	<li>Fixes a bug where Yoast SEO Premium would fatal when activating while Yoast SEO was active.</li>
 	<li>Fixes a bug where the home URL wasn't correctly stripped from the redirect old URL.</li>
 	<li>Fixes a bug where clicking the 'Update now' button on the plugin page didn't update correctly.</li>
 	<li>Includes every change in Yoast SEO core 3.2.0, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.1.3">3.1.3</h2>
<small>March 23rd, 2016</small>
<ul>
 	<li>Fixes a few bugs related to term slugs that were altered by our plugin after they were saved. This especially caused issues for terms with parents. We will simply not touch term slugs anymore until the way terms are saved is fixed in WordPress, see also <a href="https://core.trac.wordpress.org/ticket/22293">https://core.trac.wordpress.org/ticket/22293</a>.</li>
 	<li>Fixes a bug where we would create redirects if nav menu items were edited.</li>
 	<li>Fixes a bug where redirects to urls with url parameters got appended with a slash.</li>
 	<li>Fixes a bug where adding a parent to a page would cause the slug of that page to detected by us as non-unique and incremented with a number.</li>
 	<li>Fixes a bug where the AJAX request for creating redirects in the search console integration was broken for search console issues for which a 4xx redirect already exists.</li>
 	<li>Merge with Yoast SEO core 3.1.2, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.1.2">3.1.2</h2>
<small>March 8th, 2016</small>
<ul>
 	<li>Fixes a bug where PHP redirects were still broken on servers that disable accessing the server input by making use of the filter extension.</li>
 	<li>Merge with Yoast SEO core 3.1.1, see the <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v3.1.1">3.1.1</h2>
<small>March 2nd, 2016</small>
<ul>
 	<li>Fixes a bug where PHP redirects were broken.</li>
 	<li>Fixes a bug where users could (temporarily) lose their redirects if our upgrade routine would for some reason not be triggered while updating to versions greater than 3.0.7</li>
 	<li>Fixes a bug where slashes were shown in the redirect manager for a redirect without a target url (ie. 410)</li>
 	<li>Fixes a Fatal error that occured when switching from Free to Premium.</li>
</ul>
<h2 id="v3.1">3.1</h2>
<small>March 1st, 2016</small>
<ul>
 	<li>Made PHP redirects faster and more efficient.</li>
 	<li>Added an interface to easily serve 410 (content deleted) headers for posts you have just deleted.</li>
 	<li>Added support for creating 451 (legal takedown) headers in the redirect manager.</li>
 	<li>Improved existing validations, ensuring redirects are complete and unique.</li>
 	<li>Added a validation error that checks for a redirect loop.</li>
 	<li>Added validation warnings for the following cases:
<ul>
 	<li>when a redirect points to an url that is redirected.</li>
 	<li>when a redirect point to a url that cannot be resolved.</li>
 	<li>when a redirect points to a url that doesn't return a 200 OK status code.</li>
</ul>
</li>
 	<li>Changed the interface for inline editing of redirects to resemble the redirect form used to add redirects.</li>
 	<li>Fixes a possible fatal error on update.</li>
 	<li>Replaced checkboxes and radio buttons with toggles on the Premium settings pages.</li>
 	<li>Makes sure post / term slugs uniqueness checks also take into account redirects.</li>
 	<li>Makes sure redirected are redirected both with and without trailing slash.</li>
 	<li>Takes the WP permalink structure into account in deciding if we should redirect to a slug with or without trailing slash.</li>
 	<li>Makes sure links to our knowledge base open in a new window.</li>
 	<li>Added a few knowledge base suggestions to our support beacon on the redirects page.</li>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 3.1</a>.</li>
</ul>
<h2 id="v3.0.7">3.0.7</h2>
<small>December 23rd, 2015</small>
<ul>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 3.0.7</a>.</li>
</ul>
<h2 id="v3.0.6">3.0.6</h2>
<small>December 1st, 2015</small>
<ul>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 3.0.6</a>.</li>
</ul>
<h2 id="v3.0.5">3.0.5</h2>
<small>December 1st, 2015</small>
<ul>
 	<li>Fixed performance issues in custom fields integration.</li>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 3.0.5</a>.</li>
</ul>
<h2 id="v3.0.4">3.0.4</h2>
<small>November 25th, 2015</small>
<ul>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 3.0.4</a>.</li>
</ul>
<h2 id="v3.0.3">3.0.3</h2>
<small>November 19th, 2015</small>
<ul>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 3.0.3</a>.</li>
</ul>
<h2 id="v3.0.2">3.0.2</h2>
<small>November 19th, 2015</small>
<ul>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 3.0.2</a>.</li>
</ul>
<h2 id="v3.0.1">3.0.1</h2>
<small>November 18th, 2015</small>
<ul>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 3.0.1</a>.</li>
</ul>
<h2 id="v3.0">3.0</h2>
<small>November 18th, 2015</small>
<ul>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 3.0</a>, including the realtime content analysis tool and social settings for taxonomies.</li>
 	<li>Added possibility to analyze multiple keywords per post/page.</li>
 	<li>Added support beacon to all the Yoast SEO settings pages, allowing users to ask for support straight from their WordPress backends.</li>
</ul>
<h2 id="v2.3.5">2.3.5</h2>
<small>September 16th, 2015</small>
<ul>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 2.3.5</a></li>
</ul>
<h2 id="v2.3.4">2.3.4</h2>
<small>August 6th, 2015</small>
<ul>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 2.3.4</a></li>
</ul>
<h2 id="v2.3.3">2.3.3</h2>
<small>August 6th, 2015</small>
<ul>
 	<li>Added a filter <code>wpseo_hide_version</code> that allows webmasters to hide the Yoast SEO Premium version number in the debug marker.</li>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 2.3.3</a></li>
</ul>
<h2 id="v2.3.2">2.3.2</h2>
<small>July 23rd, 2015</small>
<ul>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 2.3.2</a></li>
</ul>
<h2 id="v2.3.1">2.3.1</h2>
<small>July 22nd, 2015</small>
<ul>
 	<li>Fixes a bug where the .htaccess redirect import was no longer available.</li>
 	<li>Fixes a bug where upgrading to version 2.3 would occasionally cause WSOD's on both admin and frontend. We were unable to pinpoint the exact conflicting plugins and themes, but we are quite confident it was caused by us using, and others hooking into, WP_Query too early.</li>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 2.3.1</a></li>
</ul>
<h2 id="v2.3">2.3</h2>
<small>July 21st, 2015</small>
<ul>
 	<li>Renamed plugin to "Yoast SEO Premium"</li>
 	<li>Fixed compatibility issue with Post type order plugin.</li>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">Yoast SEO core 2.3</a></li>
</ul>
<h2 id="v2.2.2">2.2.2</h2>
<small>June 17th, 2015</small>
<ul>
 	<li>Fixed a bug that would create unnecessary (and sometimes even faulty) redirects.</li>
 	<li>Added a Japanese translation and updated several other languages.</li>
</ul>
<h2 id="v2.2.1">2.2.1</h2>
<small>June 11th, 2015</small>
<ul>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">WordPress SEO core 2.2.1</a></li>
</ul>
<h2 id="v2.2">2.2</h2>
<small>June 10th, 2015</small>
<ul>
 	<li>Adds an X-Redirect-By header to redirects that were created using WordPress SEO Premium. Works for all PHP redirects and regular NGINX redirects. Doesn't work for Apache.</li>
 	<li>Makes sure all AJAX notices become dismissible.</li>
 	<li>Makes sure the redirect notice also shows the old and new url.</li>
 	<li>Fixes a bug where the link in the redirect notice was not clickable in some cases.</li>
 	<li>Fixes a bug where we offered the user the possibility to undo creating a redirect that was never created in the first place.</li>
 	<li>Fixes a bug where clicking a link to our knowledge base about redirect types triggered a notice instead of taking the user to the right page.</li>
 	<li>Fixes a bug where in some cases no tab was selected after reloading the crawl issues in the GWT settings.</li>
 	<li>Fixes a bug where automatic redirects where being created for unpublished posts.</li>
 	<li>Fixes a bug where automatic redirects where not being created on slug change when using quick edit for both posts and terms.</li>
 	<li>Fixes a bug where where automatic redirects where not being created on slug change for custom taxonomies.</li>
 	<li>Fixes a bug where a slug change could falsely be detected and redirected in case of a term update in the context of a post update</li>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">WordPress SEO core 2.2</a></li>
</ul>
<h2 id="v2.1.1">2.1.1</h2>
<small>April 21st, 2015</small>
<ul>
 	<li>Merge with <a href="https://wordpress.org/plugins/wordpress-seo/#developers">WordPress SEO core 2.1.1</a></li>
</ul>
<h2 id="v2.1">2.1</h2>
<small>April 20th, 2015</small>
<ul>
 	<li>Merge with WordPress SEO core 2.1</li>
</ul>
<h2 id="v2.0.1">2.0.1</h2>
<small>April 1st, 2015</small>
<ul>
 	<li>Merge with WordPress SEO core 2.0.1</li>
</ul>
<h2 id="v2.0">2.0</h2>
<small>March 26th, 2015</small>
<ul>
 	<li>Merge with WordPress SEO core 2.0</li>
 	<li>Made the version number for the Premium plugin the same as for the Free plugin to avoid confusion.</li>
 	<li>Contains several performance improvements, making the plugin much faster.</li>
</ul>
<h2 id="v1.5.3">1.5.3</h2>
<small>March 11th, 2015</small>
<ul>
 	<li>Security hotfix: Merge with WordPress SEO core 1.7.4, see <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v1.5.2.2">1.5.2.2</h2>
<small>February 23rd, 2015</small>
<ul>
 	<li>Merge with WordPress SEO core 1.7.3.2</li>
</ul>
<h2 id="v1.5.2.1">1.5.2.1</h2>
<small>February 19th, 2015</small>
<ul>
 	<li>Merge with WordPress SEO core 1.7.3.1</li>
</ul>
<h2 id="v1.5.2">1.5.2</h2>
<small>February 17th, 2015</small>
<ul>
 	<li>Added the possibility to add 410 status to redirects.</li>
 	<li>Added a few validations to prevent circular redirects.</li>
 	<li>Reuses translations from the free version of this plugin, thereby dramatically reducing the amount of strings that need to be translated for the premium plugin.</li>
 	<li>Merge with WordPress SEO core 1.7.3</li>
</ul>
<h2 id="v1.5.1">1.5.1</h2>
<small>November 26th, 2014</small>
<ul>
 	<li>Security hotfix: Merge with WordPress SEO core 1.7.1, see <a href="https://wordpress.org/plugins/wordpress-seo/#developers">core changelog</a>.</li>
</ul>
<h2 id="v1.5">1.5</h2>
<small>November 18th, 2014</small>
<ul>
 	<li>Merge with WordPress SEO core 1.7</li>
 	<li>Fixes a bug where authentication with Google Webmaster Tools would fail silently.</li>
 	<li>Fixes a bug where redirects weren't written to <em>.htaccess</em>.</li>
 	<li>Added filters for hiding redirects notifications.</li>
</ul>
<h2 id="v1.4.3">1.4.3</h2>
<small>October 8th, 2014</small>
<ul>
 	<li>Merge with WordPress SEO core 1.6.3</li>
</ul>
<h2 id="v1.4.2">1.4.2</h2>
<small>October 8th, 2014</small>
<ul>
 	<li>Merge with WordPress SEO core 1.6.2</li>
 	<li>Implement new filter for issue types on the Google Webmaster Tools issues screen</li>
</ul>
<h2 id="v1.4.1">1.4.1</h2>
<small>September 16th, 2014</small>
<ul>
 	<li>Merge with WordPress SEO core 1.6.1</li>
</ul>
<h2 id="v1.4">1.4</h2>
<small>September 9th, 2014</small>
<ul>
 	<li>Merge with WordPress SEO core 1.6</li>
</ul>
<h2 id="v1.3.5">1.3.5</h2>
<small>August 26th, 2014</small>
<ul>
 	<li>Merge with WordPress SEO core 1.5.6, updated for WP 4.0</li>
</ul>
<h2 id="v1.3.4">1.3.4</h2>
<small>August 15th, 2014</small>
<ul>
 	<li>Fix incomplete merge with WordPress SEO core to 1.5.5.3</li>
</ul>
<h2 id="v1.3.3">1.3.3</h2>
<small>August 14th, 2014</small>
<ul>
 	<li>Updated WordPress SEO core to 1.5.5.3</li>
</ul>
<h2 id="v1.3.2">1.3.2</h2>
<small>August 14th, 2014</small>
<ul>
 	<li>Fixed bug in core WordPress SEO that made SEO icon value wrong.</li>
 	<li>Updated WordPress SEO core to 1.5.5.2</li>
</ul>
<h2 id="v1.3.1">1.3.1</h2>
<small>August 14th, 2014</small>
<ul>
 	<li>Fix versioning issue</li>
</ul>
<h2 id="v1.3">1.3</h2>
<small>August 14th, 2014</small>

Contains all the changes done in WordPress SEO core, it's now equal to WordPress SEO 1.5.5.1, see the <a href="http://wordpress.org/plugins/wordpress-seo/changelog/">WordPress SEO change log</a> for those changes.

This release adds a full set of Video Tutorials for both editors and the WP SEO settings, available in the WordPress admin:

<img class="alignnone size-large wp-image-201747" src="https://yoast.com/app/uploads/2014/01/video-tutorials-550x269.png" alt="video tutorials" width="550" height="269" />
Other enhancements:
<ul>
 	<li>The bulk title and bulk description editor pages are merged into one page.</li>
 	<li>Added a feature to define custom fields that are taken into calculation for page analysis:
<img class="alignnone size-large wp-image-201742" src="https://yoast.com/app/uploads/2014/01/add-custom-fields-550x313.png" alt="add custom fields" width="550" height="313" /></li>
 	<li>Give possibility to create a redirect when a post/page is trashed.</li>
 	<li>Give possibility to delete a redirect when a post/page is restored.</li>
</ul>
Bugfixes:
<ul>
 	<li>Values for redirects will be trimmed, preventing invalid redirects.</li>
 	<li>Fixed pagination on the redirects page.</li>
 	<li>Fixed screen options on the redirects page.</li>
</ul>
<h2 id="v1.2.2">1.2.2</h2>
<small>July 4th, 2014</small>
<ul>
 	<li>Added link to Yoast Knowledge Base to regex redirects.</li>
 	<li>Fixed bug when creating redirects from Webmaster Tools.</li>
</ul>
<h2>1.2.1</h2>
<small>June 6th, 2014</small>
<ul>
 	<li>Fixed a REGEX redirect type bug that prevented REGEX redirects from working.</li>
 	<li>Fixed a bug involving the &amp; sign in redirects.</li>
</ul>
<h2>1.2.0</h2>
<small>June 3rd, 2014</small>
<ul>
 	<li>The redirect type (HTTP code) can now set per redirect.</li>
 	<li>Redirects can now be imported from the .htaccess file.</li>
 	<li>Redirects can now be written to the .htaccess file.</li>
 	<li>A redirect is automatically added when a post slug change.</li>
 	<li>The possibility to add a redirect is offered when a post is deleted.</li>
 	<li>A redirect is automatically added when a category/term slug change.</li>
 	<li>The possibility to add a redirect is offered when a category/term is deleted.</li>
 	<li>Added support to redirect URL's with special characters.</li>
 	<li>Response code of redirects is now checked while adding redirects to avoid incorrect redirects.</li>
 	<li>Created a Yoast overlay for a more user friendly way of displaying errors.</li>
 	<li>Implemented autoloader to enhance plugin performance.</li>
 	<li>Updated WordPress SEO core to 1.5.3.3.</li>
</ul>
<h2>1.1.3</h2>
<small>May 22nd, 2014</small>
<ul>
 	<li>Updated WordPress SEO core to 1.5.3.2</li>
</ul>
<h2>1.1.2</h2>
<small>April 25th, 2014</small>
<ul>
 	<li>Fixed notices when fetching remote crawl issues and there are now crawl issues from remote.</li>
 	<li>Updated WordPress SEO core to 1.5.2.8</li>
</ul>
<h2>1.1.1</h2>
<small>April 15th, 2014</small>
<ul>
 	<li>Updated WordPress SEO core to 1.5.2.7</li>
</ul>
<h2>1.1.0</h2>
<small>April 4st, 2014</small>
<ul>
 	<li>Updated WordPress SEO core to 1.5.x</li>
 	<li>Google Webmaster Tools crawl issues are now cached decreasing load time of issues dramatically.</li>
 	<li>Google Webmaster Tools profile can now manually be selected.</li>
 	<li>Added 'not redirected' filter to crawl issues table.</li>
 	<li>Added option to ignore crawl issues.</li>
 	<li>Added import option from Redirection plugin.</li>
 	<li>Added a redirect link to WordPress toolbar on 404 pages.</li>
 	<li>Added support for REGEX redirects.</li>
</ul>
<h2>1.0.8</h2>
<small>March 21st, 2014</small>
<ul>
 	<li>Updated WordPress SEO core to 1.5.2.5</li>
</ul>
<h2>1.0.7</h2>
<small>March 14st, 2014</small>
<ul>
 	<li>Updated WordPress SEO core to 1.5.2.2</li>
</ul>
<h2>1.0.6</h2>
<small>March 12st, 2014</small>
<ul>
 	<li>Updated WordPress SEO core to 1.5.2.1</li>
</ul>
<h2>1.0.5</h2>
<small>March 11st, 2014</small>
<ul>
 	<li>Updated WordPress SEO core to 1.5.2</li>
</ul>
<h2>1.0.4</h2>
<small>March 11st, 2014</small>
<ul>
 	<li>Updated WordPress SEO core to 1.5.0</li>
</ul>
<h2>1.0.3</h2>
<small>Feb 26st, 2014</small>
<ul>
 	<li>Fixed an incorrect constant define.</li>
 	<li>Updated WordPress SEO core to 1.4.25.</li>
 	<li>Now using the correct file reference (WPSEO_FILE) in main WPSEO file.</li>
</ul>
<h2>1.0.2</h2>
<small>Feb 18st, 2014</small>
<ul>
 	<li>Fixed a bug that prevented options on the WPSEO dashboard from saving.</li>
 	<li>Updated WordPress SEO core to 1.4.24.</li>
</ul>
<h2>1.0.1</h2>
<small>Jan 31st, 2014</small>
<ul>
 	<li>Remove dependency on PHP 5.3 function DateTime</li>
</ul>
::getTimestamp() so plugin works on PHP 5.2 installs too.
<h2>1.0</h2>
<small>Jan 23rd, 2014</small>
<ul>
 	<li>Initial release.</li>
</ul>
<div class="grammarly-disable-indicator"></div>
<div class="grammarly-disable-indicator"></div>

";}}}}";}