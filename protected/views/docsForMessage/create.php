<?php
/* @var $this DocsForMessageController */
/* @var $model DocsForMessage */

$this->breadcrumbs=array(
	'Docs For Messages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DocsForMessage', 'url'=>array('index')),
	array('label'=>'Manage DocsForMessage', 'url'=>array('admin')),
);
?>

<h1>Create DocsForMessage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>