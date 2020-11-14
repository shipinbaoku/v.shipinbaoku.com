<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Actor;

/**
 * ActorSearch represents the model behind the search form of `common\models\Actor`.
 */
class ActorSearch extends Actor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['actor_id', 'type_id', 'type_id_1', 'actor_status', 'actor_lock', 'actor_level', 'actor_time', 'actor_time_add', 'actor_time_hits', 'actor_time_make', 'actor_hits', 'actor_hits_day', 'actor_hits_week', 'actor_hits_month', 'actor_score_all', 'actor_score_num', 'actor_up', 'actor_down'], 'integer'],
            [['actor_name', 'actor_en', 'actor_alias', 'actor_letter', 'actor_sex', 'actor_color', 'actor_pic', 'actor_blurb', 'actor_remarks', 'actor_area', 'actor_height', 'actor_weight', 'actor_birthday', 'actor_birtharea', 'actor_blood', 'actor_starsign', 'actor_school', 'actor_works', 'actor_tag', 'actor_class', 'actor_tpl', 'actor_jumpurl', 'actor_content'], 'safe'],
            [['actor_score'], 'number'],
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
        $query = Actor::find();

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
            'actor_id' => $this->actor_id,
            'type_id' => $this->type_id,
            'type_id_1' => $this->type_id_1,
            'actor_status' => $this->actor_status,
            'actor_lock' => $this->actor_lock,
            'actor_level' => $this->actor_level,
            'actor_time' => $this->actor_time,
            'actor_time_add' => $this->actor_time_add,
            'actor_time_hits' => $this->actor_time_hits,
            'actor_time_make' => $this->actor_time_make,
            'actor_hits' => $this->actor_hits,
            'actor_hits_day' => $this->actor_hits_day,
            'actor_hits_week' => $this->actor_hits_week,
            'actor_hits_month' => $this->actor_hits_month,
            'actor_score' => $this->actor_score,
            'actor_score_all' => $this->actor_score_all,
            'actor_score_num' => $this->actor_score_num,
            'actor_up' => $this->actor_up,
            'actor_down' => $this->actor_down,
        ]);

        $query->andFilterWhere(['like', 'actor_name', $this->actor_name])
            ->andFilterWhere(['like', 'actor_en', $this->actor_en])
            ->andFilterWhere(['like', 'actor_alias', $this->actor_alias])
            ->andFilterWhere(['like', 'actor_letter', $this->actor_letter])
            ->andFilterWhere(['like', 'actor_sex', $this->actor_sex])
            ->andFilterWhere(['like', 'actor_color', $this->actor_color])
            ->andFilterWhere(['like', 'actor_pic', $this->actor_pic])
            ->andFilterWhere(['like', 'actor_blurb', $this->actor_blurb])
            ->andFilterWhere(['like', 'actor_remarks', $this->actor_remarks])
            ->andFilterWhere(['like', 'actor_area', $this->actor_area])
            ->andFilterWhere(['like', 'actor_height', $this->actor_height])
            ->andFilterWhere(['like', 'actor_weight', $this->actor_weight])
            ->andFilterWhere(['like', 'actor_birthday', $this->actor_birthday])
            ->andFilterWhere(['like', 'actor_birtharea', $this->actor_birtharea])
            ->andFilterWhere(['like', 'actor_blood', $this->actor_blood])
            ->andFilterWhere(['like', 'actor_starsign', $this->actor_starsign])
            ->andFilterWhere(['like', 'actor_school', $this->actor_school])
            ->andFilterWhere(['like', 'actor_works', $this->actor_works])
            ->andFilterWhere(['like', 'actor_tag', $this->actor_tag])
            ->andFilterWhere(['like', 'actor_class', $this->actor_class])
            ->andFilterWhere(['like', 'actor_tpl', $this->actor_tpl])
            ->andFilterWhere(['like', 'actor_jumpurl', $this->actor_jumpurl])
            ->andFilterWhere(['like', 'actor_content', $this->actor_content]);

        return $dataProvider;
    }
}
