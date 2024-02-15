<?php
/**
 * Plugin Name: WebinarIgnition
 * Description: WebinarIgnition is a premium webinar solution that allows you to create, run and manage webinars. Build and fully customize, professional webinar registration, confirmation, live webinar and replay pages with ease.
 * Version: 3.04.5
 * Requires at least: 5.0
 * Tested up to: 6.4
 * Requires PHP: 7.2.5
 * Author: Saleswonder Team
 * Text Domain: webinarignition
 * Domain Path: /languages
 * Plugin URI: https://webinarignition.com
 */

defined( 'ABSPATH' ) || exit;

if ( function_exists( 'webinarignition_fs' ) ) {
	webinarignition_fs()->set_basename( true, __FILE__ );
} else {

	if ( ! defined( 'WI_PREVIOUS_VERSION' ) ) {
		define( 'WI_PREVIOUS_VERSION', '2.15.2' );
	}

	if ( ! defined( 'WEBINARIGNITION_VERSION' ) ) {
        define( 'WEBINARIGNITION_VERSION', '3.04.5' );
	}

	if ( ! defined( 'WEBINARIGNITION_BRANCH' ) ) {
        define( 'WEBINARIGNITION_BRANCH', '3.04.5 2023.11.05 commit 6ded00a new 2a, 3a plans open registration' );
	}

	if ( ! defined( 'WEBINARIGNITION_URL' ) ) {
		define( 'WEBINARIGNITION_URL', plugins_url( '/', __FILE__ ) );
	}

	if ( ! defined( 'WEBINARIGNITION_PATH' ) ) {
		define( 'WEBINARIGNITION_PATH', plugin_dir_path( __FILE__ ) );
	}

	if ( ! defined( 'WEBINARIGNITION_PLUGIN_FILE' ) ) {
		define( 'WEBINARIGNITION_PLUGIN_FILE', __FILE__ );
	}

	if ( ! defined( 'WEBINARIGNITION_DB_VERSION' ) ) {
		define( 'WEBINARIGNITION_DB_VERSION', 12 );
	}

	// DO NOT REMOVE THIS IF, IT IS ESSENTIAL FOR THE `function_exists` CALL ABOVE TO PROPERLY WORK.
	if ( ! function_exists( 'webinarignition_fs' ) ) {
		// Create a helper function for easy SDK access.
		function webinarignition_fs() {
			global $webinarignition_fs;

			if ( ! isset( $webinarignition_fs ) ) {
				// Activate multisite network integration.
				if ( ! defined( 'WP_FS__PRODUCT_7606_MULTISITE' ) ) {
					define( 'WP_FS__PRODUCT_7606_MULTISITE', true );
				}

                // Include Freemius SDK.
                require_once dirname( __FILE__ ) . '/freemius/start.php';
                $webinarignition_fs = fs_dynamic_init( array(
                    'id'              => '7606',
                    'slug'            => 'webinar-ignition',
                    'type'            => 'plugin',
                    'public_key'      => 'pk_78db77544c037d3e892f673cf65d4',
                    'is_premium'      => false,
                    'has_addons'      => true,
                    'has_paid_plans'  => true,
                    'has_premium_version' => false,
                    'is_org_compliant'    => true,
                    'trial'               => array(
                        'days'               => 14,
                        'is_require_payment' => true,
                    ),
                    'has_affiliation' => 'selected',
                    'menu'            => array(
                        'slug'       => 'webinarignition-dashboard',
                        'support'    => false,
                        'contact'    => false,
                        'first-path' => 'admin.php?page=webinarignition-dashboard',
                    ),
                    'is_live'         => true,
                ) );
			}

			return $webinarignition_fs;
		}

		// Init Freemius.
		webinarignition_fs();
		// Signal that SDK was initiated.
		do_action( 'webinarignition_fs_loaded' );
	}

	// Include the main WebinarIgnition class.
	if ( ! class_exists( 'WebinarIgnition' ) ) {
		include_once dirname( __FILE__ ) . '/inc/class-webinarignition.php';
	}

	if ( !class_exists( 'WI_Install' ) ) {
        include_once dirname( __FILE__ ) . '/inc/class.WebinarignitionManager.php';
        include_once dirname( __FILE__ ) . '/inc/class-wi-install.php';
        register_activation_hook( WEBINARIGNITION_PLUGIN_FILE, array( 'WI_Install', 'install') );
    }

	register_activation_hook( __FILE__, 'webinarignition_activate' );
	register_deactivation_hook( __FILE__, 'webinarignition_deactivate' );

	if ( ! function_exists( 'webinarignition_activate' ) ) {
		function webinarignition_activate() {

			webinarignition_deactivate_previous(); //Deactivate any previously active instance of the plugin, before activating new one

			include_once WEBINARIGNITION_PATH . "inc/wi-activation.php";
			webinarignition_installer();
			if ( isset( $_REQUEST['action'] ) && 'activate-selected' === $_REQUEST['action'] && ( isset( $_POST['checked'] ) && count( $_POST['checked'] ) > 1 ) ) {
				return;
			}

			if ( empty( intval( get_option( 'wi_first_install' ) ) ) ) {
				add_option( 'wi_redirect_after_installation', wp_get_current_user()->ID );
				update_option( 'webinarignition_smtp_name', get_bloginfo( 'name' ) );
				$protocols   = array(
					'http://',
					'https://',
					'http://www.',
					'https://www.',
					'www.'
				);
				$site_domain = str_replace( $protocols, '', site_url() );
				update_option( 'webinarignition_smtp_email', 'webinar@' . $site_domain );
			}

			update_option('webinarignition_activated', 1);

			update_option('webinarignition_branding_copy', 'Webinar powered by webinarignition');

			do_action('webinarignition_activated');
		}
	}

	if ( ! function_exists( 'webinarignition_deactivate' ) ) {
		function webinarignition_deactivate() {
			$timestamp = wp_next_scheduled( 'webinarignition_cron_hook' );
			wp_unschedule_event( $timestamp, 'webinarignition_cron_hook' );
		}
	}

	if( !function_exists('webinarignition_deactivate_previous') ) {
		/**
		 * Deactivate any previously active instance of the plugin
		 */
		function webinarignition_deactivate_previous() {
			if ( current_user_can( 'activate_plugins' ) && class_exists( 'WebinarIgnition' ) && defined('WEBINARIGNITION_PLUGIN_FILE') ) {
				if ( ! function_exists( 'is_plugin_active_for_network' ) ) {
					include_once( ABSPATH . '/wp-admin/includes/plugin.php' );
				}

				deactivate_plugins ( plugin_basename ( WEBINARIGNITION_PLUGIN_FILE ), true );
			}
		}
	}

	if ( ! function_exists( 'WebinarIgnition' ) ) {
		/**
		 * Returns the main instance of WebinarIgnition.
		 *
		 * @return WebinarIgnition|null
		 */
		function WebinarIgnition() {
			return WebinarIgnition::instance();
		}

		add_action( 'plugins_loaded', 'WebinarIgnition' );
	}
}

add_action('wp_loaded', 'webinaringition_load_text_domain');

if( !function_exists('webinaringition_load_text_domain') ) {
	function webinaringition_load_text_domain() {

		if ( function_exists( 'load_plugin_textdomain' ) ) {
			load_plugin_textdomain( 'webinarignition', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
		}
	}
}