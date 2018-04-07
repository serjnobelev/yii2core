<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sales_addr_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sales_addr_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_city_link')->textInput() ?>

    <?= $form->field($model, 'phone_kyivstar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_kyivstar_link')->textInput() ?>

    <?= $form->field($model, 'phone_vodafone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_vodafone_link')->textInput() ?>

    <?= $form->field($model, 'schedule1_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'schedule1_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'schedule2_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'schedule2_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_supply')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_supply_link')->textInput() ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'viber')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
