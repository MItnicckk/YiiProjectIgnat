<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Kurs;

/**
 * KursSearch represents the model behind the search form of `app\modules\admin\models\Kurs`.
 */
class KursSearch extends Kurs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Price'], 'integer'],
            [['Headline', 'Text', 'TitleKurs', 'PodTitleKu', 'TextKu', 'TitleKonsult', 'PodTitleKo', 'TextKo', 'TitleDZ', 'PodTitleDZ', 'TextDZ'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Kurs::find();

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
            'Price' => $this->Price,
        ]);

        $query->andFilterWhere(['like', 'Headline', $this->Headline])
            ->andFilterWhere(['like', 'Text', $this->Text])
            ->andFilterWhere(['like', 'TitleKurs', $this->TitleKurs])
            ->andFilterWhere(['like', 'PodTitleKu', $this->PodTitleKu])
            ->andFilterWhere(['like', 'TextKu', $this->TextKu])
            ->andFilterWhere(['like', 'TitleKonsult', $this->TitleKonsult])
            ->andFilterWhere(['like', 'PodTitleKo', $this->PodTitleKo])
            ->andFilterWhere(['like', 'TextKo', $this->TextKo])
            ->andFilterWhere(['like', 'TitleDZ', $this->TitleDZ])
            ->andFilterWhere(['like', 'PodTitleDZ', $this->PodTitleDZ])
            ->andFilterWhere(['like', 'TextDZ', $this->TextDZ]);

        return $dataProvider;
    }
}
