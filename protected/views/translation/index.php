<?php
/* @var $this TranslationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Translations',
);

$this->menu=array(
	array('label'=>'Create Translation', 'url'=>array('create')),
	array('label'=>'Manage Translation', 'url'=>array('admin')),
);
?>

<h1>Translations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
