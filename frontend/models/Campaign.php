<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "campaign".
 *
 * @property string $c_title
 * @property string $c_image
 * @property string $c_description
 * @property string $c_start_date
 * @property string $c_end_date
 * @property integer $c_goal
 * @property integer $c_id
 * @property string $c_video
 * @property string $c_description_long
 * @property string $c_author
 * @property string $c_created_at
 */
class Campaign extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_title', 'c_image', 'c_description', 'c_start_date', 'c_end_date', 'c_goal', 'c_video', 'c_description_long'], 'required'],
            [['c_start_date', 'c_end_date', 'c_created_at','c_author'], 'safe'],
            [['c_goal'], 'integer'],
            [['c_video', 'c_description_long'], 'string'],
            [['c_title', 'c_image'], 'string', 'max' => 100],
            [['c_description', 'c_author'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_title' => 'C Title',
            'c_image' => 'C Image',
            'c_description' => 'C Description',
            'c_start_date' => 'C Start Date',
            'c_end_date' => 'C End Date',
            'c_goal' => 'C Goal',
            'c_id' => 'C ID',
            'c_video' => 'C Video',
            'c_description_long' => 'C Description Long',
            'c_author' => 'C Author',
            'c_created_at' => 'C Created At',
        ];
    }
}
