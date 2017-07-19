<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use backend\models\Customer;
use backend\models\Car;
/* @var $this yii\web\View */
/* @var $model backend\models\Processing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="processing-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'id')->dropDownlist(
            ArrayHelper::map(Customer::find()->all(),'id','name'),['prompt'=>"Select Customer"])?>

    <?= $form->field($model, 'id')->dropDownlist(
            ArrayHelper::map(Car::find()->all(),'reg_no','name'),['prompt'=>"Select Car"])?>

    <?= $form->field($model, 'rent_per_day')->textInput() ?>

    <?= $form->field($model, 'car_reg_no')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
