<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\User;

class UserController extends Controller
{
    public function actionIndex()
    {
        //$this->title = 'New Title';
        $query = User::find();
        $alluser = $query->orderBy('user_name')
                         ->all(); 
        return $this->render('index',[
            'title' => 'Risk Management',
            'alluser'  => $alluser
        ]);    
    }
}
