<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Reward;

/**
 * RewardSearch represents the model behind the search form of `frontend\models\Reward`.
 */
class RewardSearch extends Reward
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['r_id', 'c_id', 'r_pledge_amt', 'r_limit_availability'], 'integer'],
            [['r_title', 'r_description', 'r_delivery_date', 'r_shipping_details'], 'safe'],
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
        $query = Reward::find();

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
            'r_id' => $this->r_id,
            'c_id' => $this->c_id,
            'r_pledge_amt' => $this->r_pledge_amt,
            'r_delivery_date' => $this->r_delivery_date,
            'r_limit_availability' => $this->r_limit_availability,
        ]);

        $query->andFilterWhere(['like', 'r_title', $this->r_title])
            ->andFilterWhere(['like', 'r_description', $this->r_description])
            ->andFilterWhere(['like', 'r_shipping_details', $this->r_shipping_details]);

        return $dataProvider;
    }
}
