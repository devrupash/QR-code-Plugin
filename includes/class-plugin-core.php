<?php
namespace WpQrAcademy;

defined('ABSPATH') || exit;

require_once plugin_dir_path(__FILE__) . 'class-admin-menu.php';

class Plugin_Core {

    private static $instance = null;

    private function __construct() {
        add_action('plugins_loaded', [$this, 'init']);
    }

    public static function get_instance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function init() {
        Admin_Menu::get_instance();
    }
}
