<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\Risk;
use app\models\Risk_Client;

class RiskController extends Controller{
    
    public function actionIndex(){
        return $this->render('index',[
        'risk' => Risk::getSingleData_Risk(1),
        'risk_client' => Risk_Client::getResultData_Risk_Client()
        ]);
    }
}
