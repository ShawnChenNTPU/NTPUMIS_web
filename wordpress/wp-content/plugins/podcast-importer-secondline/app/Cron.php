<?php

namespace PodcastImporterSecondLine;

use PodcastImporterSecondLine\Helper\Importer as PIS_Helper_Importer;
use PodcastImporterSecondLine\Settings as PIS_Settings;

class Cron {

  /**
   * @var Cron;
   */
  protected static $_instance;

  /**
   * @return Cron
   */
  public static function instance(): Cron {
    if( self::$_instance === null )
      self::$_instance = new self();

    return self::$_instance;
  }

  public function _filter_cron_schedules( $schedules ) {
    if( isset( $schedules[ 'five_minutes' ] ) )
      return $schedules;

    $schedules['five_minutes'] = [
      'interval'  => 300,
      'display'   => __( 'Every Five Minute', 'podcast-importer-secondline' )
    ];

    return $schedules;
  }

  public function schedule_events() {
    if( !wp_next_scheduled( 'secondline_import_cron' ) )
      wp_schedule_event( current_time( 'timestamp' ), PODCAST_IMPORTER_SECONDLINE_CRON_JOB_FREQUENCY, 'secondline_import_cron' );

    if( !wp_next_scheduled( 'secondline_import_cron_process_queue' ) )
      wp_schedule_event( current_time( 'timestamp' ), PODCAST_IMPORTER_SECONDLINE_CRON_JOB_PROCESS_FREQUENCY, 'secondline_import_cron_process_queue' );
  }

  public function remove_scheduled_events() {
    $next_schedule = wp_next_scheduled( 'secondline_importer_cron' );

    if( false !== $next_schedule )
      wp_unschedule_event($next_schedule, PODCAST_IMPORTER_SECONDLINE_CRON_JOB_FREQUENCY, 'secondline_importer_cron');

    $next_schedule = wp_next_scheduled( 'secondline_import_cron_process_queue' );

    if( false !== $next_schedule )
      wp_unschedule_event($next_schedule, PODCAST_IMPORTER_SECONDLINE_CRON_JOB_PROCESS_FREQUENCY, 'secondline_import_cron_process_queue');
  }

  public function _trigger_import() {
    $post_ids = get_posts( [
      'post_type'    	 => PODCAST_IMPORTER_SECONDLINE_POST_TYPE_IMPORT,
      'posts_per_page' => -1,
      'fields'         => 'ids'
    ] );

    $_cron_import_cron_queue = PIS_Settings::instance()->get( '_cron_import_cron_queue', [] );

    if( empty( $_cron_import_cron_queue ) ) {
      $_cron_import_cron_queue = $post_ids;
    } else {
      foreach( $post_ids as $k => $post_id )
        if( in_array( $post_id, $post_ids ) )
          unset( $post_ids[ $k ] );

      if( !empty( $post_ids ) )
        $_cron_import_cron_queue = array_merge( $_cron_import_cron_queue, $post_ids );
    }

    PIS_Settings::instance()->update( '_cron_import_cron_queue', $_cron_import_cron_queue );
  }

  public function _trigger_import_process_queue() {

    $_cron_import_cron_queue = PIS_Settings::instance()->get( '_cron_import_cron_queue', [] );

    if( empty( $_cron_import_cron_queue ) )
      return;

    $current_post_id = array_shift( $_cron_import_cron_queue );

    $all_meta = get_post_meta( $current_post_id );
    $meta_map = [];

    foreach( $all_meta as $k => $v ) {
      if( is_array( $v ) && count( $v ) === 1 )
        $v = maybe_unserialize( $v[ 0 ] );

      $meta_map[ $k ] = $v;
    }

    // Maybe deleted after queued, need to ensure it's fine.
    if( isset( $meta_map[ 'secondline_rss_feed' ] ) ) {
      $importer = PIS_Helper_Importer::from_meta_map( $meta_map );
      $response = $importer->import_current_feed();
    }


    PIS_Settings::instance()->update( '_cron_import_cron_queue', $_cron_import_cron_queue );
  }

}