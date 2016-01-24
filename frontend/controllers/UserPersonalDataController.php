<?php

namespace frontend\controllers;

use common\models\UserPersonalData;

class UserPersonalDataController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $userPersonalData = new UserPersonalData();
        $userPersonalData->user_id = 1;
        $userPersonalData->name = 'Jury';
        $userPersonalData->surname = 'Zalyptsov';
        $userPersonalData->lastname = 'Anatolievitch';
        $userPersonalData->save();

        return $this->render('index', [
            'result' => $userPersonalData->getErrors()
        ]);
    }

}
