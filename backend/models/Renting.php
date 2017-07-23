<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "renting".
 *
 * @property integer $id
 * @property string $customer_name
 * @property string $car_name
 * @property integer $rent_per_day
 * @property string $car_reg_no
 * @property integer $days_on_rent
 */
class Renting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'renting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_name', 'car_name', 'rent_per_day', 'car_reg_no', 'days_on_rent'], 'required'],
            [['rent_per_day', 'days_on_rent'], 'integer'],
            [['customer_name', 'car_name'], 'string', 'max' => 50],
            [['car_reg_no'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_name' => 'Customer Name',
            'car_name' => 'Car Name',
            'rent_per_day' => 'Rent Per Day',
            'car_reg_no' => 'Car Reg No',
            'days_on_rent' => 'Days On Rent',
        ];
    }
}
