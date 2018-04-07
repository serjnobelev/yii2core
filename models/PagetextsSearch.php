<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pagetexts;

/**
 * PagetextsSearch represents the model behind the search form of `app\models\Pagetexts`.
 */
class PagetextsSearch extends Pagetexts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['page', 'head_ua', 'head_ru', 'subhead_ua', 'subhead_ru', 'descr_ua', 'descr_ru'], 'safe'],
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
        $query = Pagetexts::find();

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
        ]);

        $query->andFilterWhere(['like', 'page', $this->page])
            ->andFilterWhere(['like', 'head_ua', $this->head_ua])
            ->andFilterWhere(['like', 'head_ru', $this->head_ru])
            ->andFilterWhere(['like', 'subhead_ua', $this->subhead_ua])
            ->andFilterWhere(['like', 'subhead_ru', $this->subhead_ru])
            ->andFilterWhere(['like', 'descr_ua', $this->descr_ua])
            ->andFilterWhere(['like', 'descr_ru', $this->descr_ru]);

        return $dataProvider;
    }
}
