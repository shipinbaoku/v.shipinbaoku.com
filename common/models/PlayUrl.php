<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "play_url".
 *
 * @property int $id
 * @property string|null $play_title
 * @property string|null $play_from
 * @property string $play_url
 * @property string $play_url_aes 将url生成唯一字符串
 * @property string $url_id 关联vod_detail url_id
 * @property int|null $create_time
 * @property int|null $update_time
 */
class PlayUrl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'play_url';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['play_url', 'play_url_aes', 'url_id'], 'required'],
            [['create_time', 'update_time'], 'integer'],
            [['play_title', 'play_from', 'play_url'], 'string', 'max' => 255],
            [['play_url_aes', 'url_id'], 'string', 'max' => 100],
            [['play_url_aes'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'play_title' => 'Play Title',
            'play_from' => 'Play From',
            'play_url' => 'Play Url',
            'play_url_aes' => 'Play Url Aes',
            'url_id' => 'Url ID',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
