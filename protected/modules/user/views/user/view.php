<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_group',
		'email',
		'password',
		'firstname',
		'lastname',
		'midname',
		'birth_date',
		'lang',
		'sex',
		'avatar',
		'occupation_id',
		'education_id',
		'position_id',
		'country_id',
		'm_region_id',
		'region_id',
		'city_id',
		'address',
		'privacy_dialog',
		'privacy_contact',
		'privacy_profile',
		'privacy_news',
		'last_action',
		'create_time',
		'update_time',
	),
)); ?>
