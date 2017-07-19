<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property string $reg_no
 * @property string $name
 * @property string $make
 * @property string $color
 * @property integer $car_id
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reg_no', 'name', 'make', 'color'], 'required'],
            [['reg_no'], 'string', 'max' => 7],
            [['name', 'make', 'color'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reg_no' => 'Reg No',
            'name' => 'Name',
            'make' => 'Make',
            'color' => 'Color',
            'car_id' => 'Car ID',
        ];
    }
}
