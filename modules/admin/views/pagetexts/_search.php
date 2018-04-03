<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PagetextsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pagetexts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'head_ua') ?>

    <?= $form->field($model, 'head_ru') ?>

    <?= $form->field($model, 'subhead_ua') ?>

    <?= $form->field($model, 'subhead_ru') ?>

    <?php // echo $form->field($model, 'descr_ua') ?>

    <?php // echo $form->field($model, 'sdescr_ru') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>