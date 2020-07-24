<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Lesson;

/**
 * LessonSearch represents the model behind the search form of `app\modules\admin\models\Lesson`.
 */
class LessonSearch extends Lesson
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Title', 'NumberLesson', 'Data', 'Professor', 'AboutProfessor', 'AboutKurs', 'InfoLesson', 'VideoURL', 'Attention'], 'safe'],
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
        $query = Lesson::find();

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

        $query->andFilterWhere(['like', 'Title', $this->Title])
            ->andFilterWhere(['like', 'NumberLesson', $this->NumberLesson])
            ->andFilterWhere(['like', 'Data', $this->Data])
            ->andFilterWhere(['like', 'Professor', $this->Professor])
            ->andFilterWhere(['like', 'AboutProfessor', $this->AboutProfessor])
            ->andFilterWhere(['like', 'AboutKurs', $this->AboutKurs])
            ->andFilterWhere(['like', 'InfoLesson', $this->InfoLesson])
            ->andFilterWhere(['like', 'VideoURL', $this->VideoURL])
            ->andFilterWhere(['like', 'Attention', $this->Attention]);

        return $dataProvider;
    }
}
