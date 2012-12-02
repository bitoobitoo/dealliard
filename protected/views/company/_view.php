<?php
/* @var $this CompanyController */
/* @var $data Company */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_date')); ?>:</b>
	<?php echo CHtml::encode($data->birth_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('square')); ?>:</b>
	<?php echo CHtml::encode($data->square); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('worker_count')); ?>:</b>
	<?php echo CHtml::encode($data->worker_count); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('avg_turnout')); ?>:</b>
	<?php echo CHtml::encode($data->avg_turnout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('excl_period')); ?>:</b>
	<?php echo CHtml::encode($data->excl_period); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('excl_period_unit')); ?>:</b>
	<?php echo CHtml::encode($data->excl_period_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('excl_duration')); ?>:</b>
	<?php echo CHtml::encode($data->excl_duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('excl_duration_unit')); ?>:</b>
	<?php echo CHtml::encode($data->excl_duration_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('excl_amount')); ?>:</b>
	<?php echo CHtml::encode($data->excl_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('excl_amount_unit')); ?>:</b>
	<?php echo CHtml::encode($data->excl_amount_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('period')); ?>:</b>
	<?php echo CHtml::encode($data->period); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('period_unit')); ?>:</b>
	<?php echo CHtml::encode($data->period_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:</b>
	<?php echo CHtml::encode($data->duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duration_unit')); ?>:</b>
	<?php echo CHtml::encode($data->duration_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount_unit')); ?>:</b>
	<?php echo CHtml::encode($data->amount_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_id')); ?>:</b>
	<?php echo CHtml::encode($data->service_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discard')); ?>:</b>
	<?php echo CHtml::encode($data->discard); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marketing_id')); ?>:</b>
	<?php echo CHtml::encode($data->marketing_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('org_form_id')); ?>:</b>
	<?php echo CHtml::encode($data->org_form_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('franchise_id')); ?>:</b>
	<?php echo CHtml::encode($data->franchise_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('privacy_edit_contracts')); ?>:</b>
	<?php echo CHtml::encode($data->privacy_edit_contracts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('privacy_docs')); ?>:</b>
	<?php echo CHtml::encode($data->privacy_docs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('privacy_new_contracts')); ?>:</b>
	<?php echo CHtml::encode($data->privacy_new_contracts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('privacy_contracts')); ?>:</b>
	<?php echo CHtml::encode($data->privacy_contracts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	*/ ?>

</div>