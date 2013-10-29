<?php
/**
 * Configuration for console part of application
 */

return CMap::mergeArray(require('common.php'),array(
    'modules' => CMap::mergeArray(require('modules/console.php'),array(
            // Custom modules configuration
        )),
));