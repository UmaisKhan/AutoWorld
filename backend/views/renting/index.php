<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RentingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rentings';
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">
    
    body{
    background-color: #F2F2F2;
    color: #000;
}

</style>

<div class="renting-index" align="center">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Renting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'customer_name',
            'car_name',
            'rent_per_day',
            'car_reg_no',
            // 'days_on_rent',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
