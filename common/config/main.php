<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',

    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            # Disable index.php
            'showScriptName' => false,
            # Disable r= routes
            'enablePrettyUrl' => true,
        ],
    ],

    'modules' => [
        # warrence/yii2-kartikgii
        'datecontrol' =>  [
            'class' => 'kartik\datecontrol\Module',

            // format settings for displaying each date attribute
            'displaySettings' => [
                'date' => 'php: d-m-Y',
                'time' => 'php: H:i:s',
                'datetime' => 'php: d-m-Y H:i:s',
            ],

            // format settings for saving each date attribute
            'saveSettings' => [
                'date' => 'php: Y-m-d',
                'time' => 'php: H:i:s',
                'datetime' => 'php: Y-m-d H:i:s',
            ],

            // automatically use kartik\widgets for each of the above formats
            'autoWidget' => true,
        ]
    ],
];
