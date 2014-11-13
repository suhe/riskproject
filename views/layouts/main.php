<?php
/** use Application **/
use yii\helpers\Html;
use yii\helpers\BaseUrl;
use yii\helpers\Url;
use app\assets\AppAsset;

/** Register App **/
AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
<?php $this->head() ?>
<head>
 <?= Html::csrfMetaTags() ?>
<title><?=Html::encode(\Yii::$app->name).'-'.$this->title;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="<?= Yii::$app->charset ?>"/>
</head>
<?php $this->beginBody() ?>
<body>   
<header>
	 <nav role="navigation" class="navbar-default navbar-fixed-top">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="glyphicon glyphicon-user"></span>
            </button>
            <a href="#" class="navbar-brand"><img src="/riskproject/web/img/logo.png" /></a>
			<a class="navbar-brand" href="#"><i class="glyphicon glyphicon-signal"></i> Risk Register Final</a>
			<!--<a class="btn btn-default btn-sm active" type="submit" style="min-width:120px"><i class="glyphicon glyphicon-arrow-left"></i> Previous</a>-->
                        
                        <!--<a href="<?=BaseUrl::to('risk/index/1')?>" class="btn btn-primary btn-sm" type="submit" style="min-width:120px">Next <i class="glyphicon glyphicon-arrow-right"></i></a>-->
	 </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
        
        <?php if (!Yii::$app->session->get('user_id')) { ?>
	<ul class="nav navbar-nav navbar-right" style="margin-right:5px">
          <li><a class="btn btn-primary btn-sm"  href="<?=Url::to(['site/login'])?>">Sign In</a></li>
            <!--<div class="dropdown">
	    <a class="dropdown-toggle btn btn-primary btn-sm" data-toggle="dropdown" href="#">Sign In</a> 
              <div class="dropdown-menu" style="padding: 10px; background: #222">
                <form action="<?=Url::to(['site/login'])?>" role="form" method="post">
                  <div class="form-group">
                    <label for="user" style="color:#FFF">User</label>
                    <input type="text" class="form-control" id="user" name="User[user_name]" placeholder="User" />
                    <label for="password" style="color:#FFF">Password</label>
                    <input type="password" class="form-control" name="User[user_password]" id="password" placeholder="Password" />
                  </div>
                  <button type="submit" class="btn btn-primary btn-sm">Login</button>
				  <a class="dropdown-toggle btn btn-primary btn-sm" data-toggle="dropdown" href="#">Register</a> 
                </form>
              </div>
            </div>-->

          </li>
        </ul>
        <?php } ?>
	<?php if (Yii::$app->session->get('user_id')) { ?>	
	<ul class="nav navbar-nav navbar-right" style="margin-right:15px">
			  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Howdy  <i class="glyphicon glyphicon-user"></i>  <?= Yii::$app->session->get('user_name')?></a>
			  <ul class="dropdown-menu dropdown-bdo">
				<li><a href="<?=Url::to(['user/index'])?>"> <i class="glyphicon glyphicon-user"></i> Risk User</a></li>
                                <li><a href="<?=Url::to(['site/chpassword'])?>"> <i class="glyphicon glyphicon-wrench"></i> Change Password</a></li>
                                <li><a href="<?=Url::to(['site/logout'])?>"> <i class="glyphicon glyphicon-remove-sign"></i> Logout</a></li>
			  </ul>
			 </li>
	</ul>
	 <?php } ?>	  
		
        </div>
    </nav>
</header>



<section>
    <div class="container-fluid" id="wrapper" style="margin-left:30px;margin-top:10px">
        <?=$content?>
    </div>
</section>

</body>
<?php $this->endBody() ?>

</html>
<?php $this->endPage() ?>
