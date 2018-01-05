<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Fund;

/**
 * FundSearch represents the model behind the search form about `frontend\models\Fund`.
 */
class FundSearch extends Fund
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fund_id', 'fund_c_id', 'fund_user_id'], 'integer'],
            [['fund_amt'], 'number'],
            [['fund_note'], 'safe'],
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
        $query = Fund::find();

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
            'fund_id' => $this->fund_id,
            'fund_c_id' => $this->fund_c_id,
            'fund_user_id' => $this->fund_user_id,
            'fund_amt' => $this->fund_amt,
        ]);

        $query->andFilterWhere(['like', 'fund_note', $this->fund_note]);

        return $dataProvider;
    }
}
