<?php
/**
 * osmo Configuration File
 * Project configuration and settings
 */

// Site Configuration
define('SITE_NAME', 'osmo');
define('SITE_VERSION', '1.0.0');
define('SITE_AUTHOR', 'cuttarelison');

// Display Configuration
define('THEME_COLOR', '#1E88E5');
define('ACCENT_COLOR', '#64B5F6');
define('PRIMARY_BLUE', '#E3F2FD');

// Environment
define('ENV', 'production');
define('DEBUG', false);

// Database (if needed)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'osmo');

// API Configuration
define('API_TIMEOUT', 30);
define('API_RETRIES', 3);

// Security
define('HASH_ALGO', 'sha256');
define('SESSION_TIMEOUT', 3600);

// Paths
define('BASE_URL', 'http://localhost');
define('ROOT_DIR', dirname(__FILE__));
define('ASSETS_DIR', ROOT_DIR . '/assets');

// Features
$features = [
    'responsive' => true,
    'dark_mode' => false,
    'analytics' => true,
    'contact_form' => true
];

// Initialize
error_reporting(DEBUG ? E_ALL : 0);
ini_set('display_errors', DEBUG ? 1 : 0);

?>
