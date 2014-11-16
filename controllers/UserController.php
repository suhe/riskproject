<?php
namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\User;
use app\models\Risk;
use app\models\RiskUser;

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
    
    public function actionAdd(){
        $user = new User();
        $user->setScenario('insert');
        if ($user->load(Yii::$app->request->post())) {
            $frisk = Yii::$app->request->post('risk');
            if($user->getUserSave()){
                if($user = $user->findByUsername()){
                    $risk = new RiskUser();
                    $total = count($frisk);
                    $i=0;
                    $vrisk = '';
                    while(($i<$total) && ($i<$total) ){
                        if($i>0) $vrisk.=';';
                        $mrisk = new Risk();
                        $mrisk = $mrisk->getSingleData_Risk($frisk[$i]);
                        $vrisk.= $mrisk->risk_no;
                        $risk = new RiskUser();
                        $risk->user_id = $user->user_id;
                        $risk->risk_id = $frisk[$i];
                        $risk->save();
                        $i++;
                    }
                    //update user column vrisk
                    $user->setScenario('change');
                    $user = User::findOne($user->user_id);
                    $user->user_vrisk = $vrisk;
                    $user->update();
                }
            }
        }
        else {    
        }
            $risks = new Risk();
            return $this->render('form',[
               'user'  => $user,
               'form_user' => 0,
               'risk'  => $risks,
               'risks' => $risks->getAllRiskData()
            ]
            );
    }
    
    public function actionSave(){
        $risk = Yii::$app->request->post('risk');
        $total = count($risk);
        $i=0;
        while($i<$total){
            echo $risk[$i];
            $i++;
        }
        /*$user = new User();
        $user->user_name = 'Qiang';
        $user->user_password = 'Qiang';
        $user->user_group = 2;
        $user->save();*/
    }
    
    public function actionEdit($id){
        $user = new User();
        $form_user = User::findOne($id);
        if(!$form_user) $this->redirect(array('user/index'));
        
        if ($user->load(Yii::$app->request->post())) {
            $frisk = Yii::$app->request->post('risk');
            if($user->getUserUpdate($id)){
                if($user = $user->findByUsername()){
                    $risk = new RiskUser();
                    RiskUser::deleteAll('user_id = :user_id', [':user_id' => $id]); //delete user_id = $id from risk_user
                    $total = count($frisk);
                    $i=0;
                    $vrisk = '';
                    while(($i<$total) && ($i<$total) ){
                        if($i>0) $vrisk.=';';
                        $mrisk = new Risk();
                        $mrisk = $mrisk->getSingleData_Risk($frisk[$i]);
                        $vrisk.= $mrisk->risk_no;
                        $risk = new RiskUser();
                        $risk->user_id = $user->user_id;
                        $risk->risk_id = $frisk[$i];
                        $risk->save();
                        $i++;
                    }
                    //update user column vrisk
                    $user->setScenario('change');
                    $user = User::findOne($user->user_id);
                    $user->user_vrisk = $vrisk;
                    $user->update();
                }
                $this->redirect(array('user/index'));
            }    
        }    
        $risks = new Risk();
            return $this->render('form',[
               'user'  => $user,
               'form_user' => $form_user,
               'risk'  => $risks,
               'risks' => $risks->getAllRiskData()
            ]
        );
    }

}
