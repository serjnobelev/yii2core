<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlusesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pluses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title_ua') ?>

    <?= $form->field($model, 'text_ua') ?>

    <?= $form->field($model, 'title_ru') ?>

    <?= $form->field($model, 'text_ru') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
