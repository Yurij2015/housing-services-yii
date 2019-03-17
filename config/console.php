<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@tests' => '@app/tests',
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
    ],
    'params' => $params,
    /*
    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
            'class' => 'yii\faker\FixtureController',
        ],
    ],
    */
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [
            'model' => [
                'class' => 'yii\gii\generators\model\Generator',
                // Благодаря следующим параметрам можно не указывать
                // генератору опций --enableI18N=1 --ns=micro\\models
                'enableI18N' => true,
                'messageCategory' => 'db-label',
                //'ns' => 'yii\\models',
                // Пока не используются
                'useTablePrefix' => true,
                'generateLabelsFromComments' => false,
            ],
            'crud' => [
                'class' => 'yii\gii\generators\crud\Generator',
                'enableI18N' => true,
                'messageCategory' => 'mdLib',
                'enablePjax' => true
            ],
        ],
    ];
}

return $config;
