<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\VodDetail;

/**
 * VodDetailSearch represents the model behind the search form of `common\models\VodDetail`.
 */
class VodDetailSearch extends VodDetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'vod_status', 'vod_pubdate', 'vod_hits', 'vod_hits_day', 'vod_hits_week', 'vod_hits_month', 'vod_up', 'vod_down', 'vod_score_all', 'vod_score_num', 'vod_create_time', 'vod_update_time', 'vod_lately_hit_time'], 'integer'],
            [['url', 'url_id', 'vod_title', 'vod_sub_title', 'vod_blurb', 'vod_content', 'vod_type', 'vod_class', 'vod_tag', 'vod_pic_url', 'vod_pic_path', 'vod_pic_thumb', 'vod_actor', 'vod_director', 'vod_writer', 'vod_remarks', 'vod_area', 'vod_lang', 'vod_year'], 'safe'],
            [['vod_score'], 'number'],
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
        $query = VodDetail::find();

        // add conditions that should always apply here
        //$query->where(['not','vod_type = 伦理片']);
        $query->where(['not', ['vod_type' => '伦理片']]);
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 20],
            'sort' => [
                'defaultOrder' => ['vod_update_time' => SORT_DESC],
//                'attributes' => ['id', 'title'],
            ],
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
            'vod_status' => $this->vod_status,
            'vod_pubdate' => $this->vod_pubdate,
            'vod_hits' => $this->vod_hits,
            'vod_hits_day' => $this->vod_hits_day,
            'vod_hits_week' => $this->vod_hits_week,
            'vod_hits_month' => $this->vod_hits_month,
            'vod_up' => $this->vod_up,
            'vod_down' => $this->vod_down,
            'vod_score' => $this->vod_score,
            'vod_score_all' => $this->vod_score_all,
            'vod_score_num' => $this->vod_score_num,
            'vod_create_time' => $this->vod_create_time,
            'vod_update_time' => $this->vod_update_time,
            'vod_lately_hit_time' => $this->vod_lately_hit_time,
        ]);

        $query->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'url_id', $this->url_id])
            ->andFilterWhere(['like', 'vod_title', $this->vod_title])
            ->andFilterWhere(['like', 'vod_sub_title', $this->vod_sub_title])
            ->andFilterWhere(['like', 'vod_blurb', $this->vod_blurb])
            ->andFilterWhere(['like', 'vod_content', $this->vod_content])
            ->andFilterWhere(['like', 'vod_type', $this->vod_type])
            ->andFilterWhere(['like', 'vod_class', $this->vod_class])
            ->andFilterWhere(['like', 'vod_tag', $this->vod_tag])
            ->andFilterWhere(['like', 'vod_pic_url', $this->vod_pic_url])
            ->andFilterWhere(['like', 'vod_pic_path', $this->vod_pic_path])
            ->andFilterWhere(['like', 'vod_pic_thumb', $this->vod_pic_thumb])
            ->andFilterWhere(['like', 'vod_actor', $this->vod_actor])
            ->andFilterWhere(['like', 'vod_director', $this->vod_director])
            ->andFilterWhere(['like', 'vod_writer', $this->vod_writer])
            ->andFilterWhere(['like', 'vod_remarks', $this->vod_remarks])
            ->andFilterWhere(['like', 'vod_area', $this->vod_area])
            ->andFilterWhere(['like', 'vod_lang', $this->vod_lang])
            ->andFilterWhere(['like', 'vod_year', $this->vod_year]);

        return $dataProvider;
    }
}
