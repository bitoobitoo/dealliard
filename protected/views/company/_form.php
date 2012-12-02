<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_date'); ?>
		<?php echo $form->textField($model,'birth_date'); ?>
		<?php echo $form->error($model,'birth_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'square'); ?>
		<?php echo $form->textField($model,'square'); ?>
		<?php echo $form->error($model,'square'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'worker_count'); ?>
		<?php echo $form->textField($model,'worker_count'); ?>
		<?php echo $form->error($model,'worker_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avg_turnout'); ?>
		<?php echo $form->textField($model,'avg_turnout',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'avg_turnout'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'excl_period'); ?>
		<?php echo $form->textField($model,'excl_period'); ?>
		<?php echo $form->error($model,'excl_period'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'excl_period_unit'); ?>
		<?php echo $form->textField($model,'excl_period_unit'); ?>
		<?php echo $form->error($model,'excl_period_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'excl_duration'); ?>
		<?php echo $form->textField($model,'excl_duration'); ?>
		<?php echo $form->error($model,'excl_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'excl_duration_unit'); ?>
		<?php echo $form->textField($model,'excl_duration_unit'); ?>
		<?php echo $form->error($model,'excl_duration_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'excl_amount'); ?>
		<?php echo $form->textField($model,'excl_amount'); ?>
		<?php echo $form->error($model,'excl_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'excl_amount_unit'); ?>
		<?php echo $form->textField($model,'excl_amount_unit'); ?>
		<?php echo $form->error($model,'excl_amount_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'period'); ?>
		<?php echo $form->textField($model,'period'); ?>
		<?php echo $form->error($model,'period'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'period_unit'); ?>
		<?php echo $form->textField($model,'period_unit'); ?>
		<?php echo $form->error($model,'period_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duration'); ?>
		<?php echo $form->textField($model,'duration'); ?>
		<?php echo $form->error($model,'duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duration_unit'); ?>
		<?php echo $form->textField($model,'duration_unit'); ?>
		<?php echo $form->error($model,'duration_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount_unit'); ?>
		<?php echo $form->textField($model,'amount_unit'); ?>
		<?php echo $form->error($model,'amount_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service_id'); ?>
		<?php echo $form->textField($model,'service_id'); ?>
		<?php echo $form->error($model,'service_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discard'); ?>
		<?php echo $form->textField($model,'discard'); ?>
		<?php echo $form->error($model,'discard'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marketing_id'); ?>
		<?php echo $form->textField($model,'marketing_id'); ?>
		<?php echo $form->error($model,'marketing_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'org_form_id'); ?>
		<?php echo $form->textField($model,'org_form_id'); ?>
		<?php echo $form->error($model,'org_form_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'franchise_id'); ?>
		<?php echo $form->textField($model,'franchise_id'); ?>
		<?php echo $form->error($model,'franchise_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privacy_edit_contracts'); ?>
		<?php echo $form->textField($model,'privacy_edit_contracts',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'privacy_edit_contracts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privacy_docs'); ?>
		<?php echo $form->textField($model,'privacy_docs',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'privacy_docs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privacy_new_contracts'); ?>
		<?php echo $form->textField($model,'privacy_new_contracts',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'privacy_new_contracts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privacy_contracts'); ?>
		<?php echo $form->textField($model,'privacy_contracts',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'privacy_contracts'); ?>
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