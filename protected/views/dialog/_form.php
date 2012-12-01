<?php
/* @var $this DialogController */
/* @var $model Dialog */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dialog-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sender'); ?>
		<?php echo $form->textField($model,'id_sender'); ?>
		<?php echo $form->error($model,'id_sender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_reciever'); ?>
		<?php echo $form->textField($model,'id_reciever'); ?>
		<?php echo $form->error($model,'id_reciever'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'theme'); ?>
		<?php echo $form->textField($model,'theme',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'theme'); ?>
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