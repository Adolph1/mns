<?php

namespace backend\modules\customers\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\customers\models\Customer;

/**
 * CustomerSearch represents the model behind the search form about `backend\modules\customers\models\Customer`.
 */
class CustomerSearch extends Customer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_no', 'liability_number', 'branch_code', 'mode_no'], 'integer'],
            [['customer_type', 'customer_name', 'customer_address', 'customer_identification', 'identification_number', 'identification_exp_date', 'nationality', 'short_name', 'customer_category', 'record_stat', 'auth_stat', 'maker_id', 'maker_dt_stamp', 'checker_id', 'checker_dt_stamp', 'currency'], 'safe'],
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
        $query = Customer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'customer_no' => $this->customer_no,
            'liability_number' => $this->liability_number,
            'branch_code' => $this->branch_code,
            'mode_no' => $this->mode_no,
        ]);

        $query->andFilterWhere(['like', 'customer_type', $this->customer_type])
            ->andFilterWhere(['like', 'customer_name', $this->customer_name])
            ->andFilterWhere(['like', 'customer_address', $this->customer_address])
            ->andFilterWhere(['like', 'customer_identification', $this->customer_identification])
            ->andFilterWhere(['like', 'identification_number', $this->identification_number])
            ->andFilterWhere(['like', 'identification_exp_date', $this->identification_exp_date])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'short_name', $this->short_name])
            ->andFilterWhere(['like', 'customer_category', $this->customer_category])
            ->andFilterWhere(['like', 'record_stat', $this->record_stat])
            ->andFilterWhere(['like', 'auth_stat', $this->auth_stat])
            ->andFilterWhere(['like', 'maker_id', $this->maker_id])
            ->andFilterWhere(['like', 'maker_dt_stamp', $this->maker_dt_stamp])
            ->andFilterWhere(['like', 'checker_id', $this->checker_id])
            ->andFilterWhere(['like', 'checker_dt_stamp', $this->checker_dt_stamp])
            ->andFilterWhere(['like', 'currency', $this->currency]);

        return $dataProvider;
    }
}
