<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!--Start of Risk A-->
<div class="row">
	<div class="col-md-1">
		<div class="panel panel-default panel-theme" >
			<div class="panel-heading text-center"><strong>Risk No</strong></div>
			<div class="panel-body text-center">
				<h1><strong><?=$risk->risk_no?></strong></h1>
			</div>
		</div>
	</div>
		
	<div class="col-md-2">
		<div class="panel panel-default panel-theme">
			<div class="panel-heading text-center"><strong>Risk Description</strong></div>
			<div class="panel-body text-justify">
				<?=$risk->risk_description?>
			</div>
		</div>
	</div>
			
	<div class="col-md-6">
		<div class="panel panel-default panel-theme">
			<div class="panel-heading text-center"><strong>Contributing Factor</strong></div>
			<div class="panel-body text-justify">
				<?=$risk->contributing_factor?>
					  <!--<ol class="number">
					    <li>Kerusakan peralatan supervisi/ audit.</li>
					    <li>Pemindahan aset yang tidak terkontrol dengan baik</li>
					    <li>Gudang tidak dapat menampung.</li> 
					    <li>Peminjaman aset yang tidak diawasi.</li>
					    <li>Kurangnya pengawasan aset</li>
					    <li>Pencurian part di bengkel (kehilangan inventory.</li> 
					    <li>Tidak teridentifikasinya aset dikarenakan nilai aset yang dibawah 1 juta (tidak dicatat)</li>
						<li>Penyimpanan aset tidak rapi</li>
						<li>Aset tidak tercatat dengan baik</li>
						<li>Data aset hilang karena komputer yang terkena virus dan penggunaan software bajakan</li>
						<li>Belum adanya manajemen aset</li>
					  </ul>-->
			</div>
		</div>
	</div>
			
	<div class="col-md-3">
		<div class="panel panel-default panel-theme">
			<div class="panel-heading text-center"><strong>Inherent Risk</strong></div>
			<div class="panel-body text-justify">
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading text-center"><strong>Likelihood</strong></div>
							<div class="panel-body text-right">
								<?=$risk->risk_likelihood?>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading text-center"><strong>Consequence</strong></div>
							<div class="panel-body text-right">
								<?=$risk->risk_consequence?>
							</div>
						</div>
					</div>
							
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading text-center"><strong>Inherent Risk Rating</strong></div>
							<div class="panel-body text-center">
								<span class="badge"><strong><?=$risk->risk_inherent_rating?></strong></span>
							</div>
						</div>	
					</div>
		  
				</div>
			</div>
		</div>
	</div>
			
</div>
		
<div class="row">
	<?php foreach($risk_client as $v){ ?>
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading text-left"><strong><?=$v->client_name?></strong></div>
				<div class="panel-body text-center">
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading text-center"><strong>Control Description</strong></div>
								<div class="panel-body text-left">
									-
								</div>
							</div>	
						</div>
						
						<div class="col-md-3">
							<div class="panel panel-default">
								<div class="panel-heading text-center"><strong>Control Rating</strong></div>
								<div class="panel-body text-center">
									<div class="form-group">
										<?php if (!Yii::$app->session->get('user_id')) {
											print Html::a(Yii::t('app','you must login'),['site/login'], ['class' => 'btn btn-primary','name' => 'back-button']);
										} else {

										?>
										<select class="form-control input-sm" name="cr">
											<option value="">Please Vote</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
										<?php } ?>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-3">
							<div class="panel panel-default">
								<div class="panel-heading text-center"><strong>Residual Risk Rating</strong></div>
								<div class="panel-body text-left">
									-
								</div>
							</div>	
						</div>
					</div>	
				</div>
			</div>	
	</div>
	<?php  } ?>
		  
		  
		  
</div>
<!--End of Risk A-->

<sidebar>
      <nav class='sidebar sidebar-menu-collapsed'>
      <?=Html::a('<span class="glyphicon glyphicon-align-justify"></span>','/riskproject/web/risk/index/'.($nav_id>=27?'1':'27'),array('title'=>$nav_id<27?'Next Slide':'Previous Slide'))?>	
      <!--<a href='#' id='justify-icon' title="Next Slide"><span class='glyphicon glyphicon-align-justify'></span></a>-->
      <!--
      <ul>
        <?php foreach($nav_item as $key => $name){
	?>
        <li <?=$nav_id==$key?'class="active"':''?>>
	  <?= Html::a('<span class="glyphicon collapsed-element">'.$name.'</span><span class="expanded-element">'.$name.'</span>','/riskproject/web/risk/index/'.$key,array('class'=>'expandable'));?>
        </li>
	<?php } ?>
        
      </ul>-->
     <ul>
	<?php
	if($risk_item){
	foreach($risk_item as $item){ ?>
	<li <?=$nav_id==$item->risk_id?'class="active"':''?>>
	<?= Html::a('<span class="glyphicon collapsed-element">'.$item->risk_no.'</span><span class="expanded-element">'.$item->risk_no.'</span>',['risk/index/'.$item->risk_id],array('class'=>'expandable'));?>
	</li>
	<?php }} ?>
     </ul>
      
    </nav>
</sidebar>
