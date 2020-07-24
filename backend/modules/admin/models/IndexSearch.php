<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\index;

/**
 * IndexSearch represents the model behind the search form of `app\modules\admin\models\index`.
 */
class IndexSearch extends index
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'text1', 'text2', 'minititle1', 'info1', 'Image1', 'minititle2', 'info2', 'Image2', 'minititle3', 'info3', 'Image3'], 'safe'],
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
        $query = index::find();

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

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'text1', $this->text1])
            ->andFilterWhere(['like', 'text2', $this->text2])
            ->andFilterWhere(['like', 'minititle1', $this->minititle1])
            ->andFilterWhere(['like', 'info1', $this->info1])
            ->andFilterWhere(['like', 'Image1', $this->Image1])
            ->andFilterWhere(['like', 'minititle2', $this->minititle2])
            ->andFilterWhere(['like', 'info2', $this->info2])
            ->andFilterWhere(['like', 'Image2', $this->Image2])
            ->andFilterWhere(['like', 'minititle3', $this->minititle3])
            ->andFilterWhere(['like', 'info3', $this->info3])
            ->andFilterWhere(['like', 'Image3', $this->Image3]);

        return $dataProvider;
    }
}
