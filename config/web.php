<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
use kartik\datecontrol\Module;

$config = [
    'id' => 'yiiBaseApp',
    'language' => 'ru',
    'sourceLanguage' => 'ru',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@adm'   => '@app/modules/admin',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'd6sdasDS74gfb5Dsv'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['auth/login']
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'authManager’' => [
            'class' => 'yii\rbac\PhpManager',
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'datetimeFormat' => 'dd-MM-yyyy, HH:mm',
            'dateFormat' => 'dd-MM-yyyy',
            'timeFormat' => 'HH:mm',
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
            'currencyCode' => 'UAH',
            'timeZone' => 'Europe/Kiev',
        ],

        /*
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        */
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
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['ru', 'ua'],
            'enableDefaultLanguageUrlCode' => false,
            'enableLanguagePersistence' => false,
            'enableLanguageDetection' => false,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'suffix' => '/',
            'normalizer' => [
                'class' => 'yii\web\UrlNormalizer',
                'action' => yii\web\UrlNormalizer::ACTION_REDIRECT_PERMANENT,
            ],
            'rules' => [
                '/' => 'site/index',
                'documents' => 'site/documents',
                'phone-numbers' => 'site/phone-numbers',
                'rates/<addr:\w+>' => 'site/rates',
                'rates' => 'site/rates',
                'contacts' => 'site/contacts',
                'finished-build' => 'site/finished-build',
                'in-build' => 'site/in-build',
                'news/<title:(\w+\-)+\d+>' => 'site/news',
                'news' => 'site/news',
                'about/<part:(phone|tablet)>/<id:\d+>/<color:(red|black)>/<idcolor:\d+>' => 'site/about',
                'about/<part:(phone|tablet)>/<id:\d+>' => 'site/about',
                'about' => 'site/about',
            ]
        ],

        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/i18n',
                    'sourceLanguage' => 'ru',
                ],
                'menu' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/i18n',
                    'sourceLanguage' => 'ru',
                ],
                'userformmsg' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/i18n',
                    'sourceLanguage' => 'ru',
                ],
            ]
        ],

        /*'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'suffix' => '/',
            'normalizer' => [
                'class' => 'yii\web\UrlNormalizer',
                'action' => yii\web\UrlNormalizer::ACTION_REDIRECT_PERMANENT,
            ],
            'rules' => [
            ],
        ],*/
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
        'datecontrol' =>  [
            'class' => 'kartik\datecontrol\Module',
            'displaySettings' => [
                Module::FORMAT_DATE => 'yyyy-M-dd',
                Module::FORMAT_TIME => 'php: H:i',
                Module::FORMAT_DATETIME => 'php: d-M-Y H:i',
            ],
            'saveSettings' => [
                Module::FORMAT_DATE => 'yyyy-M-dd',
                Module::FORMAT_TIME => 'H:i:s',
                Module::FORMAT_DATETIME => 'yyyy-mm-dd H:i:s',
            ],
            'displayTimezone' => 'Europe/Kiev',
            'saveTimezone' => 'Europe/Kiev',
            'autoWidget' => true,
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
