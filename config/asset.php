<?php

/*
|--------------------------------------------------------------------------
| Asset Plugin
|--------------------------------------------------------------------------
|
| Fires as an admin screen or script is being initialized.
|
*/
add_action('admin_init', function () {
    wp_register_script('backupolator-admin', plugins_url('asset/js/script.js', BACKUPOLATOR_FILE), ['jquery'], BACKUPOLATOR_VERSION, true);
    wp_register_style('backupolator-admin', plugins_url('asset/css/style.css', BACKUPOLATOR_FILE), [], BACKUPOLATOR_VERSION);
    wp_register_style('backupolator-admin-rtl', plugins_url('asset/css/style-rtl.css', BACKUPOLATOR_FILE), [], BACKUPOLATOR_VERSION);

    wp_register_script('backupolator-admin-dashboard', plugins_url('asset/js/page/admin/dashboard.js', BACKUPOLATOR_FILE), ['backupolator-admin'], BACKUPOLATOR_VERSION, true);
    wp_register_style('backupolator-admin-dashboard', plugins_url('asset/css/page/admin/dashboard.css', BACKUPOLATOR_FILE), ['backupolator-admin'], BACKUPOLATOR_VERSION);
});