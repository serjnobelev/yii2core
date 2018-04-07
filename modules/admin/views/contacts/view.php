<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'sales_addr_ru',
            'sales_addr_ua',
            'phone_city',
            'phone_city_link',
            'phone_kyivstar',
            'phone_kyivstar_link',
            'phone_vodafone',
            'phone_vodafone_link',
            'schedule1_ru',
            'schedule1_ua',
            'schedule2_ru',
            'schedule2_ua',
            'phone_supply',
            'phone_supply_link',
            'facebook',
            'instagram',
            'viber',
        ],
    ]) ?>

</div>
