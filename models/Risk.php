<?php
namespace app\models;

use yii\db\ActiveRecord;


class Risk extends ActiveRecord{
    
    public $risk_vid;
    public $user_id;
    
    /**
     * @return string the name of the table associated with this ActiveRecord class.
     */
    public static function tableName(){
        return 'risk';
    }
    
    public function getriskclients(){
        return $this->hasMany(Risk_Clients::className(),['risk_id' => 'risk_id']);
    }
    
    /**
     * Join to Model::RiskUser
     **/
    public function getRiskUser(){
        return $this->hasMany(RiskUser::className(),['risk_id' => 'risk_id']);
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
    
    public function getAllRiskUserData($id){
        $risks = Risk::find()
        ->select(['risk_id','risk_no','(SELECT risk_id FROM risk_user WHERE risk_user.risk_id=risk.`risk_id` AND risk_user.`user_id`='.$id.') AS risk_vid']) 
        ->all();
        return $risks;
    }
    
    public function getAllRiskUserSelectionData($id){
        $risks = Risk::find()
        ->joinWith(['riskUser'])
        ->where(['user_id' => $id])
        ->all();
        return $risks;
    }
    
    public function getSingleRiskUserSelectionData($id,$user_id){
        $risks = Risk::find()
        ->joinWith(['riskUser'])
        ->where(['risk_user.user_id' => $user_id,'risk.risk_id' => $id])
        ->one();
        return $risks;
    }
    
    public function getStartRiskUserSelectionData($user_id){
        $risks = Risk::find()
        ->joinWith(['riskUser'])
        ->where(['risk_user.user_id' => $user_id])
        ->one();
        return $risks;
    }
    
    public function getResultData_Risk_Client(){
        return Risk::find()->joinWith(['riskclients'])->all();
    }
    
}