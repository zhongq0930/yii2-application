<?php

$config = [
    'name' => 'Yii2-application',
    'language' => 'zh-CN',
    'vendorPath' => dirname(__DIR__) . '/vendor',
    'bootstrap' => ['log'],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'logFile' => '@runtime/logs/' . date('Ymd') . '.log',
                ],
            ],
        ],
        'formatter' => [
            'dateFormat' => 'y-MM-dd',
            'datetimeFormat' => 'y-MM-dd HH:mm:ss',
        ],
    ],
    'params' => require __DIR__ . '/params.php',
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['components']['cache'] = [
        'class' => 'yii\caching\DummyCache',
    ];
}

return $config;