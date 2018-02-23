<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\UserForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-user">
    <h1><?= 'UserForm'; ?></h1>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'], 'id' => 'user-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]); ?>

                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'your@email.com']); ?>

                    <?= $form->field($model, 'about')->textarea()->hint('Данные о себе'); ?>

                    <?= $form->field($model, 'password'); ?>

                    <?= $form->field($model, 'photo')->fileInput(); ?>

                <?= $form->field($model, 'isAdmin')->checkbox([
                    'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
</div>
