<?php


class View
{
    public static function load($viewName, $viewData = [])
    {
        $file = VIEWS . $viewName . '.php';

        if (file_exists($file)) {
            extract($viewData);
            ob_start();
            require_once($file);
            ob_end_flush();


            /** ال ob_flush
             * دي بتقفل وتنضف 
             * بمعني انها بعد ما عملت require 
             *  لل file 
             * بتفضيه علشان تستقبل الداتا الجديده 
             */
        } else {
            echo "This View " . $viewName . "Is Not Exists";
        }
    }
}