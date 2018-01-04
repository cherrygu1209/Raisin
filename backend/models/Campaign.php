<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "campaign".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $views
 * @property integer $is_delete
 * @property string $created_at
 * @property string $updated_at
 */
class Campaign extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign_backend';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['content'], 'string'],
            [['views', 'is_delete'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['created_at','updated_at'],'default','value' => date('Y-m-d H:m:s')]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'views' => 'Number of views',
            'is_delete' => 'If delete 1notDelete 2Deleted',
            'created_at' => 'Create Time',
            'updated_at' => 'Update Time',
        ];
    }
}
