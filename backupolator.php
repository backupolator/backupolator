<?php
/**
 * Plugin Name: Backupolator
 * Plugin URI:  https://wordpress.org/plugins/backupolator/
 * Description: Backupolator module
 * Version:     1.0.0
 * Author:      Majeed Mohammadian
 * Author URI:  https://www.majeed21.ir
 * Text Domain: backupolator
 * Domain Path: /i18n
 * License URI: https://www.majeed21.ir/licenses/
 */

// Limit Direct Access.
defined('ABSPATH') || exit('no access');

const BACKUPOLATOR_VERSION = '1.0.0';
const BACKUPOLATOR_PATH = __DIR__;
const BACKUPOLATOR_FILE = __FILE__;
const BACKUPOLATOR_VIEW = __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR;

if(file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php')) {
    require_once 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
} else {
    die('composer library in "Backupolator plugin" not found!');
}

/*
|--------------------------------------------------------------------------
| Run The Plugin
|--------------------------------------------------------------------------
|
| Run Backupolator Plugin
|
*/
require_once 'bootstrap' . DIRECTORY_SEPARATOR . 'boot.php';