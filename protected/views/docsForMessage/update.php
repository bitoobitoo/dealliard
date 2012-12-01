<?php
/* @var $this DocsForMessageController */
/* @var $model DocsForMessage */

$this->breadcrumbs=array(
	'Docs For Messages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DocsForMessage', 'url'=>array('index')),
	array('label'=>'Create DocsForMessage', 'url'=>array('create')),
	array('label'=>'View DocsForMessage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DocsForMessage', 'url'=>array('admin')),
);
?>

<h1>Update DocsForMessage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>