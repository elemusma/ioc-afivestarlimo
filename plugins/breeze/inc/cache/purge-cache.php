<?php
/**
 * @copyright 2017  Cloudways  https://www.cloudways.com
 *
 *  Original development of this plugin by JoomUnited https://www.joomunited.com/
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Breeze_PurgeCache {

	public function set_action() {
		add_action( 'pre_post_update', array( $this, 'purge_post_on_update' ), 10, 1 );
		add_action( 'save_post', array( $this, 'purge_post_on_update' ), 10, 1 );
		add_action( 'wp_trash_post', array( $this, 'purge_post_on_update' ), 10, 1 );
		add_action( 'comment_post', array( $this, 'purge_post_on_new_comment' ), 10, 3 );
		add_action( 'wp_set_comment_status', array( $this, 'purge_post_on_comment_status_change' ), 10, 2 );
		add_action( 'set_comment_cookies', array( $this, 'set_comment_cookie_exceptions' ), 10, 2 );

		add_action( 'switch_theme', array( &$this, 'clear_local_cache_on_switch' ), 9, 3 );
		add_action( 'customize_save_after', array( &$this, 'clear_customizer_cache' ), 11, 1 );
	}

	/**
	 * When customizer settings are saved ( Publish button is clicked ), clear all cache.
	 *
	 * @param $element
	 *
	 * @return void
	 */
	public function clear_customizer_cache( $element ) {

		do_action( 'breeze_clear_all_cache' );
	}

	/**
	 * Clear local cache on theme switch.
	 *
	 * @param $new_name
	 * @param $new_theme
	 * @param $old_theme
	 *
	 * @return void
	 */
	public function clear_local_cache_on_switch( $new_name, $new_theme, $old_theme ) {
		//delete minify
		#Breeze_MinificationCache::clear_minification();
		//clear normal cache
		#Breeze_PurgeCache::breeze_cache_flush();
		do_action( 'breeze_clear_all_cache' );
	}

	/**
	 * When user posts a comment, set a cookie so we don't show them page cache
	 *
	 * @param WP_Comment $comment
	 * @param WP_User $user
	 *
	 * @since  1.3
	 */
	public function set_comment_cookie_exceptions( $comment, $user ) {
		// File based caching only
		if ( ! empty( Breeze_Options_Reader::get_option_value( 'breeze-active' ) ) ) {

			$post_id = $comment->comment_post_ID;

			setcookie( 'breeze_commented_posts[' . $post_id . ']', parse_url( get_permalink( $post_id ), PHP_URL_PATH ), ( time() + HOUR_IN_SECONDS * 24 * 7 ) );
		}
	}

	//    Automatically purge all file based page cache on post changes
	public function purge_post_on_update( $post_id ) {
		$post_type = get_post_type( $post_id );

		if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) || 'revision' === $post_type ) {
			return;
		} elseif ( ! current_user_can( 'edit_post', $post_id ) && ( ! defined( 'DOING_CRON' ) || ! DOING_CRON ) ) {
			return;
		}

		$do_cache_reset = true;
		if ( 'tribe_events' === $post_type ) {
			$do_cache_reset = false;
		}

		if ( did_action( 'edit_post' ) ) {
			return;
		}

		// File based caching only
		if ( ! empty( Breeze_Options_Reader::get_option_value( 'breeze-active' ) ) ) {
			self::breeze_cache_flush( $do_cache_reset );
		}
	}

	public function purge_post_on_new_comment( $comment_ID, $approved, $commentdata ) {
		if ( empty( $approved ) ) {
			return;
		}
		// File based caching only
		if ( ! empty( Breeze_Options_Reader::get_option_value( 'breeze-active' ) ) ) {
			$post_id = $commentdata['comment_post_ID'];

			global $wp_filesystem;

			if ( empty( $wp_filesystem ) ) {
				require_once( ABSPATH . '/wp-admin/includes/file.php' );
				WP_Filesystem();
			}

			$url_path = get_permalink( $post_id );
			if ( $wp_filesystem->exists( breeze_get_cache_base_path() . md5( $url_path ) ) ) {
				$wp_filesystem->rmdir( breeze_get_cache_base_path() . md5( $url_path ), true );
			}
		}
	}

	//            if a comments status changes, purge it's parent posts cache
	public function purge_post_on_comment_status_change( $comment_ID, $comment_status ) {
		// File based caching only
		if ( ! empty( Breeze_Options_Reader::get_option_value( 'breeze-active' ) ) ) {
			$comment = get_comment( $comment_ID );
			if ( ! empty( $comment ) ) {
				$post_id = $comment->comment_post_ID;

				global $wp_filesystem;

				WP_Filesystem();

				$url_path = get_permalink( $post_id );

				if ( $wp_filesystem->exists( breeze_get_cache_base_path() . md5( $url_path ) ) ) {
					$wp_filesystem->rmdir( breeze_get_cache_base_path() . md5( $url_path ), true );
				}
			}
		}
	}

	//clean cache
	public static function breeze_cache_flush( $flush_cache = true ) {
		global $wp_filesystem, $post;

		require_once( ABSPATH . 'wp-admin/includes/file.php' );

		WP_Filesystem();

		$cache_path = breeze_get_cache_base_path( is_network_admin() );
		$wp_filesystem->rmdir( untrailingslashit( $cache_path ), true );

		if ( true === $flush_cache && ! empty( $post ) ) {
			$post_type = get_post_type( $post->ID );

			$flush_cache = true;
			$ignore_object_cache = array(
				'tribe_events',
				'shop_order',
			);
			if ( in_array( $post_type, $ignore_object_cache ) ) {
				$flush_cache = false;
			}
		}

		if ( true === $flush_cache && isset( $_GET['post_type'] ) && 'tribe_events' === $_GET['post_type'] ) {
			$flush_cache = false;
		}

		if ( function_exists( 'wp_cache_flush' ) && true === $flush_cache ) {
			#if ( ! defined( 'RedisCachePro\Version' ) && ! defined( 'WP_REDIS_VERSION' ) ) {
				wp_cache_flush();
			#}

		}
	}

	//delete file for clean up

	public function clean_up() {

		global $wp_filesystem;
		$file = untrailingslashit( WP_CONTENT_DIR ) . '/advanced-cache.php';

		$ret = true;

		if ( ! $wp_filesystem->delete( $file ) ) {
			$ret = false;
		}

		$folder = untrailingslashit( breeze_get_cache_base_path() );

		if ( ! $wp_filesystem->delete( $folder, true ) ) {
			$ret = false;
		}

		return $ret;
	}

	/**
	 * Return an instance of the current class, create one if it doesn't exist
	 * @return object
	 * @since  1.0
	 */
	public static function factory() {

		static $instance;

		if ( ! $instance ) {
			$instance = new self();
			$instance->set_action();
		}

		return $instance;
	}


	public static function __flush_object_cache() {
		set_as_network_screen();

		if ( is_network_admin() ) {
			// in case we need to add something specific for network.
			return wp_cache_flush();
		}

		return wp_cache_flush();
	}

}

$breeze_basic_settings = Breeze_Options_Reader::get_option_value( 'breeze-active' );

if ( isset( $breeze_basic_settings ) && $breeze_basic_settings ) {
	Breeze_PurgeCache::factory();
}
