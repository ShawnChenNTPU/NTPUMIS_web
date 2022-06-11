<?php

namespace PodcastImporterSecondLine;

class SiteHealth {

  /**
   * @var SiteHealth;
   */
  protected static $_instance;

  /**
   * @return SiteHealth
   */
  public static function instance(): SiteHealth {
    if( self::$_instance === null )
      self::$_instance = new self();

    return self::$_instance;
  }

  public function tests( $tests ) {
    $tests[ 'direct' ][ PODCAST_IMPORTER_SECONDLINE_ALIAS . '_test_cron_integrity' ] = [
      'label' => __( '%s - Cron Integrity', 'podcast-importer-secondline' ),
      'test'  => [ $this, 'cron_integrity' ],
    ];

    $tests[ 'direct' ][ PODCAST_IMPORTER_SECONDLINE_ALIAS . '_test_cron_requirement' ] = [
      'label' => __( '%s - Cron Requirement', 'podcast-importer-secondline' ),
      'test'  => [ $this, 'cron_requirement' ],
    ];

    return $tests;
  }

  public function cron_integrity() {
    $default = [
      'description' => '<p>' . sprintf( __( "%s uses cron jobs to handle the On-going imports.", 'podcast-importer-secondline' ), PODCAST_IMPORTER_SECONDLINE_NAME ) . '</p>',
      'test'        => PODCAST_IMPORTER_SECONDLINE_ALIAS . '_test_cron_integrity',
    ];

    if( false !== wp_next_scheduled( 'secondline_import_cron' )
        && false !== wp_next_scheduled( 'secondline_import_cron_process_queue' ) )
      return [
          'label'   => sprintf( __( "%s - Cron Job Registered", 'podcast-importer-secondline' ), PODCAST_IMPORTER_SECONDLINE_NAME ),
          'status'  => 'good',
          'badge'       => [
            'label' => __( 'Critical', 'podcast-importer-secondline' ),
            'color' => 'green',
          ],
        ] + $default;

    return [
      'label'       => sprintf( __( "%s - Cron Jobs Missing", 'podcast-importer-secondline' ), PODCAST_IMPORTER_SECONDLINE_NAME ),
      'status'      => 'critical',
      'badge'       => [
        'label' => __( 'Critical', 'podcast-importer-secondline' ),
        'color' => 'red',
      ],
      'actions'     => (
        current_user_can( 'manage_options' )
          ? sprintf(
              '<p><a href="%s">%s</a></p>',
              esc_url( admin_url( '?' . PODCAST_IMPORTER_SECONDLINE_PREFIX . '-action=force-cron-reset' ) ),
              esc_html__( "Fix Cron Job Integrity", 'podcast-importer-secondline' )
            )
          : '<p>' . esc_html__( "You need %s rights in order to reset the cron jobs", "podcast-importer-secondline" ) . '</p>'
      )
    ] + $default;
  }

  public function cron_requirement() {
    $default = [
      'description' => '<p>' . sprintf( __( "%s relies on cron jobs to handle feed import.", 'podcast-importer-secondline' ), PODCAST_IMPORTER_SECONDLINE_NAME ) . '</p>',
      'test'        => PODCAST_IMPORTER_SECONDLINE_ALIAS . '_test_cron_requirement',
    ];

    if( defined( 'DISABLE_WP_CRON' ) && DISABLE_WP_CRON )
      return [
          'label'   => sprintf( __( "%s - WP Cron Jobs running as real cron.", 'podcast-importer-secondline' ), PODCAST_IMPORTER_SECONDLINE_NAME ),
          'status'  => 'good',
          'badge'       => [
            'label' => __( 'Recommended', 'podcast-importer-secondline' ),
            'color' => 'green',
          ],
        ] + $default;

    return [
        'label'       => sprintf( __( "%s - WP Cron Jobs using default WordPress system.", 'podcast-importer-secondline' ), PODCAST_IMPORTER_SECONDLINE_NAME ),
        'status'      => 'recommended',
        'badge'       => [
          'label' => __( 'Recommended', 'podcast-importer-secondline' ),
          'color' => 'blue',
        ],
        'actions'     => '<p>' . esc_html__( "Ask your server administrator or hosting company to enable true PHP cron jobs, instead of the default WordPress one.", "podcast-importer-secondline" ) . '</p>'
      ] + $default;
  }

}