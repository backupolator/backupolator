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

const PATH_BACKUPOLATOR = __DIR__;
const ASSET_BACKUPOLATOR = __FILE__;

require_once 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Plugin
|--------------------------------------------------------------------------
|
| Run Backupolator Plugin
|
*/
require_once 'bootstrap' . DIRECTORY_SEPARATOR . 'boot.php';