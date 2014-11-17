<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
?>

<div class="row">
    <div class="col-md-12">
        <h1><i style="color:#222" class="glyphicon glyphicon-user"></i> <?=Yii::t('app','change password')?></h1> 
        <hr/>
        <p class="text-danger"><?=Yii::$app->session->getFlash('msg')?></p>
        <br/>
        <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'method' => 'POST',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-md-8\">{input}{error}</div>\n",
            'labelOptions' => ['class' => 'col-md-1 control-label'],
        ],
        ]);
        ?>
        <?=$form->field($user,'user_name')->textInput(['value' => $form_user?$form_user->user_name:'','readonly'=>$form_user?true:false,'autocomplete' => 'off']);?>
        <?=$form->field($user,'user_password')->passwordInput(['value' => $form_user?$form_user->user_password:'','autocomplete' => 'off']) ?>
        
        <hr/>
        <div class="form-group">
            <div class="col-md-offset-1 col-md-11">
                <?=Html::submitButton(Yii::t('app','update'), ['class' => 'btn btn-primary','name' => 'login-button'])?>
                
                
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>    