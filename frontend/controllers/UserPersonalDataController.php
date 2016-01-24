<?php

namespace frontend\controllers;

use common\models\User;
use common\models\UserPersonalData;

class UserPersonalDataController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $userPersonalData = new UserPersonalData([
            'user_id' => 1,
            'name' => 'Jury',
            'surname' => 'Zalyptsov',
            'lastname' => 'Anatolievitch'
        ]);

        $userPersonalData->save();

        return $this->render('index', [
            'result' => $userPersonalData->getErrors()
        ]);
    }

    public function actionFind($userId) {
        $foundedUserData = $this->getUserPersonalData($userId);

        return $this->render('find', [
            'result' => $foundedUserData
        ]);
    }

    private function getUserPersonalData($userId) {
        $userPersonalData = new UserPersonalData();
        return $userPersonalData->find()->userId($userId)->one();
    }

    public function actionUpdate() {
        $updatingDate = $this->getUserPersonalData(1);
        $updatingDate->name = 'Hyjyriy';
        $updatingDate->save();
    }

    public function actionGetUserRelation() {
        $userHandler = new User();
        $user = $userHandler->find()->where([
            'id' => 1
        ])->one();

        return $this->render('get-user-relation', [
            'user' => $user
        ]);
    }

}
