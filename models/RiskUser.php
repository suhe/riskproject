<?php
namespace app\models;

use yii\db\ActiveRecord;


class RiskUser extends ActiveRecord{
    
    /**
     * @return string the name of the table associated with this ActiveRecord class.
     */
    public static function tableName(){
        return 'risk_user';
    }
    
    /**
     * @return array the validation rules.
     */
    public function rules(){
        return [
            [['user_id', 'risk_id'], 'integer']
        ];
    }
    
    
    
}