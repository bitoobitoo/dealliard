<?php
/* @var $this DialogController */
/* @var $model Dialog */

$this->breadcrumbs=array(
	'Dialogs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dialog', 'url'=>array('index')),
	array('label'=>'Create Dialog', 'url'=>array('create')),
	array('label'=>'View Dialog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dialog', 'url'=>array('admin')),
);
?>

<h1>Update Dialog <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>