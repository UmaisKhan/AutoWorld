<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Renting */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rentings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="renting-view">

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
            'customer_name',
            'car_name',
            'rent_per_day',
            'car_reg_no',
            'days_on_rent',
        ],
    ]) ?>

</div>
