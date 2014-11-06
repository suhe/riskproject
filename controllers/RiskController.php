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
    
    public $item_sess_b = array(
    27=>'AA',28=>'AB',29=>'AC',30=>'AD',31=>'AE',32=>'AF',33=>'AG',34=>'AH',35=>'AI',36=>'AJ',37=>'AK',38=>'AL',
    39=>'AM',40=>'AN',41=>'AO',42=>'AP',43=>'AQ',44=>'AR',45=>'AS',46=>'AT',47=>'AU',48=>'AV'
    );
    
    public function actionIndex($id=1){
        if(!$id) $id=1;
        $risk = new Risk();
        $risk_client = new Risk_Client();
        return $this->render('index',[
        'risk' => $risk->getSingleData_Risk($id),
        'nav_item' => $id<27 ? $this->item_sess_a : $this->item_sess_b,
        'nav_id' => $id, 
        'risk_client' => $risk_client->getResultData_Risk_Client($id),
        ]);
    }
    
    public function actionHero($id){
        echo $id;
    }
}
