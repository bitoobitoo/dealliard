<?php
/* @var $this TranslationController */
/* @var $model Translation */

$this->breadcrumbs=array(
	'Translations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Translation', 'url'=>array('index')),
	array('label'=>'Create Translation', 'url'=>array('create')),
	array('label'=>'View Translation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Translation', 'url'=>array('admin')),
);
?>

<h1>Update Translation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>