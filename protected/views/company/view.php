<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Company', 'url'=>array('index')),
	array('label'=>'Create Company', 'url'=>array('create')),
	array('label'=>'Update Company', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Company', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Company', 'url'=>array('admin')),
);
?>

<h1>View Company #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'birth_date',
		'phone',
		'square',
		'worker_count',
		'avg_turnout',
		'excl_period',
		'excl_period_unit',
		'excl_duration',
		'excl_duration_unit',
		'excl_amount',
		'excl_amount_unit',
		'period',
		'period_unit',
		'duration',
		'duration_unit',
		'amount',
		'amount_unit',
		'service_id',
		'discard',
		'marketing_id',
		'org_form_id',
		'franchise_id',
		'privacy_edit_contracts',
		'privacy_docs',
		'privacy_new_contracts',
		'privacy_contracts',
		'create_time',
		'update_time',
	),
)); ?>
