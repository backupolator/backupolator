<?php

namespace Backupolator\Controller\Admin;

use Backupolator\Helper\View;
use SmartyException;
use Rah\Danpu\Dump;
use Rah\Danpu\Export;

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
        try {
            $dump = new Dump;
            $dump
                ->file(BACKUPOLATOR_PATH . DIRECTORY_SEPARATOR . 'backup' . DIRECTORY_SEPARATOR . 'file.sql')
                ->dsn('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST)
                ->user(DB_USER)
                ->pass(DB_PASSWORD)
                ->tmp(BACKUPOLATOR_PATH . DIRECTORY_SEPARATOR . 'backup');

            new Export($dump);
        } catch (\Exception $e) {
            echo 'Export failed with message: ' . $e->getMessage();
        }

        wp_enqueue_script('backupolator-admin-dashboard');
        wp_enqueue_style('backupolator-admin-dashboard');

        return View::render('admin/dashboard');
    }
}