<?php
namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\User;

class UserController extends Controller
{
    public function actionIndex(){
        $user = new User();
        if ($user->load(Yii::$app->request->post()) && $user->getUserRecord())
             $users = $user->getUserRecord();
        else $users = $user->getUserRecord();
        return $this->render('index',[
            'title' => 'User Management',
            'user'  => $user,
            'users' => $users,
        ]);
    }

}
