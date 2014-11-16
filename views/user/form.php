<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="row">
    <div class="col-md-12">
        <h1><i style="color:#222" class="glyphicon glyphicon-user"></i> <?=Yii::t('app','form user')?></h1> 
        <hr/>
        <br/>
        <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'method' => 'POST',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-md-8\">{input}{error}</div>\n<div class=\"col-md-8\"></div>",
            'labelOptions' => ['class' => 'col-md-1 control-label'],
        ],
        ]);
        ?>
        <?=$form->field($user,'user_name') ?>
        <?=$form->field($user,'user_password')->passwordInput() ?>
        
        <div class="form-group">
            <label class="col-md-1 control-label" for="chex">Risk No</label>
            <div class="col-md-11">
                <?php foreach($risks as $risk){ ?>
                <div class="checkbox col-md-1">
                    <label><input type="checkbox" name="risk[]" value="<?=$risk->risk_id?>" /><?=$risk->risk_no?> </label> 
                </div>
                <?php } ?>
            </div>
        </div>
        
        <hr/>
        <div class="form-group">
            <div class="col-md-offset-1 col-md-11">
                <?=Html::submitButton(Yii::t('app','save'), ['class' => 'btn btn-primary','name' => 'login-button'])?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>    