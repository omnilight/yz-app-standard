<?php
/**
 * Configuration for backend of application
 */

return CMap::mergeArray(require('common.php'),array(
    'commandMap' => array(
        'migrate' => array(

        )
    ),
    'modules' => CMap::mergeArray(require('modules/backend.php'),array(
            // Custom modules configuration
        )),
));