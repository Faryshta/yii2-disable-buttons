<?php

use faryshta\disableSubmitButtons\Asset as DissableSubmitButtonsAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

DissableSubmitButtonsAsset::register($this);

if ($model->name && !$model->hasErrors()) {
    echo Html::tag('h2', 'Hello ' . $model->name);
}

echo Html::tag('p', 'Normal Active Form');

$form = ActiveForm::begin([
    'options' => ['class' => 'disable-submit-buttons'],
]);
    echo $form->field($model, 'name');

    echo Html::submitButton('Submit', [
        'data' => ['disabled-text' => 'Validating'],
    ]);

$form->end();

echo Html::tag('p', 'Ajax Active Form');

$form = ActiveForm::begin([
    'id' => 'ajax-form',
    'options' => ['class' => 'disable-submit-buttons'],
]);
    echo $form->field($model, 'name');

    echo Html::submitButton('Submit', [
        'data' => ['disabled-text' => 'Validating'],
    ]);

$form->end();

$js = <<<'JAVASCRIPT'
$('#ajax-form').on('beforeSubmit', function () {
  var $yiiform = $(this);
  $.ajax(
    {
      type: $yiiform.attr('method'),
      url: $yiiform.attr('action'),
      data: $yiiform.serializeArray(),
    }
  ).done(function(data) {
    alert('Information Received');
    $yiiform.enableSubmitButtons();
  });

  return false; // prevent default form submission
});
JAVASCRIPT;

$this->registerJS($js);
