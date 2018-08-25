<?php

require dirname(__DIR__) . '/_bootstrap.php';

(new yii\web\Application(require __DIR__ . '/config/web.php'))->run();
