<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require dirname(__DIR__) . '/../vendor/autoload.php';
require dirname(__DIR__) . '/../vendor/yiisoft/yii2/Yii.php';
require dirname(__DIR__) . '/../config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require dirname(__DIR__, 2) . '/config/common.php',
    require dirname(__DIR__, 2) . '/config/common-local.php',
    require dirname(__DIR__, 2) . '/config/admin.php',
    require dirname(__DIR__, 2) . '/config/admin-local.php'
);

(new yii\web\Application($config))->run();
