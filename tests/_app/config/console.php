<?php

use yii\console\controllers;

return yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/common.php',
    [
        'id' => 'yii2-test-console',
        'components' => [
            'log' => null,
            'cache' => null,
        ],
        'controllerMap' => [
            'serve' => [
                'class' => controllers\ServeController::class,
                'docroot' => '@app',
            ],
        ],
    ]
);
