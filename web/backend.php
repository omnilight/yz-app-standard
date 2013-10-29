<?php
error_reporting(E_ALL ^ E_NOTICE);

// Checking for development mode
if(is_file(dirname(__FILE__).'/.devenv'))
    define('DEV_ENV',true);

define('YZ_ROOT',dirname(__FILE__));
define('YZ_APP_DIR',YZ_ROOT.'/protected');
define('YZ_VENDOR_DIR',YZ_ROOT.'/protected/vendor');

// Composer autoloader
require_once(YZ_VENDOR_DIR.'/composer/autoload.php');

// change the following paths if necessary
$yii=YZ_VENDOR_DIR.'/yiisoft/yii/framework/yii.php';
$config=YZ_APP_DIR.'/config/backend.php';

// remove the following lines when in production mode
defined('DEV_ENV') and (defined('YII_DEBUG') or define('YII_DEBUG',true));
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
