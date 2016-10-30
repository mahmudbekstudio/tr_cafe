<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

define('COMPANY_THEME', 'cafe');// change when install
define('COMPANY_DB', 'trading-test');// change when install
define('COMPANY_DBHOST', 'localhost');// change when install
define('COMPANY_DBUSER', 'root');// change when install
define('COMPANY_DBPASS', '');// change when install
define('COMPANY_DBTABLEPREFIX', 'trade_');// change when install

$rootDir = __DIR__ . '/../core/';// change when install

require($rootDir . 'vendor/autoload.php');
require($rootDir . 'vendor/yiisoft/yii2/Yii.php');

$config = require($rootDir . 'config/web.php');

$config['params']['companyId'] = 1;// change when install

(new yii\web\Application($config))->run();
