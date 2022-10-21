<?php

namespace app\controllers;

use app\models\Thepage;
use yii\web\NotFoundHttpException;

class ThepageController extends \yii\web\Controller
{    
    public function actionView($kodelink)
    {
        $model = $this->findModelByKodelink($kodelink);
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    protected function findModelByKodelink($kodelink)
    {
        if (($model = Thepage::findOne(['kodelink' => $kodelink])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
