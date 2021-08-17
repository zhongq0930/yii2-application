<?php

return [
    'id' => 'application-console',
    'basePath' => dirname(__DIR__) . '/console',
    'controllerNamespace' => 'console\controllers',
    'controllerMap' => [
        'serve' => [
            'class' => 'yii\console\controllers\ServeController',
            'docroot' => '@root/web',
        ],
    ],
];
