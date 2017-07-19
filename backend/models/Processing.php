<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "processing".
 *
 * @property integer $id
 * @property string $customer_name
 * @property string $car_name
 * @property integer $rent_per_day
 * @property string $car_reg_no
 */
class Processing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'processing';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_name', 'car_name', 'rent_per_day', 'car_reg_no'], 'required'],
            [['rent_per_day'], 'integer'],
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
        ];
    }
}
