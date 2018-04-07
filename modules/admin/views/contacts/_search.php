<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContactsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sales_addr_ru') ?>

    <?= $form->field($model, 'sales_addr_ua') ?>

    <?= $form->field($model, 'phone_city') ?>

    <?= $form->field($model, 'phone_city_link') ?>

    <?php // echo $form->field($model, 'phone_kyivstar') ?>

    <?php // echo $form->field($model, 'phone_kyivstar_link') ?>

    <?php // echo $form->field($model, 'phone_vodafone') ?>

    <?php // echo $form->field($model, 'phone_vodafone_link') ?>

    <?php // echo $form->field($model, 'schedule1_ru') ?>

    <?php // echo $form->field($model, 'schedule1_ua') ?>

    <?php // echo $form->field($model, 'schedule2_ru') ?>

    <?php // echo $form->field($model, 'schedule2_ua') ?>

    <?php // echo $form->field($model, 'phone_supply') ?>

    <?php // echo $form->field($model, 'phone_supply_link') ?>

    <?php // echo $form->field($model, 'facebook') ?>

    <?php // echo $form->field($model, 'instagram') ?>

    <?php // echo $form->field($model, 'viber') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
