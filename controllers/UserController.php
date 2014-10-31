<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\User;

class UserController extends Controller {
    public function actionIndex()
    {
        $query = User::find();
        $alluser = $query->orderBy('user_name');
        return $this->render('index',[
            'alluser'  => $alluser
        ]);    
    }
}
