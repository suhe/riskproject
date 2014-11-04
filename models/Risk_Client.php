<?php
namespace app\models;

use yii\db\ActiveRecord;
use app\models\Risk;

class Risk_Client extends ActiveRecord{
    
    public static function tableName(){
        return 'risk_client';
    }
    
    public function getrisk(){
        return $this->hasMany(Risk::className(),['risk_id'=>'risk_id']);
    }
    
    public function getclient(){
        return $this->hasMany(Client::className(),['client_id'=>'client_id']);
    }
    
    public function relations()
    {
        return array(
        'client' => array(self::HAS_MANY, 'risk_client', 'client_id'),
        'risk' => array(self::HAS_MANY, 'risk', 'risk_id'),
        );
    }
    
    public function getResultData_Risk_Client(){
        return Risk_Client::find()
        ->joinWith('risk')
        ->joinWith('client')
        ->select('risk_client_id,risk.risk_id,client.client_name')
        ->all();
    }
    
    
}
