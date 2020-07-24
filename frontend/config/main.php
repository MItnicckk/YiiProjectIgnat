<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@mihaildev' => dirname(dirname(__FILE__)) . '\mihaildev',
    ],
    'language'=>'ru-RU',
    'sourceLanguage'=>'ru-RU',
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
        'v1' => [
            'class' => 'frontend\modules\v1\Module',
        ],
        'v2' => [
            'class' => 'frontend\modules\v2\Module',
        ],
        // 'statistics' => [
        //     'class' => 'common\modules\statistics\StatModule',
        // ],
    ],

    // подсчет клиентов на сайте
    // 'timeZone' => 'Russia/Rostov', //для правильного форматирования времени
    // 'modules' => [
    //     'statistics' => [
    //           'class' => 'common\modules\statistics\StatModule',
    //     ],
    // ],
    // 'assetManager' => [
    //     'linkAssets' => true,
    // ],
    // подсчет клиентов на сайте

    'aliases' => [
     '@moduleStat' => '@common/modules/statistics',
    ],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
            'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
        // send all mails to a file by default. You have to set
        // 'useFileTransport' to false and configure a transport
        // for the mailer to send real emails.
        'useFileTransport' => false,
        'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.yandex.ru',
        'username' => 'MrTangi@yandex.ru',
        'password' => 'dkflrhen1928',
        'port' => '465',
        'encryption' => 'ssl',
        ],
            ],
        
        ///////////ЧПУ
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [
                'post/<id:\d+>' => 'post/view',
                'page/<page:/d+>' => 'site/index',
                '/' => 'site/index',
                'statistics/' => 'statistics/stat/index',
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => ['clients','v2/clients' => 'v2/clients'],
                    'pluralize' => false,
                ],
            ],

        ],
        ///////////ЧПУ
        
    ],
    'params' => $params,
];

// if (YII_ENV_DEV) {
//     // configuration adjustments for 'dev' environment
//     $config['bootstrap'][] = 'gii';
//     $config['modules']['gii'] = [
//         'class' => 'yii\debug\Module',
//         // uncomment the following to  add your IP if you are not connecting from localhost.
//         //'allowedIPs' => ['127.0.0.1', '::1'],
//     ];
// }
// return $config;