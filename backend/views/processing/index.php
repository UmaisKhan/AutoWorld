<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProcessingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Processings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="processing-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Processing', ['create'], ['class' => 'btn btn-success']) ?>
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
