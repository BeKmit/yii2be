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
                    '@app/views' => '@app.theme/views'
                ],
            ],
        ],

        'urlManagerISource' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => $params['protocol'] . '://' . $params['domain.iSource'],
            'hostInfo' => $params['protocol'] . '://' . $params['domain.iSource'],
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
