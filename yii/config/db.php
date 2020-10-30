<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => YII_ENV == 'dev' ? 'mysql:host=localhost;dbname=imst_bg' : 'mysql:host=localhost;dbname=imst_bg_db',
    'username' => YII_ENV == 'dev' ? 'root' : 'imst_bg_user',
    'password' => YII_ENV == 'dev' ? 'root' : '1M$t2018!!',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
