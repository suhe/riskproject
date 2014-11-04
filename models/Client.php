<?php
namespace app\models;

use yii\db\ActiveRecord;


class Client extends ActiveRecord{
    
    public $client_name;
    /**
     * @return string the name of the table associated with this ActiveRecord class.
     */
    public static function tableName(){
        return 'client';
    }
    
    
    
    
}