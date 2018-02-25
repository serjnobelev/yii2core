<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <h1><?= Yii::t('app', 'Отмена') ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <?php
    echo DetailView::widget([
        'model' => $count,
        'attributes' => [
            'title',
        'description',
        ]
    ]);
    ?>
</div>
