<?php

// error_reporting(E_ALL);
// ini_set('display_errors',1);

// change the following paths if necessary
$yii=dirname(__FILE__).'../../framework/autoload.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',false);
setlocale(LC_TIME, "ru_RU");
require_once($yii);

Yii::createWebApplication($config)->run();