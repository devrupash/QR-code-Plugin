<?php
/**
 * Plugin Name: WP QR Academy Settings
 * Description: Adds QR Code and Academy settings menu using OOP & Singleton Pattern.
 * Version: 1.0
 * Author: Your Name
 */

defined('ABSPATH') || exit;

require_once plugin_dir_path(__FILE__) . 'includes/class-plugin-core.php';

\WpQrAcademy\Plugin_Core::get_instance();
