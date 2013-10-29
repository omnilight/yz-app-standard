<?php
if(defined('DEV_ENV'))
    return array(
        'connectionString' => 'mysql:host=localhost;dbname=dev_db_name',
        'emulatePrepare' => true,
        'username' => 'dev_db_user',
        'password' => 'dev_db_password',
        'charset' => 'utf8',
        'tablePrefix' => 'yz_',
        'enableProfiling' => true,
        'enableParamLogging' => true,
        //'schemaCachingDuration' => 6000,

    );
else
    return array(
        'connectionString' => 'mysql:host=localhost;dbname=db_name',
        'emulatePrepare' => true,
        'username' => 'db_user',
        'password' => 'db_password',
        'charset' => 'utf8',
        'tablePrefix' => 'yz_',
        'enableProfiling' => true,
        'enableParamLogging' => true,
        //'schemaCachingDuration' => 6000,
    );