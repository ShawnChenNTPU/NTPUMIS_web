<?php
/**
 * Podcast episodes options page template
 *
 * @package Podcast Player
 * @since 1.0.0
 */

?>

<div class="updated notice is-dismissible pp-welcome-notice">
	<p class="intro-msg">
		<?php esc_html_e( 'Thanks for trying/updating Podcast Player.', 'podcast-player' ); ?>
	</p>
	<p><strong style="color: red;"><?php esc_html_e( 'Important: ', 'podcast-player' ); ?></strong><?php esc_html_e( 'If you are using a caching plugin, please clear (purge) the cache to update plugin CSS and JS files.', 'podcast-player' ); ?></p>
	<h4 style="margin-bottom: 0.25em;padding: 5px;">
		<?php esc_html_e( 'What\'s New in Podcast Player ?', 'podcast-player' ); ?>
	</h4>
	<p class="premium">
		<?php esc_html_e( 'A new and improved method to add subscription links to your podcast.', 'podcast-player' ); ?>
		<a href="https://vedathemes.com/blog/help/podcast-player-free/getting-started/add-podcast-subscription-llinks/" target="_blank">
			<?php esc_html_e( 'Learn More', 'podcast-player' ); ?>
		</a>
	</p>
	<p class="premium">
		<?php esc_html_e( 'Design improvements in modern display style.', 'podcast-player' ); ?>
	</p>
	<h4 style="margin-bottom: 0.25em;padding: 5px;">
		<?php esc_html_e( 'What\'s New in PP Pro ?', 'podcast-player' ); ?>
	</h4>
	<p class="premium">
		<?php esc_html_e( 'Improvements in for podcast feed editor tool.', 'podcast-player' ); ?>
	</p>
	<p class="premium">
		<?php esc_html_e( 'Design improvements in various display styles.', 'podcast-player' ); ?>
	</p>
	<p class="premium">
		<?php esc_html_e( 'Bug Fixes and features improvements.', 'podcast-player' ); ?>
	</p>
	<div class="common-links">
		<p class="pp-link">
			<a href="https://wordpress.org/support/plugin/podcast-player/" target="_blank">
				<?php esc_html_e( 'Raise a support request', 'podcast-player' ); ?>
			</a>
		</p>
		<p class="pp-link">
			<a href="https://wordpress.org/support/plugin/podcast-player/reviews/" target="_blank">
				<?php esc_html_e( 'Give us 5 stars rating', 'podcast-player' ); ?>
			</a>
		</p>
		<p class="pp-link">
			<a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'pp-dismiss', 'dismiss_admin_notices' ), 'pp-dismiss-' . get_current_user_id() ) ); ?>" target="_parent">
				<?php esc_html_e( 'Dismiss this notice', 'podcast-player' ); ?>
			</a>
		</p>
	</div>
</div>
