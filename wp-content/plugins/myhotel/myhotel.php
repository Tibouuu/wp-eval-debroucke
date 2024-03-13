<?php
/**
 * @package WPMyPortfolio
 * @version 1.0.0
 */

/*
Plugin Name: WP My Hotel
Plugin URI: https://thibautdebroucke.com
Description: Create and manage your hotel from your blog
Author: Thibaut Debroucke
Version: 1.0.0
*/

require_once 'inc/PostType.php';
require_once 'inc/Taxonomies.php';
require_once 'inc/Filters.php';
require_once 'inc/ACF.php';
require_once __DIR__ . '/../acf-codifier-1.39.1/vendor/autoload.php';

class Hotel
{
    public function init(): void
    {
        (new \Hotel\PostType())->register();
        (new \Hotel\Filters())->register();
        (new \Hotel\Taxonomies())->register();
        try {
            (new \Hotel\ACF())->register();
        } catch (\Geniem\ACF\Exception $e) {
            error_log($e->getMessage());
        }
    }
}

(new Hotel())->init();
