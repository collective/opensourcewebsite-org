<?php

return [
    [
        'id' => 100,
        'username' => 'admin',
        'auth_key' => 'test100key',
        'password_hash' => Yii::$app->security->generatePasswordHash('admin'),
        'status' => 10,
        'created_at' => time(),
        'updated_at' => time(),
        'last_activity_at' => time(),
    ],
    [
        'id' => 101,
        'username' => 'webmaster',
        'auth_key' => 'test101key',
        'password_hash' => Yii::$app->security->generatePasswordHash('webmaster'),
        'status' => 10,
        'created_at' => time(),
        'updated_at' => time(),
        'last_activity_at' => time(),
    ],
    [
        'id' => 102,
        'username' => 'newuser',
        'auth_key' => 'test102key',
        'password_hash' => Yii::$app->security->generatePasswordHash('newuser'),
        'status' => 10,
        'created_at' => time(),
        'updated_at' => time(),
        'last_activity_at' => time(),
    ],
    [
        'id' => 103,
        'username' => 'testuser',
        'auth_key' => 'test103key',
        'password_hash' => Yii::$app->security->generatePasswordHash('testuser'),
        'status' => 10,
        'created_at' => time(),
        'updated_at' => time(),
        'last_activity_at' => time(),
    ],
];
