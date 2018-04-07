<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PagetextsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pagetexts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagetexts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pagetexts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'page',
            'head_ua',
            'head_ru',
            'subhead_ua',
            //'subhead_ru',
            //'descr_ua:ntext',
            //'descr_ru:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
