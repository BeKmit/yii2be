<?php
return [
    'appName' => 'Yii2',
    'appVersion' => '2.0',
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,

    'protocol' => empty($_SERVER['HTTPS']) ? 'http' : 'https',

    'domain.main' => 'yii2be.dev',
    'domain.backend' => 'yii2be.dev',

    # Asset file version (css & js)
    'assetVer' => '0.0.1',
];
