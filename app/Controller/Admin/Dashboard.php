<?php

namespace Backupolator\Controller\Admin;

use Backupolator\Helper\View;
use SmartyException;

class Dashboard
{
    /**
     * Dashboard link
     *
     * @return string
     * @throws SmartyException
     */
    public function index(): string
    {
        wp_enqueue_script('backupolator-admin-dashboard');
        wp_enqueue_style('backupolator-admin-dashboard');

        return View::render('admin/dashboard');
    }
}