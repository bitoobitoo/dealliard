<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'birth_date'); ?>
		<?php echo $form->textField($model,'birth_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'square'); ?>
		<?php echo $form->textField($model,'square'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'worker_count'); ?>
		<?php echo $form->textField($model,'worker_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avg_turnout'); ?>
		<?php echo $form->textField($model,'avg_turnout',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'excl_period'); ?>
		<?php echo $form->textField($model,'excl_period'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'excl_period_unit'); ?>
		<?php echo $form->textField($model,'excl_period_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'excl_duration'); ?>
		<?php echo $form->textField($model,'excl_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'excl_duration_unit'); ?>
		<?php echo $form->textField($model,'excl_duration_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'excl_amount'); ?>
		<?php echo $form->textField($model,'excl_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'excl_amount_unit'); ?>
		<?php echo $form->textField($model,'excl_amount_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'period'); ?>
		<?php echo $form->textField($model,'period'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'period_unit'); ?>
		<?php echo $form->textField($model,'period_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duration'); ?>
		<?php echo $form->textField($model,'duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duration_unit'); ?>
		<?php echo $form->textField($model,'duration_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount_unit'); ?>
		<?php echo $form->textField($model,'amount_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service_id'); ?>
		<?php echo $form->textField($model,'service_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discard'); ?>
		<?php echo $form->textField($model,'discard'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marketing_id'); ?>
		<?php echo $form->textField($model,'marketing_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'org_form_id'); ?>
		<?php echo $form->textField($model,'org_form_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'franchise_id'); ?>
		<?php echo $form->textField($model,'franchise_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'privacy_edit_contracts'); ?>
		<?php echo $form->textField($model,'privacy_edit_contracts',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'privacy_docs'); ?>
		<?php echo $form->textField($model,'privacy_docs',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'privacy_new_contracts'); ?>
		<?php echo $form->textField($model,'privacy_new_contracts',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'privacy_contracts'); ?>
		<?php echo $form->textField($model,'privacy_contracts',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->