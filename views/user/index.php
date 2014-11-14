<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<div class="row">
    <div class="col-md-12">
	<h1><i style="color:#222" class="glyphicon glyphicon-user"></i> User Account Management</h1> 
    </div>
    
    <div class="col-md-12">
        <?php $form = ActiveForm::begin([
                'method' => 'POST',
                'options' => ['class' => 'form-inline pull-right']
              ]);    
        ?>
        <?=$form->field($user,'user_name',['inputOptions' => ['value' => Yii::$app->session['user_query']]]);?>
        <?=Html::submitButton(Yii::t('app','search'),['class' => 'btn btn-primary','name' => 'login-button'])?>
        <?=Html::a(Yii::t('app','add new'),Url::to(['user/add/']),['class' => 'btn btn-primary'])?>
        <?php ActiveForm::end(); ?>
        <!--
         <form class="form-inline pull-right" role="form" method="post" action="<?=Url::to(['user/search/'])?>">
            <div class="form-group">
              <input type="text" class="form-control input-sm" id="search" name="search" placeholder="Username">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            <a class="btn btn-primary btn-sm">Add New</a>
          </form>
          -->
          
          
    </div>
    
    <div class="col-md-12" style="margin-top:10px">
        <table class="table">
            <thead>
                <tr>
                    <th style="width:25px">No</th>
                    <th style="width:125px"><?=Yii::t('app','name')?></th>
                    <th style="width:85px"><?=Yii::t('app','password')?></th>
                    <th><?=Yii::t('app','risk')?></th>
                    <th style="width:55px"></th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;
                foreach($users as $user){?>
                <tr>
                    <td><?=$i?></td>
                    <td class="text-left"><?=$user->user_name?></td>
                    <td class="text-left"><?=$user->user_password?></td>
                    <td class="text-left">A,B,C,D</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" 
                               data-toggle="dropdown">
                               <i style="color:#222" class="glyphicon glyphicon-pencil"></i>Edit <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                               <li><a href="<?=Url::to(['user/edit/'.$user->user_id])?>"><i style="color:#222" class="glyphicon glyphicon-pencil"></i> Edit</a></li>
                               <li><a href="<?=Url::to(['user/remove/'.$user->user_id])?>"><i style="color:#222" class="glyphicon glyphicon-trash"></i> Remove</a></li>
                            </ul>
                         </div>
                    </td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
    </div>    
    
   
</div>        