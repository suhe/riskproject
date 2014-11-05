<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\Risk;
use app\models\Risk_Client;


class RiskController extends Controller{
    
    public $item_sess_a = array(
    1=>'A',2=>'B',3=>'C',4=>'D',5=>'E',6=>'F',7=>'G',8=>'H',9=>'I',10=>'J',11=>'K',12=>'L',13=>'M',14=>'N',15=>'O',
    16=>'P',17=>'Q',18=>'R',19=>'S',20=>'T',21=>'U',22=>'V',23=>'W',24=>'X',25=>'Y',26=>'Z'
    );
    
    public function actionIndex($id=''){
        return $this->render('index',[
        'risk' => Risk::getSingleData_Risk($id),
        'nav_item' => $this->item_sess_a,
        'nav_id' => $id, 
        'risk_client' => Risk_Client::getResultData_Risk_Client($id),
        ]);
    }
    
    public function actionHero($id){
        echo $id;
    }
}
