<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "actor".
 *
 * @property int $actor_id
 * @property int $type_id
 * @property int $type_id_1
 * @property string $actor_name
 * @property string $actor_en
 * @property string $actor_alias
 * @property int $actor_status
 * @property int $actor_lock
 * @property string $actor_letter
 * @property string $actor_sex
 * @property string $actor_color
 * @property string $actor_pic
 * @property string $actor_blurb
 * @property string $actor_remarks
 * @property string $actor_area
 * @property string $actor_height
 * @property string $actor_weight
 * @property string $actor_birthday
 * @property string $actor_birtharea
 * @property string $actor_blood
 * @property string $actor_starsign
 * @property string $actor_school
 * @property string $actor_works
 * @property string $actor_tag
 * @property string $actor_class
 * @property int $actor_level
 * @property int $actor_time
 * @property int $actor_time_add
 * @property int $actor_time_hits
 * @property int $actor_time_make
 * @property int $actor_hits
 * @property int $actor_hits_day
 * @property int $actor_hits_week
 * @property int $actor_hits_month
 * @property float $actor_score
 * @property int $actor_score_all
 * @property int $actor_score_num
 * @property int $actor_up
 * @property int $actor_down
 * @property string $actor_tpl
 * @property string $actor_jumpurl
 * @property string $actor_content
 */
class Actor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_id', 'type_id_1', 'actor_status', 'actor_lock', 'actor_level', 'actor_time', 'actor_time_add', 'actor_time_hits', 'actor_time_make', 'actor_hits', 'actor_hits_day', 'actor_hits_week', 'actor_hits_month', 'actor_score_all', 'actor_score_num', 'actor_up', 'actor_down'], 'integer'],
            [['actor_score'], 'number'],
            [['actor_content'], 'required'],
            [['actor_content'], 'string'],
            [['actor_name', 'actor_en', 'actor_alias', 'actor_pic', 'actor_blurb', 'actor_works', 'actor_tag', 'actor_class'], 'string', 'max' => 255],
            [['actor_letter', 'actor_sex'], 'string', 'max' => 1],
            [['actor_color'], 'string', 'max' => 6],
            [['actor_remarks'], 'string', 'max' => 100],
            [['actor_area', 'actor_birtharea', 'actor_school'], 'string', 'max' => 20],
            [['actor_height', 'actor_weight', 'actor_birthday', 'actor_blood', 'actor_starsign'], 'string', 'max' => 10],
            [['actor_tpl'], 'string', 'max' => 30],
            [['actor_jumpurl'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'actor_id' => 'Actor ID',
            'type_id' => 'Type ID',
            'type_id_1' => 'Type Id 1',
            'actor_name' => 'Actor Name',
            'actor_en' => 'Actor En',
            'actor_alias' => 'Actor Alias',
            'actor_status' => 'Actor Status',
            'actor_lock' => 'Actor Lock',
            'actor_letter' => 'Actor Letter',
            'actor_sex' => 'Actor Sex',
            'actor_color' => 'Actor Color',
            'actor_pic' => 'Actor Pic',
            'actor_blurb' => 'Actor Blurb',
            'actor_remarks' => 'Actor Remarks',
            'actor_area' => 'Actor Area',
            'actor_height' => 'Actor Height',
            'actor_weight' => 'Actor Weight',
            'actor_birthday' => 'Actor Birthday',
            'actor_birtharea' => 'Actor Birtharea',
            'actor_blood' => 'Actor Blood',
            'actor_starsign' => 'Actor Starsign',
            'actor_school' => 'Actor School',
            'actor_works' => 'Actor Works',
            'actor_tag' => 'Actor Tag',
            'actor_class' => 'Actor Class',
            'actor_level' => 'Actor Level',
            'actor_time' => 'Actor Time',
            'actor_time_add' => 'Actor Time Add',
            'actor_time_hits' => 'Actor Time Hits',
            'actor_time_make' => 'Actor Time Make',
            'actor_hits' => 'Actor Hits',
            'actor_hits_day' => 'Actor Hits Day',
            'actor_hits_week' => 'Actor Hits Week',
            'actor_hits_month' => 'Actor Hits Month',
            'actor_score' => 'Actor Score',
            'actor_score_all' => 'Actor Score All',
            'actor_score_num' => 'Actor Score Num',
            'actor_up' => 'Actor Up',
            'actor_down' => 'Actor Down',
            'actor_tpl' => 'Actor Tpl',
            'actor_jumpurl' => 'Actor Jumpurl',
            'actor_content' => 'Actor Content',
        ];
    }

    public function fields()
    {
        $fields = parent::fields();
        //unset($fields['actor_id']);
        unset($fields['type_id']);
        unset($fields['type_id_1']);
        return $fields;
    }


}
