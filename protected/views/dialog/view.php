<?php
/* @var $this DialogController */
/* @var $model Dialog */

$this->breadcrumbs=array(
	'Dialogs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dialog', 'url'=>array('index')),
	array('label'=>'Create Dialog', 'url'=>array('create')),
	array('label'=>'Update Dialog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dialog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dialog', 'url'=>array('admin')),
);
?>

<h1>View Dialog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_sender',
		'id_reciever',
		'theme',
		'create_time',
		'update_time',
	),
)); ?>
