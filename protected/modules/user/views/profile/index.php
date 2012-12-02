<?php
/* @var $this DefaultController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
    $model->id,
);

$this->menu=array(
    array('label'=>'My profile', 'url'=>array('index')),
	array('label'=>'My partners', 'url'=>array('partners')),
	array('label'=>'Settings', 'url'=>array('settings/edit')),
    array('label'=>'Logout', 'url'=>array('logout')),
);
?>

<h1>Users</h1>

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


