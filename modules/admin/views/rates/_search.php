<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RatesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rates-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'addrLink') ?>

    <?= $form->field($model, 'addr_ru') ?>

    <?= $form->field($model, 'addr_ua') ?>

    <?= $form->field($model, 'floor_rates') ?>

    <?php // echo $form->field($model, 'another_rates') ?>

    <?php // echo $form->field($model, 'with_meters') ?>

    <?php // echo $form->field($model, 'without_meters') ?>

    <?php // echo $form->field($model, 'watter') ?>

    <?php // echo $form->field($model, 'drainage') ?>

    <?php // echo $form->field($model, 'apartment') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
