<?php

namespace frontend\controllers;

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

    public function actionFind() {
        $userPersonalData = new UserPersonalData();
        $foundedUserData = $userPersonalData->find()->where([
            'user_id' => 1
        ])->one();

        return $this->render('find', [
            'result' => $foundedUserData
        ]);
    }

}
