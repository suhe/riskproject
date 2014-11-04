<?php
namespace app\models;

use yii\db\ActiveRecord;

class Risk_Client extends ActiveRecord{
    
    public $client_name;
    
    public static function tableName(){
        return 'risk_client';
    }
    
    public function getRisk(){
        return $this->hasMany(Risk::className(),['risk_id'=>'risk_id']);
    }
    
    public function getClient(){
        return $this->hasMany(Client::className(),['client_id'=>'client_id']);
    }
    
    public function getResultData_Risk_Client(){
        $query = Risk_Client::find()
        ->joinWith(['client']);
        
        return $query
            ->select(['client_name','client.client_id'])
            ->all();
    }
}
