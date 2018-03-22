<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pluses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pluses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number')->dropDownList(
        [1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'],
        ['prompt' => 'Номер позиции']
    ) ?>

    <?= $form->field($model, 'title_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_ru')->textInput(['maxlength' => true]) ?>

    <?php if($model->getImage()) echo Html::img($model->getImage(), ['width' => 200]) ?>

    <?= $form->field($image, 'image')->fileInput(['maxlength' => true]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
