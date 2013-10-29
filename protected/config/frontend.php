<?php
/**
 * Configuration for frontend of application
 */

return CMap::mergeArray(require('common.php'),array(
    'modules' => CMap::mergeArray(require('modules/frontend.php'),array(
            // Custom modules configuration
        )),
));