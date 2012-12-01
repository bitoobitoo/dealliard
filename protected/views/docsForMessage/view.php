<?php
/* @var $this DocsForMessageController */
/* @var $model DocsForMessage */

$this->breadcrumbs=array(
	'Docs For Messages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DocsForMessage', 'url'=>array('index')),
	array('label'=>'Create DocsForMessage', 'url'=>array('create')),
	array('label'=>'Update DocsForMessage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DocsForMessage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DocsForMessage', 'url'=>array('admin')),
);
?>

<h1>View DocsForMessage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_message',
		'value',
		'type',
	),
)); ?>
