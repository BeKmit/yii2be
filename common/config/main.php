<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',

    // 'language' => 'en-US',

    'aliases'=>[
        '@common.theme' => '@common/themes/adminlte2',
        '@common.uploadPath' => '@common/uploads',
        '@common.uploadUrl' => '//localhost/yii2be/common/uploads',

        '@app.theme' => '@app/themes/adminlte2',
        '@app.uploadPath' => '@app/web/uploads',
        '@app.uploadUrl' => '/uploads',
    ],

    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'urlManager' => [
            'class' => 'yii\web\urlManager',
            # Disable index.php
            'showScriptName' => false,
            # Disable r= routes
            'enablePrettyUrl' => true,
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',

                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>'          => '<controller>/<action>',

                '<module>/<controller>/<action>/<id:\d+>' => '<module>/<controller>/<action>',
                '<module>/<controller>/<action>'          => '<module>/<controller>/<action>',
            ),
        ],

        'formatter' => [
            'defaultTimeZone' => 'Asia/Bangkok',
            'dateFormat' => 'php: d-m-Y',
            'timeFormat' => 'php: H:i',
            'datetimeFormat' => 'php: d-m-Y H:i',
            'currencyCode' => '฿',
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
        ],
    ],

    'modules' => [
        # warrence/yii2-kartikgii
        // Fix bug displayTimezone in kartik\detail\DetailView data wrong at page view
        // You must add Config->components = ['formatter'=>['defaultTimeZone' => 'Asia/Bangkok']]
        'datecontrol' =>  [
            'class' => 'kartik\datecontrol\Module',

            // set your display timezone
            'displayTimezone' => 'Asia/Bangkok',

            // format settings for displaying each date attribute
            'displaySettings' => [
                'date' => 'php: d-m-Y',
                'time' => 'php: H:i',
                'datetime' => 'php: d-m-Y H:i',
            ],

            // format settings for saving each date attribute
            'saveSettings' => [
                'date' => 'php: Y-m-d',
                'time' => 'php: H:i:s',
                'datetime' => 'php: Y-m-d H:i:s',
            ],

            // automatically use kartik\widgets for each of the above formats
            'autoWidget' => true,
        ],
    ],
];
