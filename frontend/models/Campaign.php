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
 * @property string $c_display_name
 * @property string $c_email
 * @property string $c_location
 * @property string $c_biography
 * @property string $c_social_profile
 */
class Campaign extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    
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
            [['c_title', 'c_description', 'c_start_date', 'c_end_date', 'c_goal'], 'required'],
            [['c_start_date', 'c_end_date', 'c_created_at', 'c_video', 'c_description_long', 'c_author', 'c_display_name', 'c_email', 'c_location', 'c_biography', 'c_social_profile','file'], 'safe'],
            [['c_goal'], 'integer'],
            [['c_video', 'c_description_long', 'c_biography'], 'string'],
            [['c_title', 'c_image'], 'string', 'max' => 100],
            [['c_description', 'c_author', 'c_display_name', 'c_email', 'c_location', 'c_social_profile'], 'string', 'max' => 255],
            [['file'],'file','extensions'=>'jpg,png,gif'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_title' => 'Campaign Title',
            'file' => 'Campaign Image',
            'c_description' => 'Short Description',
            'c_start_date' => 'Start Date',
            'c_end_date' => 'End Date',
            'c_goal' => 'Goal',
            'c_id' => 'C ID',
            'c_video' => 'Video',
            'c_description_long' => 'Campaign Description',
            'c_author' => 'Author',
            'c_created_at' => 'Created At',
            'c_display_name' => 'Display Name',
            'c_email' => 'Email',
            'c_location' => 'Location',
            'c_biography' => 'Biography',
            'c_social_profile' => 'Social Profile',
        ];
    }
}
