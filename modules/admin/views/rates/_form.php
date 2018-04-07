<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rates-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'addrLink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addr_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addr_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'floor_rates')->textInput() ?>

    <?= $form->field($model, 'another_rates')->textInput() ?>

    <?= $form->field($model, 'with_meters')->textInput() ?>

    <?= $form->field($model, 'without_meters')->textInput() ?>

    <?= $form->field($model, 'watter')->textInput() ?>

    <?= $form->field($model, 'drainage')->textInput() ?>

    <?= $form->field($model, 'apartment')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
