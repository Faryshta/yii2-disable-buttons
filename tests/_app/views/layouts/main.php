<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $content string */

if (!$this->title) {
    $this->title = 'Demo Disable Submit Buttons';
}

$this->beginPage();

?><!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8"/>
<title><?= Html::encode($this->title) ?></title>
<?php
$this->head();
$this->beginBody();
?>
    <h1><?= $this->title ?></h1>
    <?= $content ?>
<?php
$this->endBody();
$this->endPage();
?>
