<?php
/* @var $this TranslationController */
/* @var $model Translation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'translation-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_lang'); ?>
		<?php echo $form->textField($model,'id_lang'); ?>
		<?php echo $form->error($model,'id_lang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php echo $form->textField($model,'text',array('size'=>60,'maxlength'=>5000)); ?>
		<?php echo $form->error($model,'text'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->