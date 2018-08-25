<?php

return yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/test.php',
    [
        'id' => 'yii2-disable-submit-buttons-demo',
        'bootstrap' => ['debug'],
        'aliases' => [
            '@vendor' => VENDOR_DIR,
            '@bower' => VENDOR_DIR . '/bower-asset',
        ],
        'modules' => [
            'debug' => [
                'class' => yii\debug\Module::class,
            ],
        ],
        'components' => [
            'assetManager' => [
               'basePath' => dirname(__DIR__) . '/assets',
           ],
       ],
    ]
);
