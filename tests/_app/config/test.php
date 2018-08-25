<?php

use app\api\modules\Obsolete;
use app\api\modules\Version;
use app\models\User;
use tecnocen\roa\modules\ApiVersion;
use tecnocen\roa\urlRules\SingleRecord;

return yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/common.php',
    [
        'id' => 'yii2-disable-submit-buttons-tests',
        'components' => [
            'mailer' => [
                'useFileTransport' => true,
            ],
            'request' => [
                'cookieValidationKey' => 'test',
                'enableCsrfValidation' => false,
            ],
        ],
        'params' => [],
    ]
);
