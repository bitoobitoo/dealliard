<?php
/* @var $this TranslationController */
/* @var $model Translation */

$this->breadcrumbs=array(
	'Translations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Translation', 'url'=>array('index')),
	array('label'=>'Manage Translation', 'url'=>array('admin')),
);
?>

<h1>Create Translation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>