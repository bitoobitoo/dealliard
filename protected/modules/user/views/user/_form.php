<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_group'); ?>
		<?php echo $form->textField($model,'user_group'); ?>
		<?php echo $form->error($model,'user_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'midname'); ?>
		<?php echo $form->textField($model,'midname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'midname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_date'); ?>
		<?php echo $form->textField($model,'birth_date'); ?>
		<?php echo $form->error($model,'birth_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lang'); ?>
		<?php echo $form->textField($model,'lang'); ?>
		<?php echo $form->error($model,'lang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'avatar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'occupation_id'); ?>
		<?php echo $form->textField($model,'occupation_id'); ?>
		<?php echo $form->error($model,'occupation_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'education_id'); ?>
		<?php echo $form->textField($model,'education_id'); ?>
		<?php echo $form->error($model,'education_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position_id'); ?>
		<?php echo $form->textField($model,'position_id'); ?>
		<?php echo $form->error($model,'position_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country_id'); ?>
		<?php echo $form->textField($model,'country_id'); ?>
		<?php echo $form->error($model,'country_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_region_id'); ?>
		<?php echo $form->textField($model,'m_region_id'); ?>
		<?php echo $form->error($model,'m_region_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'region_id'); ?>
		<?php echo $form->textField($model,'region_id'); ?>
		<?php echo $form->error($model,'region_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_id'); ?>
		<?php echo $form->textField($model,'city_id'); ?>
		<?php echo $form->error($model,'city_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privacy_dialog'); ?>
		<?php echo $form->textField($model,'privacy_dialog',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'privacy_dialog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privacy_contact'); ?>
		<?php echo $form->textField($model,'privacy_contact',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'privacy_contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privacy_profile'); ?>
		<?php echo $form->textField($model,'privacy_profile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'privacy_profile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privacy_news'); ?>
		<?php echo $form->textField($model,'privacy_news',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'privacy_news'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_action'); ?>
		<?php echo $form->textField($model,'last_action'); ?>
		<?php echo $form->error($model,'last_action'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->