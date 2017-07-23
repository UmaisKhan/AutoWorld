<?php


use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Customer;
use backend\models\Car;
/* @var $this yii\web\View */
/* @var $model backend\models\Renting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="renting-form">

    <?php $form = ActiveForm::begin(); ?>

   

     <?= $form->field($model, 'customer_name')->dropDownlist(
            ArrayHelper::map(Customer::find()->all(),'name','name'),['prompt'=>"Select Customer"])?>

    <?= $form->field($model, 'car_name')->dropDownlist(
            ArrayHelper::map(Car::find()->all(),'name','name'),['prompt'=>"Select Car"])?>

    <?= $form->field($model, 'car_reg_no')->textInput(['maxlength' => true]) ?>

    

    <?= $form->field($model, 'rent_per_day')->textInput() ?>

   

    <?= $form->field($model, 'days_on_rent')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
