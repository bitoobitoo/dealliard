<?php
/* @var $this DocsForMessageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Docs For Messages',
);

$this->menu=array(
	array('label'=>'Create DocsForMessage', 'url'=>array('create')),
	array('label'=>'Manage DocsForMessage', 'url'=>array('admin')),
);
?>

<h1>Docs For Messages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
