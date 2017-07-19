<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $nic
 * @property string $name
 * @property string $address
 * @property string $contact
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nic', 'name', 'address', 'contact'], 'required'],
            [['id'], 'integer'],
            [['address'], 'string'],
            [['nic', 'name', 'contact'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nic' => 'Nic',
            'name' => 'Name',
            'address' => 'Address',
            'contact' => 'Contact',
        ];
    }
}
