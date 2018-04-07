<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContactsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Contacts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sales_addr_ru',
            'sales_addr_ua',
            'phone_city',
            'phone_city_link',
            //'phone_kyivstar',
            //'phone_kyivstar_link',
            //'phone_vodafone',
            //'phone_vodafone_link',
            //'schedule1_ru',
            //'schedule1_ua',
            //'schedule2_ru',
            //'schedule2_ua',
            //'phone_supply',
            //'phone_supply_link',
            //'facebook',
            //'instagram',
            //'viber',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
