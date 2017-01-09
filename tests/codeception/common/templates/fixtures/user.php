<?php
/**
 * @var $faker \Faker\Generator
 * @var $index integer
 */

$security = Yii::$app->getSecurity();

return [
    'username' => $faker->userName,
    'email' => $faker->email,
    'authKey' => $security->generateRandomString(),
    'passwordHash' => $security->generatePasswordHash('password_' . $index),
    'passwordResetToken' => $security->generateRandomString() . '_' . time(),
    'created_at' => time(),
    'updated_at' => time(),
];
