<?php

namespace Backupolator\Helper;

use Smarty;
use SmartyException;

class View
{
    /**
     * render view
     *
     * @param string $path
     * @param array $data
     *
     * @return string
     * @throws SmartyException
     */
    public static function render(string $path, array $data = []): string
    {
        ob_start();

        $smarty = new Smarty();

        foreach ($data as $key => $item) {
            $smarty->assign($key, $item);
        }

        $smarty->display(BACKUPOLATOR_VIEW . $path . '.tpl');

        $output = ob_get_contents();
        ob_end_clean();

        return $output;
    }
}