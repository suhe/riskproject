<?php
namespace app\models;

use yii\db\ActiveRecord;


class Risk extends ActiveRecord{
    
    
    /**
     * @return string the name of the table associated with this ActiveRecord class.
     */
    public static function tableName(){
        return 'risk';
    }
    
    public function getriskclients(){
        return $this->hasMany(Risk_Clients::className(),['risk_id' => 'risk_id']);
    }
    
    public function getSingleData_Risk($id){
        $risk = Risk::find()
        ->where(['risk_id' => $id])
        ->one();
        return $risk;
    }
    
    public function getAllRiskData(){
        $risks = Risk::find()
        ->select(['risk_id','risk_no']) 
        ->all();
        return $risks;
    }
    
    public function getResultData_Risk_Client(){
        return Risk::find()->joinWith(['riskclients'])->all();
    }
    
}