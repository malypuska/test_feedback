<?php

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'test',
    'language' => 'ru',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
//        'application.components.*',
    ),
    'components' => array(
        'db' => require(dirname(__FILE__).'/db.php'),
/*        'cache' => array(
            'class' => 'system.caching.CFileCache',
        ),
 */  
  'params' => require(dirname(__FILE__) . '/params.php'),  
);
