<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Conditions */

$this->title = 'Create Conditions';
$this->params['breadcrumbs'][] = ['label' => 'Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conditions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
