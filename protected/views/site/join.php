<?php
$this->pageTitle=Yii::app()->name . '-Join';
?>

<div class="welcome_main_step3">
	<div class="welcome3_bel">	
		<div class="form">
		<?php echo CHtml::beginForm(); ?>
			<h2 class="title_reg"><?php echo Yii::t('app','Fast registration')?></h2>
			<div class="welcome_social_reg">
				<div class="welcome_social_one_reg">
				</div>
			</div>
			<h2 class="title_reg"><?php echo Yii::t('app','Tell us about yourself')?></h2>
			<div class="settings_text">	
				<div class="event_form_1">
					<?php echo CHtml::activeLabel($model,Yii::t('app','Email'))?>
					<?php echo CHtml::activeTextField($model,'email'); ?>
				</div>
				<div class="event_form_1">
					<?php echo CHtml::activeLabel($model,Yii::t('app','Last name'))?>
					<?php echo CHtml::activeTextField($model,'lastname'); ?>
				</div>
				<div class="event_form_1">
					<?php echo CHtml::activeLabel($model,Yii::t('app','Name'))?>
					<?php echo CHtml::activeTextField($model,'name'); ?>
				</div>
				<div class="event_form_1" id="patronymic">
					<?php echo CHtml::activeLabel($model,Yii::t('app','Patronymic'))?>
					<?php echo CHtml::activeTextField($model,'patronymic'); ?>
				</div>
				<div class="event_form_1">
					<?php echo CHtml::activeLabel($model,Yii::t('app','Password'))?>
					<?php echo CHtml::activePasswordField($model,'password'); ?>
				</div>
				<div class="event_form_1">
					<?php echo CHtml::activeLabel($model,Yii::t('app','Comfirm password'))?>
					<?php echo CHtml::activePasswordField($model,'confirm_password'); ?>
				</div>
				<div class="event_form_1">
					<?php echo CHtml::activeLabel($model,Yii::t('app','Select language'))?>
					<?php echo CHtml::activeDropDownList($model,'language',array(Yii::t('app','English'),Yii::t('app','Russian'),Yii::t('app','Chinese'))); ?>
				</div>
				<div class="event_form_1">
					<?php echo CHtml::activeLabel($model,Yii::t('app','Do you produce any products?'))?>
					<?php echo CHtml::activeRadioButtonList($model,'is_manufacturer',array("yes"=>"yes","no"=>"no"))?>
				</div>
				<div>
					<input class="Accept" type="submit" value="<?php echo Yii::t('app','Accept me to Dealliard')?>">
				</div>
			</div>	
		<?php echo CHtml::endForm(); ?>
		</div>
	</div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		if ('<?php echo Yii::app()->language ?>'!='ru')
		{
			$("#patronymic").css("visibility","hidden");
		}
	});
</script>