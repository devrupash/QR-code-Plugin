<?php
namespace WpQrAcademy;

defined('ABSPATH') || exit;

require_once plugin_dir_path(__FILE__) . 'class-settings-page.php';

class Admin_Menu {

    private static $instance = null;

    private function __construct() {
        add_action('admin_menu', [$this, 'register_admin_menu']);
    }

    public static function get_instance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function register_admin_menu() {
        add_menu_page(
            'Academy Settings',
            'Academy Settings',
            'manage_options',
            'academy_settings',
            [Settings_Page::class, 'academy_settings']
        );
        add_submenu_page(
            'academy_settings',
            'QR Code Settings',
            'QR Code Settings',
            'manage_options',
            'qr_code_settings',
            [Settings_Page::class, 'qr_code_settings']
        );
    }
    
}
