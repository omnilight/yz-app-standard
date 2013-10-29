<?php
/**
 * Common application config
 */

// Defining aliases
Yii::setPathOfAlias('vendor',YZ_VENDOR_DIR);

return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'YzEngine Standard Application',

//    'theme' => 'theme',

    'language' => 'ru',

    // preloading 'log' component
    'preload'=>array('log','yz'),

    // autoloading model and component classes
    'import'=>array(
        'application.models.*',
        'application.components.*',
    ),

    'modules' => array(),

    'components' => array(
        'yz' => array(
            'class' => 'vendor.omnilight.yz.Yz',
        ),
        'settings'=>array(
            'class'=>'yz.components.YzSettingsComponent',
        ),
        'db'=>CMap::mergeArray(
            require('db.php'),
            array()
        ),

    ),
);