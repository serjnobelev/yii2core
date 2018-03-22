<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pluses */

$this->title = 'Update Pluses: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Pluses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pluses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'image' => $image,
    ]) ?>

</div>
