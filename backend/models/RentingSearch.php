<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Renting;

/**
 * RentingSearch represents the model behind the search form about `backend\models\Renting`.
 */
class RentingSearch extends Renting
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rent_per_day', 'days_on_rent'], 'integer'],
            [['customer_name', 'car_name', 'car_reg_no'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Renting::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'rent_per_day' => $this->rent_per_day,
            'days_on_rent' => $this->days_on_rent,
        ]);

        $query->andFilterWhere(['like', 'customer_name', $this->customer_name])
            ->andFilterWhere(['like', 'car_name', $this->car_name])
            ->andFilterWhere(['like', 'car_reg_no', $this->car_reg_no]);

        return $dataProvider;
    }
}
