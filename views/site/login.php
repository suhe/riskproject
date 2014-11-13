<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-danger"><?=Yii::$app->session->getFlash('msg')?></p>
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'method' => 'POST',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-md-3\">{input}</div>\n<div class=\"col-md-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-md-1 control-label'],
        ],
    ]); ?>

    <?=$form->field($model,'user_name') ?>
    <?=$form->field($model,'user_password')->passwordInput() ?>
    <?=$form->field($model,'rememberMe', [
        'template' => "<div class=\"col-md-offset-1 col-md-3\">{input}</div>\n<div class=\"col-md-8\">{error}</div>",
    ])->checkbox() ?>

    <div class="form-group">
        <div class="col-md-offset-1 col-md-11">
            <?=Html::submitButton('Login', ['class' => 'btn btn-primary','name' => 'login-button'])?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

    <div class="col-lg-offset-1" style="color:#999;">
        Please Login Before you fill the Risk / Auth Admin page
    </div>
</div>
