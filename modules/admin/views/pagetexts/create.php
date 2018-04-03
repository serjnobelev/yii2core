<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pagetexts */

$this->title = 'Create Pagetexts';
$this->params['breadcrumbs'][] = ['label' => 'Pagetexts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagetexts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
