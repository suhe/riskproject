<?php

namespace app\models;
use yii;
use yii\db\ActiveRecord;
use yii\helpers\Security;


class User extends ActiveRecord {
    public $rememberMe = true;
    public $_user=false;
    //public $user_name;
    //public $_query = $_SESSION['user_query'];
    
    /**
    * Name of Tabel in Database
   **/
    public static function tableName(){
        return "user";
    } 
    
    /**
     * @return array the validation rules.
     */
    public function rules(){
        return [
            [['user_name', 'user_password'], 'required'],
            ['rememberMe', 'boolean'],
            [['user_name'],'validateUserName','on'=>'insert']
        ];
    }
    
    /**
    * Atribut Label form 
    **/
    public function AttributLabels(){
        return [
            'user_id'   => 'Userid',
            'user_name' => 'Username',
            'user_password' => 'Password',
            '_query' => 'Search'
        ];
    }
    
    public function getUserAndPassword(){
        $user = User::find()
        ->where(['user_name' => $this->user_name,'user_password' => $this->user_password])
        ->one();
        return $user;
    }
    
    public function login(){
        if ($this->validate()) {
            if(count($user=$this->getUserAndPassword())>0){
                Yii::$app->session->set('user_id',$user['user_id']);
                Yii::$app->session->set('user_name',$user['user_name']);
                return true;
            } else {
                Yii::$app->session->setFlash('msg','Username or Password not Registered');
                return false;
            }
        } else {
            return false;
        }
    }
    
    public function getUserLogin(){
        if ($this->_user === false) {
            $this->_user = $this->findByUsername($this->user_name);
        }
        return $this->_user;
    }
    
     /**
    * get all user
    **/
     public function getUserRecord(){
        $user = User::find();
        if($this->user_name)
           $user = $user->where(['like','user_name',$this->user_name]);
        $user = $user->all();
        return $user;
    }
    
    public function getUserSave(){
        if ($this->validate()) {
            $user = new User();
            $user->user_name = $this->user_name;
            $user->user_password = $this->user_password;
            $user->user_group = 2;
            $user2->save();
            return true;
        } else {
            return false;
        }    
    }
    
    public function getUserUpdate($id){
        $user = new User();
        $user = User::findOne($id);
        $user->user_password = $this->user_password;
        $user->user_group = 2;
        $user->update();
        return true;
    }
    
    /**
     * Validate User if exist
     **/
    public function validateUserName(){
        if($this->findByUsername())
          $this->addError('user_name', 'Username is available in database!');
    } 
    
    public function findByUsername()
    {
        $user = User::find()
        ->where(['user_name'=>$this->user_name])
        ->one();
        return $user;
    }
    
}
