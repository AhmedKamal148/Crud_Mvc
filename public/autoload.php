<?php


define("DS", DIRECTORY_SEPARATOR);
define("ROOT_PATH", dirname(__DIR__) . DS);
define("APP", ROOT_PATH . 'app' . DS);
define("CORE", APP . 'Core' . DS);
define("CONFIG", APP . 'Config' . DS);
define("CONTROLLERS", APP . 'controllers' . DS);
define("MODELS", APP . 'models' . DS);
define("VIEWS", APP . 'views' . DS);
define('LIBS', APP  . 'Libs' . DS);

define('UPLOADS', ROOT_PATH . DS . 'uploads' . DS);


/**
 * 
 * auto_load all classes
 */
require(CONFIG  . 'Config.php');
require(CONFIG  . 'helpers.php');



$modules = [ROOT_PATH, APP, CORE, CONFIG, CONTROLLERS, MODELS, VIEWS, LIBS];

set_include_path(get_include_path() . PATH_SEPARATOR .  implode(PATH_SEPARATOR, $modules));
spl_autoload_register('spl_autoload', 'FALSE');

new App();