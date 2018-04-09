<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->widget(DateControl::className(), []) ?>

    <?= $form->field($model, 'time')->widget(DateControl::className(), [
        'type' => DateControl::FORMAT_TIME
    ]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_ru')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'basic',
            'inline' => false,
        ],
    ]); ?>

    <?= $form->field($model, 'text_ua')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'basic',
            'inline' => false,
        ],
    ]); ?>

    <?= $form->field($image, 'image')->fileInput(); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
