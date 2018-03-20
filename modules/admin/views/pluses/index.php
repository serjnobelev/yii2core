<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlusesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pluses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pluses-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pluses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title_ua',
            'text_ua',
            'title_ru',
            'text_ru',
            //'image',
            //'number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
