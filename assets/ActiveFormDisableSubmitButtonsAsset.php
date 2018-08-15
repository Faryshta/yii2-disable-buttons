<?php
namespace faryshta\assets;

use yii\web\AssetBundle;

/**
 * @author Angel (Guevara) López <angeldelcaos@gmail.com>
 */
class ActiveFormDisableSubmitButtonsAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = "@vendor/faryshta/yii2-disable-submit-buttons/js";

    /**
     * @inheritdoc
     */
    public $js = [
        YII_ENV_DEV ? 'disable-submit-buttons.js' : 'disable-submit-buttons.min.js'
    ];

    /**
     * @inheritdoc
     */
    public $depends = ['yii\\web\\JqueryAsset'];
}
