<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pagetexts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pagetexts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'head_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'head_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subhead_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subhead_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descr_ua')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sdescr_ru')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
