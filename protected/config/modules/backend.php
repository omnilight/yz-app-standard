<?php
/**
 * List of application modules (only Yz modules goes here) that are accessible for backend
 * of application
 */
return CMap::mergeArray(require('common.php'),array(
    'admin' => array(
        'class' => 'vendor.omnilight.yz-admin.AdminModule',
    ),
));