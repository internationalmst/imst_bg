<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => YII_ENV == 'dev' ? 'mysql:host=localhost;dbname=imst_bg' : 'mysql:host=localhost;dbname=teamltde_db',
    'username' => YII_ENV == 'dev' ? 'root' : 'teamltde_db_user',
    'password' => YII_ENV == 'dev' ? 'root' : 'TuJY*?!Vd;a!',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
