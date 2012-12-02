<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Company', 'url'=>array('index')),
	array('label'=>'Create Company', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('company-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Companies</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'company-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'email',
		'birth_date',
		'phone',
		'square',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
