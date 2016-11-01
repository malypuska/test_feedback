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
        'application.components.*',
        'ext.YiiMailer.YiiMailer',
    ),
    'modules' => array(
        'admin',
        'author',
        'events',
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '1111',
            'ipFilters'=>array('127.0.0.1'),
        ),
//        'sitemap' => array(
//            //'class' => 'ext.sitemap.SitemapModule',
//            'protectedControllers' => array('admin'),
//            'protectedActions' =>array('site/error'),
//            'cachingDuration' => 0,
//        ),
    ),
    'defaultController' => 'site',
    // application components
    'components' => array(
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        // uncomment the following to use a MySQL database
        'db' => require(dirname(__FILE__) . '/db.php'),
        'cache' => array(
            'class' => 'system.caching.CFileCache',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                // uncomment the following to show log messages on web pages
                array(
                    'class' => 'CWebLogRoute',
                ),
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => require(dirname(__FILE__) . '/params.php'),
);
