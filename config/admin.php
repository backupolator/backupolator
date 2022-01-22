<?php

/*
|--------------------------------------------------------------------------
| Admin Initialize Plugin
|--------------------------------------------------------------------------
|
| Fires as an admin screen or script is being initialized.
|
*/
add_action('admin_init', function () {
    wp_enqueue_script('backupolator-admin');
    wp_enqueue_style('backupolator-admin');
    if(is_rtl()) {
        wp_enqueue_style('backupolator-admin-rtl');
    }
});

add_action('admin_head', function () {

});

add_action('admin_footer', function () {

});

/*
|--------------------------------------------------------------------------
| Admin Menu Plugin
|--------------------------------------------------------------------------
|
| Add menu to admin panel.
|
*/
add_action('admin_menu', function () {
    add_menu_page(__('Backupolator', 'backupolator'), __('Backupolator', 'backupolator'), 'administrator', 'backupolator-dashboard', function () {
        try {
            echo (new Backupolator\Controller\Admin\Dashboard)->index();
        } catch (SmartyException $e) {
            echo $e->getMessage();
        }
    }, 'dashicons-database');
    add_submenu_page('backupolator-dashboard', __('Dashboard', 'backupolator'), __('Dashboard', 'backupolator'), 'administrator', 'backupolator-dashboard');

    add_submenu_page('backupolator-dashboard', __('Backup', 'backupolator'), __('Backup', 'backupolator'), 'administrator', 'backupolator-test', function () {
        try {
            echo (new Backupolator\Controller\Admin\Dashboard)->index();
        } catch (SmartyException $e) {
            echo $e->getMessage();
        }
    });
});