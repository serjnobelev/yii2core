<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pluses */

$this->title = 'Create Pluses';
$this->params['breadcrumbs'][] = ['label' => 'Pluses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pluses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
