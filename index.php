<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

define('COMPANY_THEME', 'cafe');// change when install
define('COMPANY_DB', 'trading-test');// change when install

$rootDir = __DIR__ . '/../core/';

require($rootDir . 'vendor/autoload.php');
require($rootDir . 'vendor/yiisoft/yii2/Yii.php');

$config = require($rootDir . 'config/web.php');

$config['params']['companyId'] = 1;// change when install

(new yii\web\Application($config))->run();
