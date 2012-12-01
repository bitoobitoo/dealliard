<?php
/* @var $this DialogController */
/* @var $model Dialog */

$this->breadcrumbs=array(
	'Dialogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dialog', 'url'=>array('index')),
	array('label'=>'Manage Dialog', 'url'=>array('admin')),
);
?>

<h1>Create Dialog</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>