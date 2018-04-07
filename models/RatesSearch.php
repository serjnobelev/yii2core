<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rates;

/**
 * RatesSearch represents the model behind the search form of `app\models\Rates`.
 */
class RatesSearch extends Rates
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['addrLink', 'addr_ru', 'addr_ua'], 'safe'],
            [['floor_rates', 'another_rates', 'with_meters', 'without_meters', 'watter', 'drainage', 'apartment'], 'number'],
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
        $query = Rates::find();

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
            'floor_rates' => $this->floor_rates,
            'another_rates' => $this->another_rates,
            'with_meters' => $this->with_meters,
            'without_meters' => $this->without_meters,
            'watter' => $this->watter,
            'drainage' => $this->drainage,
            'apartment' => $this->apartment,
        ]);

        $query->andFilterWhere(['like', 'addrLink', $this->addrLink])
            ->andFilterWhere(['like', 'addr_ru', $this->addr_ru])
            ->andFilterWhere(['like', 'addr_ua', $this->addr_ua]);

        return $dataProvider;
    }
}
