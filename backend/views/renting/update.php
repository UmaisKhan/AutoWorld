<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Renting */

$this->title = 'Update Renting: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rentings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="renting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
