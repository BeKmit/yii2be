<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'backend\controllers',

    'aliases'=>[
        '@themeBackend' => '@backend/themes/adminlte2',
    ],

    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@themeBackend/views'
                ],
            ],
        ],

        'urlManagerFrontend' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '//ntl.dev',
            'showScriptName' => false,
            'enablePrettyUrl' => true,
        ],
    ],

    'modules' => [
        # warrence/yii2-kartikgii
        'gridview' => [
            'class' => 'kartik\grid\Module',
        ],
    ],

    'params' => $params,
];
