<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[UserPersonalData]].
 *
 * @see UserPersonalData
 */
class UserPersonalDataQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    public function userId($userId) {
        $this->where([
            'user_id' => $userId
        ]);

        return $this;
    }

    /**
     * @inheritdoc
     * @return UserPersonalData[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UserPersonalData|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}