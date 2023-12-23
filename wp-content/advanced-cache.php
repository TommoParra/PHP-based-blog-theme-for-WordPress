<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if (strpos($_SERVER["REQUEST_URI"], "nitroHealthcheck") !== false) {
    // This healthcheck is used to quickly check test whether the PHP application is able to handle the requests
    // Mainly used to check for errors after .htaccess has been modified
    echo "Healthy";
    exit;
}

$nitropack_functions_file = '/home/tudespacho/web/tudespachoencasa.com/public_html/wp-content/plugins/nitropack/functions.php';
$nitropack_abspath = '/home/tudespacho/web/tudespachoencasa.com/public_html/';

// We need the ABSPATH check in order to verify that the functions file which we are about to load belongs to the expected WP installation.
// Otherwise issues may occur when a site is being duplicated in a subdir on the same server.
if (file_exists($nitropack_functions_file) && ABSPATH == $nitropack_abspath) {
    define( 'NITROPACK_ADVANCED_CACHE', true);
    define( 'NITROPACK_ADVANCED_CACHE_VERSION', '1.7.1');
    define( 'NITROPACK_LOGGED_IN_COOKIE', 'wordpress_logged_in_1e5bb499ee8f8c0f2e800c0df982054c' );
    require_once $nitropack_functions_file;
}

if (defined("NITROPACK_VERSION") && defined("NITROPACK_ADVANCED_CACHE_VERSION") && NITROPACK_VERSION == NITROPACK_ADVANCED_CACHE_VERSION && nitropack_is_dropin_cache_allowed()) {
    nitropack_handle_request("drop-in");
    $nitro = get_nitropack_sdk();

    if (null !== $nitro) {
        $np_siteConfig = nitropack_get_site_config();
        if ( !empty($np_siteConfig["alwaysBuffer"]) || ($nitro->isAJAXRequest() && $nitro->isAllowedAJAX()) ) {
            define( 'NITROPACK_IS_BUFFERING', true );
            ob_start(function($buffer) use (&$nitro) {
                if (!defined("NITROPACK_BEACON_PRINTED")) {
                    $respHeaders = headers_list();
                    $contentType = NULL;
                    foreach ($respHeaders as $respHeader) {
                        if (stripos(trim($respHeader), 'Content-Type:') === 0) {
                            $contentType = $respHeader;
                        }
                    }

                    if ( stripos($contentType, 'text/html') !== false && !preg_match("/<html.*?\s(amp|⚡)(\s|=|>)/", $buffer) && nitropack_passes_cookie_requirements() && nitropack_passes_page_requirements(false)) {
                        define("NITROPACK_BEACON_PRINTED", true);
                        $buffer = str_replace("</body", nitropack_get_beacon_script() . "</body", $buffer);
                    }
                }

                if ($nitro->isAJAXRequest() && $nitro->isAllowedAJAX()) {
                    $nitro->pageCache->setContent($buffer, []);
                }
                return $buffer;
            }, 0, PHP_OUTPUT_HANDLER_FLUSHABLE | PHP_OUTPUT_HANDLER_REMOVABLE);
        } else {
            define( 'NITROPACK_IS_BUFFERING', false );
        }
    }
}
