<?php
namespace WpQrAcademy;

defined('ABSPATH') || exit;

require_once plugin_dir_path(__FILE__) . 'class-admin-menu.php';

class Plugin_Core {

    private static $instance = null;

    private function __construct() {
        $this->register_constants(); 
        add_action('plugins_loaded', [$this, 'admin_menu']);
        add_action('admin_enqueue_scripts', [$this, 'admin_enqueue_assets']);
    }

    public static function get_instance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function admin_menu() {
        Admin_Menu::get_instance();
    }
    public function admin_enqueue_assets() {
        $main_asset = require WP_QR_ACADEMY_PLUGIN_DIR . '../assets/js/settings/main.asset.php';
        wp_enqueue_script(
            'wp-qr-academy-custom-js',
            plugin_dir_url(__FILE__) . '../assets/js/settings/main.js',
            $main_asset['dependencies'],
            $main_asset['version'],
            true
        );
    }
    private function register_constants() {
        define('WP_QR_ACADEMY_PLUGIN_DIR', plugin_dir_path(__FILE__));
        define('WP_QR_ACADEMY_PLUGIN_URL', plugin_dir_url(__FILE__));
    }
    
}
