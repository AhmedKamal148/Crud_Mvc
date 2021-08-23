<?php


/**
 * front end cotroller
 */

class App
{
    protected $controller = "HomeController";
    protected $action = "index";
    protected $parms = [];

    public function __construct()
    {
        $this->prepareUrl();
        $this->render();
    }


    /**
     * extract controller , action and parameters
     * @return void 
     */


    private function prepareUrl()
    {
        $url = $_SERVER['QUERY_STRING'];
        if (!empty($url)) {
            $url = trim($url, '/');
            $url = explode('/', $url);
            //var_dump($url[]);
            //die();
            //define Controller
            $this->controller = isset($url[0]) ? ucwords($url[0]) . "Controller" : "HomeController";
            //define Method
            $this->action = isset($url[1]) ? $url[1] : 'index';

            /**
             * make the $url array empty  
             */
            unset($url[0], $url[1]);
            /**
             * push parametars to params array 
             */
            //var_dump(array_values($url));
            $this->parms = !empty($url) ? array_values($url) : [];
        }
    }



    private function render()
    {
        if (class_exists($this->controller)) {
            $controller =  new $this->controller;
            if (method_exists($controller, $this->action)) {
                call_user_func([$controller, $this->action], $this->parms);
            } else {
                echo "This Method Is $this->action  Not Exist";
            }
        } else {
            echo "This Controller " . $this->controller . "Not Exist";
        }
    }
}