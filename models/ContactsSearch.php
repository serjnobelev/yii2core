<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contacts;

/**
 * ContactsSearch represents the model behind the search form of `app\models\Contacts`.
 */
class ContactsSearch extends Contacts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'phone_city_link', 'phone_kyivstar_link', 'phone_vodafone_link', 'phone_supply_link'], 'integer'],
            [['sales_addr_ru', 'sales_addr_ua', 'phone_city', 'phone_kyivstar', 'phone_vodafone', 'schedule1_ru', 'schedule1_ua', 'schedule2_ru', 'schedule2_ua', 'phone_supply', 'facebook', 'instagram', 'viber'], 'safe'],
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
        $query = Contacts::find();

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
            'phone_city_link' => $this->phone_city_link,
            'phone_kyivstar_link' => $this->phone_kyivstar_link,
            'phone_vodafone_link' => $this->phone_vodafone_link,
            'phone_supply_link' => $this->phone_supply_link,
        ]);

        $query->andFilterWhere(['like', 'sales_addr_ru', $this->sales_addr_ru])
            ->andFilterWhere(['like', 'sales_addr_ua', $this->sales_addr_ua])
            ->andFilterWhere(['like', 'phone_city', $this->phone_city])
            ->andFilterWhere(['like', 'phone_kyivstar', $this->phone_kyivstar])
            ->andFilterWhere(['like', 'phone_vodafone', $this->phone_vodafone])
            ->andFilterWhere(['like', 'schedule1_ru', $this->schedule1_ru])
            ->andFilterWhere(['like', 'schedule1_ua', $this->schedule1_ua])
            ->andFilterWhere(['like', 'schedule2_ru', $this->schedule2_ru])
            ->andFilterWhere(['like', 'schedule2_ua', $this->schedule2_ua])
            ->andFilterWhere(['like', 'phone_supply', $this->phone_supply])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'instagram', $this->instagram])
            ->andFilterWhere(['like', 'viber', $this->viber]);

        return $dataProvider;
    }
}
