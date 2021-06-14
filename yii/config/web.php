<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
      'gridview' =>  [
        'class' => '\kartik\grid\Module'
      ]
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'xy5PdRbIaY2wNfwso-m1UaaDx2an8GbX',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\db\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
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
        'db' => $db,
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                ['pattern' => '<language:[A-Za-z0-9_-]+>', 'route' => 'site/index', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => '<language:[A-Za-z0-9_-]+>/work-with-us', 'route' => 'site/work', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => '/work-with-us', 'route' => 'site/suitei', 'normalizer' => ['collapseSlashes' => false]],
                /*
                |--------------------------------------------------------------------------
                | ADMIN
                |--------------------------------------------------------------------------
                */

                ['pattern' => 'Xhiddenimstadminurlx/login', 'route' => '/xhiddenimstadminurlx/admin/login', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/logout', 'route' => '/xhiddenimstadminurlx/admin/logout', 'normalizer' => ['collapseSlashes' => false]],

                ['pattern' => 'Xhiddenimstadminurlx/slider/index', 'route' => '/xhiddenimstadminurlx/slider/index', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/slider/rest-sort', 'route' => '/xhiddenimstadminurlx/slider/rest-sort', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/slider/upload-photo', 'route' => '/xhiddenimstadminurlx/slider/upload-photo', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/slider/delete', 'route' => '/xhiddenimstadminurlx/slider/delete', 'normalizer' => ['collapseSlashes' => false]],

                ['pattern' => 'Xhiddenimstadminurlx/mainphoto/index', 'route' => '/xhiddenimstadminurlx/mainphoto/index', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/mainphoto/upload-photo', 'route' => '/xhiddenimstadminurlx/mainphoto/upload-photo', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/mainphoto/rest-sort', 'route' => '/xhiddenimstadminurlx/mainphoto/rest-sort', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/mainphoto/delete', 'route' => '/xhiddenimstadminurlx/mainphoto/delete', 'normalizer' => ['collapseSlashes' => false]],

                ['pattern' => 'Xhiddenimstadminurlx/texts/mainphoto', 'route' => '/xhiddenimstadminurlx/texts/mainphoto', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/company-update', 'route' => '/xhiddenimstadminurlx/texts/company-update', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/values-update', 'route' => '/xhiddenimstadminurlx/texts/values-update', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/mission-update', 'route' => '/xhiddenimstadminurlx/texts/mission-update', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/guarantee-update', 'route' => '/xhiddenimstadminurlx/texts/guarantee-update', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/work-with-us-update', 'route' => '/xhiddenimstadminurlx/texts/work-with-us-update', 'normalizer' => ['collapseSlashes' => false]],

                ['pattern' => 'Xhiddenimstadminurlx/texts/services-text-one', 'route' => '/xhiddenimstadminurlx/texts/services-text-one', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/services-text-two', 'route' => '/xhiddenimstadminurlx/texts/services-text-two', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/services-text-three', 'route' => '/xhiddenimstadminurlx/texts/services-text-three', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/services-text-four', 'route' => '/xhiddenimstadminurlx/texts/services-text-four', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/services-text-five', 'route' => '/xhiddenimstadminurlx/texts/services-text-five', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/services-text-six', 'route' => '/xhiddenimstadminurlx/texts/services-text-six', 'normalizer' => ['collapseSlashes' => false]],

                ['pattern' => 'Xhiddenimstadminurlx/texts/guarantee-text-one', 'route' => '/xhiddenimstadminurlx/texts/guarantee-text-one', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/guarantee-text-two', 'route' => '/xhiddenimstadminurlx/texts/guarantee-text-two', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/guarantee-text-three', 'route' => '/xhiddenimstadminurlx/texts/guarantee-text-three', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/guarantee-text-four', 'route' => '/xhiddenimstadminurlx/texts/guarantee-text-four', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/guarantee-text-five', 'route' => '/xhiddenimstadminurlx/texts/guarantee-text-five', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/guarantee-text-six', 'route' => '/xhiddenimstadminurlx/texts/guarantee-text-six', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/guarantee-text-seven', 'route' => '/xhiddenimstadminurlx/texts/guarantee-text-seven', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/guarantee-text-eight', 'route' => '/xhiddenimstadminurlx/texts/guarantee-text-eight', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/texts/guarantee-text-nine', 'route' => '/xhiddenimstadminurlx/texts/guarantee-text-nine', 'normalizer' => ['collapseSlashes' => false]],

                ['pattern' => 'Xhiddenimstadminurlx/newsletter/index', 'route' => '/xhiddenimstadminurlx/newsletter/index', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/newsletter/delete', 'route' => '/xhiddenimstadminurlx/newsletter/delete', 'normalizer' => ['collapseSlashes' => false]],

                ['pattern' => 'Xhiddenimstadminurlx/adminusers/index', 'route' => '/xhiddenimstadminurlx/adminusers/index', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/adminusers/create', 'route' => '/xhiddenimstadminurlx/adminusers/create', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/adminusers/rest-sort', 'route' => '/xhiddenimstadminurlx/adminusers/rest-sort', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/adminusers/delete', 'route' => '/xhiddenimstadminurlx/adminusers/delete', 'normalizer' => ['collapseSlashes' => false]],
                ['pattern' => 'Xhiddenimstadminurlx/adminusers/update', 'route' => '/xhiddenimstadminurlx/adminusers/update', 'normalizer' => ['collapseSlashes' => false]],
            ],
        ],
       
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
