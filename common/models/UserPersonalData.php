<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_personal_data".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $surname
 * @property string $lastname
 */
class UserPersonalData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_personal_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name'], 'required'],
            [['user_id'], 'integer'],
            [['name', 'surname', 'lastname'], 'string', 'max' => 32],
            [['user_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'lastname' => 'Lastname',
        ];
    }

    /**
     * @inheritdoc
     * @return UserPersonalDataQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserPersonalDataQuery(get_called_class());
    }
}
