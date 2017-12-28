<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wallet".
 *
 * @property integer $id
 * @property integer $userId
 * @property string $walletAddress
 * @property integer $balance
 */
class Wallet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wallet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'userId', 'walletAddress', 'balance'], 'required'],
            [['id', 'userId', 'balance'], 'integer'],
            [['walletAddress'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userId' => 'User ID',
            'walletAddress' => 'Wallet Address',
            'balance' => 'Balance',
        ];
    }
}
