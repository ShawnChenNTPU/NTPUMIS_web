<?php
/**
 * Plugin Name:       Podcast Importer SecondLine
 * Description:       A simple podcast import plugin with ongoing podcast feed import features.
 * Version:           1.3.5
 * Author:            SecondLineThemes
 * Author URI:        https://secondlinethemes.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       podcast-importer-secondline
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) )
	die;

define( 'PODCAST_IMPORTER_SECONDLINE_VERSION', '1.3.5' );
define( "PODCAST_IMPORTER_SECONDLINE_BASE_FILE_PATH", __FILE__ );
define( "PODCAST_IMPORTER_SECONDLINE_BASE_PATH", dirname( PODCAST_IMPORTER_SECONDLINE_BASE_FILE_PATH ) );
define( "PODCAST_IMPORTER_SECONDLINE_PLUGIN_IDENTIFIER", ltrim( str_ireplace( dirname( PODCAST_IMPORTER_SECONDLINE_BASE_PATH ), '', PODCAST_IMPORTER_SECONDLINE_BASE_FILE_PATH ), '/' ) );

require_once PODCAST_IMPORTER_SECONDLINE_BASE_PATH . "/autoload.php";
require_once PODCAST_IMPORTER_SECONDLINE_BASE_PATH . "/definitions.php";
require_once PODCAST_IMPORTER_SECONDLINE_BASE_PATH . "/functions.php";

register_activation_hook( __FILE__, [ PodcastImporterSecondLine\Cron::instance(), 'schedule_events' ] );
register_deactivation_hook( __FILE__, [ PodcastImporterSecondLine\Cron::instance(), 'remove_scheduled_events' ] );

// Various Hooks & Additions.
PodcastImporterSecondLine\Hooks::instance()->setup();

// Post Types
add_action( 'init', [ PodcastImporterSecondLine\PostTypes::instance(), 'setup' ] );

// RestAPI
add_action( 'rest_api_init', [ PodcastImporterSecondLine\RestAPI::instance(), 'setup' ] );

// Site Health
add_filter( 'site_status_tests', [ PodcastImporterSecondLine\SiteHealth::instance(), 'tests' ] );

// General Functionality
add_action( 'plugins_loaded', [ PodcastImporterSecondLine\Controller::instance(), 'setup' ] );

if ( is_admin() ) {
  add_action( 'admin_menu', [ PodcastImporterSecondLine\AdminMenu::instance(), 'setup' ] );
  add_action( 'admin_enqueue_scripts', [ PodcastImporterSecondLine\AdminAssets::instance(), 'setup' ] );
}

// Plugin Specific Cron Jobs
add_filter( 'cron_schedules', [ PodcastImporterSecondLine\Cron::instance(), '_filter_cron_schedules' ] );

add_action( 'secondline_import_cron', [ PodcastImporterSecondLine\Cron::instance(), '_trigger_import' ] );
add_action( 'secondline_import_cron_process_queue', [ PodcastImporterSecondLine\Cron::instance(), '_trigger_import_process_queue' ] );