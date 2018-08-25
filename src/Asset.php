<?php

namespace faryshta\disableSubmitButtons;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * @author Angel (Guevara) López <angeldelcaos@gmail.com>
 */
class Asset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = __DIR__ . '/js';

    /**
     * @inheritdoc
     */
    public $js = ['disable-submit-buttons.js',];

    /**
     * @inheritdoc
     */
    public $depends = [JqueryAsset::class];
}
